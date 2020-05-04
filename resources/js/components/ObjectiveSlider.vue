<template>
    <div class="row justify-content-start" v-if="objectives.length">
        <carousel :autoplay="true" :autoplayTimeout="4000" :perPage="options.perPage" :paginationEnabled="false">
            <slide v-for="objective in objectives" :key="objective.id" class="mw-100">
                <div class="intro-item mb-5 mb-lg-0 px-3 col-12 col-md-12">
                    <img :src="objective.icon" alt="" class="img-fluid w-100 img-thumbnail">
                    <h5 class="mt-2 mb-1 h5">{{ objective.title }}</h5>
                    <p class="text-justify text-sm">{{ objective.description }} </p>
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
    .VueCarousel {
        width: 100%;
    }
</style>