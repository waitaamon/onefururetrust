<template>
    <form @submit.prevent="submit" class="volunteer-form">
        <div class="alert alert-success" role="alert" v-if="success">
            Thank you for contacting us, we will get back to you shortly.
        </div>
        <div class="form-group">
            <select name="" id="" class="form-control" v-model="form.category">
                <option value="">Select category</option>
                <option :value="category" v-for="category in categories" :key="category"> {{ category}}</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" :class="{'is-invalid': errors.name }" placeholder="Full Name"
                   v-model="form.name">
            <span class="invalid-feedback" role="alert" v-if="errors.name">
                <strong>{{ errors.name[0] }}</strong>
            </span>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address" v-model="form.email">
            <span class="invalid-feedback" role="alert" v-if="errors.email">
                <strong>{{ errors.email[0] }}</strong>
            </span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Phone Number" v-model="form.phone">
            <span class="invalid-feedback" role="alert" v-if="errors.phone">
                <strong>{{ errors.phone[0] }}</strong>
            </span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Your location / country " v-model="form.location">
            <span class="invalid-feedback" role="alert" v-if="errors.location">
                <strong>{{ errors.location[0] }}</strong>
            </span>
        </div>

        <div class="form-group" v-if="form.category === 'donor'">
            <input type="text" class="form-control" placeholder="Amount" v-model="form.amount">
            <span class="invalid-feedback" role="alert" v-if="errors.amount">
                <strong>{{ errors.amount[0] }}</strong>
            </span>
        </div>

        <div class="form-group" v-if="form.category === 'volunteer'">
            <select name="" class="form-control" v-model="form.project">
                <option value="">Select interested project</option>
                <option :value="project.id" v-for="project in projects" :key="project.id"> {{ project.title}}</option>
            </select>
            <span class="invalid-feedback" role="alert" v-if="errors.project">
                <strong>{{ errors.project[0] }}</strong>
            </span>
        </div>

        <div class="form-group" v-if="form.category !== 'volunteer'">
            <select name="" class="form-control" v-model="form.interest">
                <option value="">Select interest</option>
                <option :value="interest.id" v-for="interest in interests" :key="interest.id"> {{ interest.title}}
                </option>
            </select>
            <span class="invalid-feedback" role="alert" v-if="errors.interest">
                <strong>{{ errors.interest[0] }}</strong>
            </span>
        </div>

        <button type="submit" class="btn btn-main rounded mt-3">Send Message</button>
    </form>
</template>

<script>
	export default {
		name: 'register-partner',
		data() {
			return {
				form: {},
				success: false,
				errors: [],
				categories: ['donor', 'organization', 'volunteer'],
				projects: [],
				interests: []
			}
		},
		methods: {
			async submit() {
				return axios.post('/get-involved', this.form)
					.then(response => {
						this.resetForm()
						this.success = true
					})
					.catch(e => {
						this.errors = e.response.data.errors
					})
			},
			async prerequisites() {
				return axios.get('/partner/prerequisites')
					.then(response => {
						this.projects = response.data.projects
						this.interests = response.data.interests
					})
					.catch(e => {
						console.error('error')
					})
			},
			resetForm() {
				this.form = {
					name: '',
					location: '',
					email: '',
					phone: '',
					category: '',
					amount: '',
					interest: '',
					project: '',
				}
			}
		},
		created() {
			this.resetForm()
			this.prerequisites()
		}
	}
</script>