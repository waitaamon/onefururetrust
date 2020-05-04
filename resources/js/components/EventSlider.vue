<template>
    <div class="row justify-content-start" v-if="events.length">
        <carousel :autoplay="true" :autoplayTimeout="5000" :perPage="4" :paginationEnabled="false">
            <slide v-for="event in events" :key="event.id" class="col-12 col-sm-3">
                <div class="intro-item mb-5 mb-lg-0 px-3 col-12">
                    <img :src="event.image" alt="" class="img-fluid w-100 img-thumbnail">
                    <a :href="event.link" target="_blank"><h5 class="mt-2 mb-1 h5">{{ event.title }}</h5></a>
                    <p class="text-justify text-sm">{{ event.description }} </p>
                </div>
            </slide>
        </carousel>

    </div>
</template>

<script>
	import {Carousel, Slide} from 'vue-carousel';

	export default {
		name: 'event-slider',
		components: {Carousel, Slide},
		data() {
			return {
				events: [],
			}
		},
		methods: {
			async getEvents() {
				return axios.get('/api/events')
					.then(response => {
						this.events = response.data
					})
					.catch(e => {
						console.error('error')
					})
			}
		},
		created() {
			this.getEvents()
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