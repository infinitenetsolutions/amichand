<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="../../images/bg/px-1.jpg" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Project details</h4>
                            <p>Home <a href="#">Product</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- Projects Section Start -->

        <section class="project-details-section pb-60">
            <div class="container">
                <div class="row">
                    <div class="project-details">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="project-thumb">
                                    <!-- slider start -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    v-bind:src='$imghost+"products/"+images[0].name' alt="First slide">
                                            </div>
                                            <div class="carousel-item" v-for="item in images" :key="item.id">
                                                <img class="d-block w-100" v-bind:src='$imghost+"products/"+ item.name'
                                                    alt="Second slide">
                                            </div>

                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <!-- slider end -->
                                </div>
                            </div>
                        </div>
                        <div class="row mb-50">
                            <div class="col-md-8">
                                <div class="project-title">
                                    <h3> {{ products.log_title }} </h3>
                                </div>
                                <p class="mb-25">{{products.log_description}}</p>
                                <ul class="project-social">
                                    <span>Share:</span>
                                    <li><a href="#"><i class="flaticon-facebook-logo"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="flaticon-social-media"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="details-tag">
                                    <ul v-for="item in category" :key="item.id">
                                        <li>
                                            <span>
                                                <router-link class="text-white" :to="{name:'projects',}">{{item.name}}
                                                </router-link>
                                            </span>
                                            <span>Agriculture</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="project-title">
                                    <h3>Product <span>Special</span> Feature</h3>
                                </div>
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item challenge-tag row">
                                        <div class="col-sm-6" v-for="item in feature" :key="item.id">
                                            <li class=" accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                <i class="fas fa-check"></i>{{ item.title}}
                                            </li>

                                            <div id="panelsStayOpen-collapseOne"
                                                class=" accordion-collapse collapse show"
                                                aria-labelledby="panelsStayOpen-headingOne">
                                                <div class="accordion-body">
                                                    <strong class="pl-2 pr-2">{{ item.description}} </strong>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section End -->
        <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-title text-center project-details project-title">
                        <h3 class="text-uppercase">Product <span class="text-warning">RANGE</span> </h3>
                    </div>

                </div>
            </div>
        </section>

        <!-- Client Section Start -->
        <clientsVue />
        <!-- Client Section End -->
    </div>
</template>

<script>
import clientsVue from '../components/clinets.vue'

export default {
    name: 'project-details',
    components: {
        clientsVue
    }
    ,
    data() {
        return {
            products: [],
            feature: [],
            images: [],
            category: [],
            all_products: []
        };
    },
    async created() {
        try {

            const res = await axios.get(this.$host + "products/single/" + this.$route.params.name);
            this.products = res.data.product;
            this.feature = res.data.feature;
            this.images = res.data.images;
            this.all_products = res.data.products;
            this.category = res.data.category;
        } catch (error) {
            console.log(error);
        }

    },
}
</script>