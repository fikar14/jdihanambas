require('./bootstrap');
require('./admin-menu');
require('@fortawesome/fontawesome-free');
require('@fortawesome/fontawesome-free-solid');
require('@fortawesome/fontawesome-free-regular');
require('@fortawesome/fontawesome-free-brands');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

Vue.component('home', require('./components/Home.vue').default);

// const app = new Vue({
//     el: '#app'
// });
