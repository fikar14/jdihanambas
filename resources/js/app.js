require('./bootstrap');
require('./admin-menu');
require('@fortawesome/fontawesome-free');
require('@fortawesome/fontawesome-free-solid');
require('@fortawesome/fontawesome-free-regular');
require('@fortawesome/fontawesome-free-brands');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = "rfc3986";

import Buefy from 'buefy';

Vue.use(Buefy);

Vue.component('slug-widget', require('./components/Slug-widget.vue').default);
Vue.component('role-create', require('./components/Role-create.vue').default);

// const app = new Vue({
//     el: '#app'
// });
