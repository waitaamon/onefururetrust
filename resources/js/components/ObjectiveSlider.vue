<template>
    <div class="row justify-content-center" v-if="objectives.length">
        <carousel :autoplay="true" :autoplayHoverPause="true" :perPage="options.perPage" :paginationEnabled="true">
            <slide v-for="objective in objectives" :key="objective.id" class="mw-100">
                <div class="intro-item mb-5 mb-lg-0 px-4">
                    <img :src="objective.icon" alt="" class="img-fluid w-100 img-thumbnail">
                    <h4 class="mt-2 mb-1">{{ objective.title }}</h4>
                    <p class="text-justify text-sm">{{objective.description}} </p>
                </div>
            </slide>
        </carousel>

    </div>
</template>

<script>
	import {Carousel, Slide} from 'vue-carousel';

	export default {
		name: 'objectives-slider',
		components: {Carousel, Slide},
		data() {
			return {
				objectives: [],
				options: {
					perPage: 4,
					loop: true
				}
			}
		},
		methods: {
			async getObjectives() {
				return axios.get('/api/objectives')
					.then(response => {
						this.objectives = response.data
					})
					.catch(e => {
						console.error('error')
					})
			}
		},
		created() {
			this.getObjectives()
		}
	}
</script>

<style scoped>
    img {
        max-height: 150px;
    }
</style>