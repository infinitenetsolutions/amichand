import { createWebHistory, createRouter } from "vue-router";
import Home from '../pages/index.vue';
import About from '../pages/about.vue';
import Contact from '../pages/contact.vue'
import Services from '../pages/services.vue';
import Projects from '../pages/projects.vue';
import Career from '../pages/career.vue';
const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/about",
        name: "about",
        component: About,
    },
    {
        path: "/contact",
        name: "contact",
        component: Contact,
    },
    {
        path: "/services",
        name: "services",
        component: Services,
    },
    {
        path: "/projects",
        name: "projects",
        component: Projects,
    },
    {
        path: "/career",
        name: "career",
        component: Career ,
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;