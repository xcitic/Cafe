import Vue from 'vue';
import App from './App.vue';
import router from './router';
// import './registerServiceWorker';


Vue.config.productionTip = false;

import VueFlashMessage from 'vue-flash-message';
require('vue-flash-message/dist/vue-flash-message.min.css');
import VeeValidate from 'vee-validate';
import VModal from 'vue-js-modal';

// Bind plugins
Vue.use(VueFlashMessage, {
  messageOptions: {
    timeout: 3000
  }
});

Vue.use(VeeValidate);
Vue.use(VModal, { dynamic: true, dynamicDefaults: { clickToClose: false } });

Vue.component('dashboard', require('./views/Dashboard.vue').default);

/* Axios http lib */
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.baseURL = process.env.MIX_APP_URL;

/** CSRF Token */
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


new Vue({
  router,
  render: h => h(App)
}).$mount('#app');
