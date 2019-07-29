import Vue from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
import './registerServiceWorker';


import VeeValidate from 'vee-validate';
// Bind plugins
Vue.use(VeeValidate);

Vue.config.productionTip = false;

/* Axios http lib */
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.baseURL = process.env.MIX_APP_URL

/** CSRF Token */
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app');
