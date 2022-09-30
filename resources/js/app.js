// app.js
require('./bootstrap');

import { createApp, inject } from 'vue'
import router from './router';
import App from './App.vue'
import SplitCarousel from "vue-split-carousel";
import VueProgressBar from "@aacassandra/vue3-progressbar";
const app = createApp(App);

if(location.hostname=="localhost"){
    app.config.globalProperties.$host = 'http://127.0.0.1:8000/api/'  //for localhost
    app.config.globalProperties.$imghost = 'http://127.0.0.1:8001/upload/'  //for localhost
}else{

app.config.globalProperties.$host = 'https://amichand.com/api/'   //for server
app.config.globalProperties.$imghost = 'https://amichand.com/admin/public/upload/'  //for server
}




app.use(router).use(SplitCarousel).use(VueProgressBar).mount("#app");





