<template>
    <div class="row justify-content-center" v-if="partners.length">
        <carousel :autoplay="true" :autoplayHoverPause="true" :perPage="options.perPage" :paginationEnabled="true">
            <slide v-for="partner in partners" :key="partner.id" class="mw-100">
                <div class="intro-item mb-5 mb-lg-0 mx-4">
                    <div class="name-initials d-flex justify-content-center align-items-center border rounded-circle text-center">
                        {{ partner.name.substring(0,2) }}
                    </div>
                    <h4 class="mt-2 mb-1">{{ partner.name }}</h4>
                </div>
            </slide>
        </carousel>

    </div>
</template>

<script>
	import {Carousel, Slide} from 'vue-carousel';

	export default {
		name: 'partners-slider',
		components: {Carousel, Slide},
		data() {
			return {
				partners: [],
				options: {
					perPage: 4
				}
			}
		},
		methods: {
			async getPartners() {
				return axios.get('/api/partners')
					.then(response => {
						this.partners = response.data
					})
					.catch(e => {
						console.error('error')
					})
			}
		},
		created() {
			this.getPartners()
		}
	}
</script>

<style scoped>
.name-initials {
    height: 50px;
    width: 50px;
    background: #0d6fb1;
    color: #fff;

}
</style>