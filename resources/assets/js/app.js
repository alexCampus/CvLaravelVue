
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app', require('./components/App.vue'));
Vue.component('NavBar', require('./components/NavBar.vue'));
Vue.component('NavBarTabs', require('./components/NavBarTabs.vue'));
Vue.component('Home', require('./components/Home.vue'));
Vue.component('Content', require('./components/Content.vue'));
Vue.component('SelectLang', require('./components/selectLang.vue'));
import BootstrapVue from 'bootstrap-vue'
import VueI18n from 'vue-i18n'
import {MESSAGES} from './messages.js';
Vue.use(BootstrapVue)
Vue.use(VueI18n)

const messages = MESSAGES

const i18n = new VueI18n({
    locale: 'fr', // set locale
    messages, // set locale messages
})
const app = new Vue({ i18n }).$mount('#app')
