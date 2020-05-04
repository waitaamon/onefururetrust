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
            <slide v-for="slider in sliders" :key="slider.id">
                <div
                        class="image-slider d-flex justify-content-center align-items-center"
                        :style='{ backgroundImage: `linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url(${slider.image})` }'
                >
                    <div class="text-center">
                        <h2
                                class="content-title mt-4"
                                :style="{color: `${slider.title_color}`}"
                        >
                            {{ slider.title }}
                        </h2>
                        <p class="text-center" :style="{color: `${slider.subtitle_color}`}">{{ slider.subtitle}}</p>
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
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
</style>