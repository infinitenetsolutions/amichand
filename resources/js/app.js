// app.js
require('./bootstrap');

import { createApp, inject } from 'vue'
import router from './router';
import App from './App.vue'
import SplitCarousel from "vue-split-carousel";
import VueProgressBar from "@aacassandra/vue3-progressbar";
const app = createApp(App);

app.config.globalProperties.$host = 'http://127.0.0.1:8001/api/'  //for localhost
// app.config.globalProperties.$host = 'https://amichand.com/api/'   //for server
app.config.globalProperties.$imghost = 'http://127.0.0.1:8000/upload/'  //for localhost
// app.config.globalProperties.$imghost = 'https://amichand.com/admin/public/upload/'  //for server

app.use(router).use(SplitCarousel).use(VueProgressBar).mount("#app");





