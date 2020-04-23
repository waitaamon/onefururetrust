<template>
    <div class="mw-100 h-auto" v-if="sliders.length">
        <carousel
                :autoplay="true"
                :autoplayTimeout="5000"
                :perPage="1"
                :centerMode="true"
                :loop="true"
                :paginationEnabled="false"
        >
            <slide v-for="{image, id} in sliders" :key="id">
                <div
                        class="image-slider d-flex justify-content-center align-items-center"
                        :style='{ backgroundImage: `linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url(${image})` }'
                >
                    <div class="text-center">
                        <h2 class="content-title mt-4 text-white">ONE WORLD ONE FUTURE </h2>
                        <h4 class="h4 text-warning">TOWARDS A BETTER WORLD</h4>
                    </div>
                </div>
            </slide>
        </carousel>
    </div>
</template>

<script>
	import {Carousel, Slide} from 'vue-carousel';

	export default {
		name: "landing-slider",
		components: {
			Carousel,
			Slide
		},
		data() {
			return {
				sliders: []
			}
		},
		methods: {
			async getSliderImages() {
				return axios.get('/api/slider-images')
					.then(response => {
						this.sliders = response.data
					})
					.catch(e => {
						console.log('error')
					})
			}
		},
		created() {
			this.getSliderImages()
		}
	}
</script>

<style scoped>
    .image-slider {
        height: 400px;
        width: 100%;
        background-repeat:no-repeat;
        background-position: center center;
    }
</style>