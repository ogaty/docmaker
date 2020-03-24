require('./bootstrap');
import Vue from 'vue';
import FrontEnd from './components/FrontEndComponent.vue'
import BackEndDocumentIndex from './components/BackEndDocumentIndexComponent.vue'
import BackEndDocumentEdit from './components/BackEndDocumentEditComponent.vue'

Vue.component('frontend-component', FrontEnd);
Vue.component('backend-document-index-component', BackEndDocumentIndex);
Vue.component('backend-document-edit-component', BackEndDocumentEdit);


const app = new Vue({
    el: '#app'
});
