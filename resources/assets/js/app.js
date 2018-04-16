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

//import { Tabs, Tab } from 'vue-tabs-component';

//Vue.component('tabs', Tabs);
//Vue.component('tab', Tab);
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('to-do', require("./components/toDo.vue"));
Vue.component('tabs', require('./components/tabs.vue'));
Vue.component('tab', require('./components/tab.vue'));
Vue.component('axios', require("./components/Axios.vue"));
Vue.component('form-create', require("./components/FormProjectCreate.vue"));

const app = new Vue({
    el: '#app'
});
