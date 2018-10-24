
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// Vform configuration starts
import { Form, HasError, AlertError } from 'vform'

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
// vform configuration ends

// Vue router configuration starts
import VueRouter from 'vue-router';
Vue.use(VueRouter);

let routes = [
  { path: '/home', component: require('./components/Dashboard.vue') },
  { path: '/dashboard', component: require('./components/Dashboard.vue') },
  { path: '/developer', component: require('./components/Developer.vue') },
  { path: '/users', component: require('./components/Users.vue') },
  { path: '/profile', component: require('./components/Profile.vue') },
  { path: '*', component: require('./components/NotFound.vue') },
];

const router = new VueRouter({
  routes, // short for `routes: routes`
  mode: 'history'
});
// Vue router configuration ends

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
  el: '#app',
  router
});
