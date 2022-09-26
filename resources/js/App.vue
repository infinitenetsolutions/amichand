<template >
    <div>
        <navbarVue />
      
        <router-view />
        <footerVue />
    </div>
</template>
<script>
import navbarVue from './components/navbar.vue';
import footerVue from './components/footer.vue';

export default {
    name: 'app',
    components: {
        navbarVue,
        footerVue,
    
    }
}
</script>