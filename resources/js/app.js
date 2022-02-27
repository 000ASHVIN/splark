import Vue from 'vue';
import App from './components/App.vue';
// import { BootstrapVue } from 'bootstrap-vue';

// import 'bootstrap/dist/css/bootstrap.css';
// import 'bootstrap-vue/dist/bootstrap-vue.css';

// Vue.use(BootstrapVue);
// import router from './router';
// import 'animate.css';

export function createApp() {
    return new Vue({
        render: h => h(App)
    });
}
