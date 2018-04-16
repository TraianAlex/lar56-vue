require('./bootstrap');

window.Vue = require('vue');
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
