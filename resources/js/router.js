import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router);

import Home from './components/Home.vue'
import Contact from './components/Contact.vue'

export default new Router({
  mode: 'history',
  routes: [
    { path: '/', component: Home, name: 'home' },
    { path: '/contact', component: Contact, name: 'contact' }
  ]
});