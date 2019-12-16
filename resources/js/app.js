/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('projects-component', require('./components/ProjectsComponent.vue').default);
Vue.component('contact-component', require('./components/Contact.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('academia-component', require('./components/Academia.vue').default);
Vue.component('logistics-component', require('./components/Logistics.vue').default);
Vue.component('news-component', require('./components/News.vue').default);
Vue.component('latest-component', require('./components/LatestNews.vue').default);
Vue.component('politics-component',require('./components/Politics.vue').default);
Vue.component('latestpolitical-component',require('./components/LatestPolitical.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
