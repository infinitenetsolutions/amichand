<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="images/bg/px-1.jpg" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Products</h4>
                            <p>Home <router-link :to="{name:'home'}">Products</router-link>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- Projects Section Start -->
        <section class="projects-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4" v-for="(item,index) in products" :key="item.id">
                        <div class="projects-item style-2"  >
                            <div class="thumb">
                                <img v-bind:src="$imghost+'products/'+item.img_name" alt="">
                                <div class="content">
                                    <div class="counter-item">
                                        <h1>{{index+1}}</h1>
                                    </div>
                                    <h3>
                                        <router-link :to="{name:'project.single',params: { name: item.slug }}">{{item.log_title}}</router-link>
                                    </h3>
                                </div>
                            </div>
                            <div class="text-bottom">
                                <h4>{{item.log_description.substr(0,70)}}..</h4>
                                <router-link class="project-btn" :to="{name:'project.single',params: { name: item.slug }}">View Project
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section End -->

        <!-- Client Section Start -->
        <clientsVue />
        <!-- Client Section End -->


    </div>
</template>
<script>
import clientsVue from '../components/clinets.vue'
export default {
    name: "products",
    components: {
        clientsVue
    }
    ,
    data() {
        return {
            products: [],
        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "products");
            this.products = res.data;
        } catch (error) {
            console.log(error);
        }
    },

}
</script>