import { createWebHistory, createRouter } from "vue-router";
import Home from '../pages/index.vue';
import About from '../pages/about.vue';
import Contact from '../pages/contact.vue'
import Services from '../pages/services.vue';
import Projects from '../pages/projects.vue';
import Career from '../pages/career.vue';
import MissionVission from '../pages/mission-vission.vue';
import History from '../pages/history.vue';
import ServiceSingle from '../pages/service-single.vue';
import ProjectSingle from '../pages/project-single.vue'
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
        component: Career,
    },
    {
        path: "/vission-mission",
        name: "vission-mission",
        component: History,
    },
    {
        path: "/history",
        name: "history",
        component: MissionVission,
    },

    {
        path: "/services/single/:name",
        name: "service.single",
        component: ServiceSingle,
    },
    {
        path: "/project/single",
        name: "project.single",
        component: ProjectSingle,
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;