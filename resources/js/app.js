import Vue from 'vue';
import App from './components/App.vue';

import router from './router';

export default new Vue({
  router,
  render: h => h(App)
});
