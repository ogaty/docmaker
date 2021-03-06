require('./bootstrap');
import Vue from 'vue';
import FrontEnd from './components/FrontEndComponent.vue'
import FrontEndDocumentShow from './components/FrontEndDocumentShowComponent.vue'
import BackEndDocumentIndex from './components/BackEndDocumentIndexComponent.vue'
import BackEndDocumentShow from './components/BackEndDocumentShowComponent.vue'
import BackEndDocumentAdd from './components/BackEndDocumentAddComponent.vue'
import BackEndDocumentEdit from './components/BackEndDocumentEditComponent.vue'
import BackEndDocumentItemAdd from './components/BackEndDocumentItemAddComponent.vue'
import BackEndUserIndex from './components/BackEndUserIndexComponent.vue'
import BackEndUserAdd from './components/BackEndUserAddComponent.vue'
import BackEndUserEdit from './components/BackEndUserEditComponent.vue'

Vue.component('frontend-component', FrontEnd);
Vue.component('frontend-document-show-component', FrontEndDocumentShow);
Vue.component('backend-document-index-component', BackEndDocumentIndex);
Vue.component('backend-document-show-component', BackEndDocumentShow);
Vue.component('backend-document-add-component', BackEndDocumentAdd);
Vue.component('backend-document-edit-component', BackEndDocumentEdit);
Vue.component('backend-document-item-add-component', BackEndDocumentItemAdd);
Vue.component('backend-user-index-component', BackEndUserIndex);
Vue.component('backend-user-add-component', BackEndUserAdd);
Vue.component('backend-user-edit-component', BackEndUserEdit);


const app = new Vue({
    el: '#app'
});
