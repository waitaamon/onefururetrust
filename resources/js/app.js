
require('./bootstrap');

window.Vue = require('vue');



Vue.component('landing-slider', require('./components/LandingSlider.vue').default);
Vue.component('objectives-slider', require('./components/ObjectiveSlider.vue').default);
Vue.component('partners-slider', require('./components/PartnersSlider.vue').default);
Vue.component('register-partner', require('./components/RegisterPartner.vue').default);

const app = new Vue({
    el: '#app',
});
