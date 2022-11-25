<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" v-bind:style="{ backgroundImage: 'url(' + $imghost1 + image + ')' }"
            data-type="parallax" data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Products</h4>
                            <p>Home <router-link :to="{ name: 'home' }">Products</router-link>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- product Section Start -->
        <section class="projects-section">
            <div class="row">

                <div class="col-sm-9">
                    <h3 class="text-uppercase mb-3 mpl-5"> <span class="border-bottom border-warning">Our</span> <span
                            class="text-warning">Company</span></h3>

                    <div class="mpl-5 p-2">
                        <div class="row">
                            <div class="col-md-6 col-lg-4" v-for="(item, index) in products" :key="item.id">
                                <div class="projects-item style-2">
                                    <div class="thumb">
                                        <img v-bind:src="$imghost + 'products/' + item.img_name" alt="">
                                        <div class="content">
                                            <div class="counter-item">
                                                <h1>{{ index + 1 }}</h1>
                                            </div>
                                            <h3>
                                                <router-link
                                                    :to="{ name: 'project.single', params: { name: item.slug } }">
                                                    {{ item.log_title }}</router-link>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="text-bottom">
                                        <h4>{{ item.log_description.substr(0, 70) }}..</h4>
                                        <router-link class="project-btn"
                                            :to="{ name: 'project.single', params: { name: item.slug } }">View Project
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 p-2 content">
                    <h3 class="text-uppercase mb-3"> <span class="border-bottom border-warning">Our</span> <span
                            class="text-warning">Category</span></h3>
                    <div class="details-tag bg-primary-dark ">
                        <ul v-for="item in category" :key="item.id">
                            <li>
                                <h5 class="text-uppercase p-2">
                                    <router-link class="text-white"
                                        :to="{ name: 'products', params: { category: item.name.toLowerCase() } }">{{
        item.name
                                        }}
                                    </router-link>
                                </h5>

                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </section>
        <!-- product Section End -->



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
            category: [],
            image: 'images/bg/px-1.jpg',

        };
    },
    methods: {
        async getData() {
            try {
                const res = await axios.get(this.$host + "products/" + this.$route.params.category);
                this.products = res.data.products;
                this.category = res.data.category;

            } catch (error) {
                console.log(error);
            }
        }
    },
    async created() {
        this.getData();
    },
    watch: {
        url1() {
            this.getData();
        }
    },
    async created() {
        this.getData();
    },

    updated() {
        this.url1 = this.$route.params.category
    },

}
</script>