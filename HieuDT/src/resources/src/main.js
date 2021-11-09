
import {createApp} from 'vue';
import App from './App.vue';
import router from './router/index.js';

import 'bootstrap';
import "bootstrap/dist/css/bootstrap.min.css"
// tao đối tượng vue 
 const app = createApp(App).use(router);

 //mount vào el 
 app.mount("#app");


