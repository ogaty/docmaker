require('./bootstrap');
import Vue from 'vue';
import FrontEnd from './components/FrontEndComponent.vue'
import BackEnd from './components/BackEndComponent.vue'

Vue.component('frontend-component', FrontEnd);
Vue.component('backend-component', BackEnd);


const app = new Vue({
    el: '#app'
});
