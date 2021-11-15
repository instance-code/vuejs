'use strict';

import { createApp } from 'vue';
import App from '@/App.vue';
import router from './router/routes';

const app = createApp(App);
const plugin = {
  install () {
    // app.config.globalProperties.$axios = axios;
  }
};

// [store, i18n, router, plugin].forEach((i) => {
//   app.use(i);
// });

app.use(router);
app.mount("#app");

