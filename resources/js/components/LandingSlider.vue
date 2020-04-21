<template>
    <div class="mw-100 h-auto" v-if="sliders.length">
        <carousel :autoplay="true" :autoplayHoverPause="true" :perPage="1" :paginationEnabled="true"
                  :scrollPerPage="true" :centerMode="true" :loop="true" :autoplayTimeout="5000">
            <slide v-for="{image, id, identifier} in sliders" :key="id" class="mw-100 opacity-25 relative">
                <div
                        class="image-slider d-flex justify-content-center align-items-center"
                        v-bind:style='{ backgroundImage: "linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url(" + image + ")" }'
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
    }
</style>