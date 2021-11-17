import { createApp } from "vue";
import App from "./App.vue";

const app = createApp(App);
const plugin = {
    install() {
        // app.config.globalProperties.$axios = axios;
    },
};

// [store, i18n, router, plugin].forEach((i) => {
//   app.use(i);
// });

app.mount("#app");
