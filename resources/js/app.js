import Vue from 'vue'
import VueRouter from 'vue-router'
import InitComponent from "./components/Init.component"
import VueResource from 'vue-resource';
import {routes} from './router'
import VueSession from 'vue-session'

require('./bootstrap');


window.Vue = require('vue');

Vue.use(VueSession)
Vue.use(VueResource);

/*
* Routing to a url with vue
* */

Vue.use(VueRouter)

let router = new VueRouter({
    hashbang: false,
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    components: { InitComponent },
    router,
});

export default router
