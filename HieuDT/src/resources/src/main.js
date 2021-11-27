'use strict';

import {createApp} from 'vue';
import App from './App.vue';
import router from '@/router/index.js';

import store from '@/store'
import axios from '@/plugins/axios'

import '@/assets/bootstrap.scss'
import '@/assets/app.scss'
// tao đối tượng vue 
 const app = createApp(App);

 const plugin = {
    install () {
      app.config.globalProperties.$axios = axios;
    }
  };
  
  [store, router, plugin].forEach((plg) => {
    app.use(plg);
  });

 //mount vào el 
 app.mount("#app");


