'use strict';

import { createApp } from 'vue';

import App from '@/App.vue';
import router from './router';
import store from './store/store.js';
const app = createApp(App);
const plugin = {
    install() {
        // app.config.globalProperties.$axios = axios;
    }
};

// [store, i18n, router, plugin].forEach((i) => {
//   app.use(i);
// });
app.use(router);
app.use(store);
app.mount("#app");