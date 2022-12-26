<template>

    <!-- slider start -->
    <sliderVue />
    <!-- slider end -->
    <!-- Features Section Start -->
    <section class="welcome-feature-section pb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="welcome-feature">
                        <div class="thumb">
                            <img v-bind:src="$imghost1 + 'images/features/1.jpg'" alt="features img">
                        </div>
                        <div class="content">
                            <div class="icon-box">
                                <i class="flaticon-3d"></i>
                            </div>
                            <h2>Need Fast? We Can Help</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="welcome-feature">
                        <div class="thumb">
                            <img v-bind:src="$imghost1 + 'images/features/2.jpg'" alt="features img">
                        </div>
                        <div class="content">
                            <div class="icon-box">
                                <i class="flaticon-engineer"></i>
                            </div>
                            <h2>70 years experience</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="welcome-feature">
                        <div class="thumb">
                            <img v-bind:src="$imghost1 + 'images/features/3.jpg'" alt="features img">
                        </div>
                        <div class="content">
                            <div class="icon-box">
                                <i class="flaticon-idea"></i>
                            </div>
                            <h2>Punctual Delivery Time</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Product Section Start -->
    <section class="service-section4 bg-f9 pb-40" :style="{'background-image':'url('+$imghost+'images/bg/px-1.jpg)'}" >
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <!-- <h4>OUR Services</h4> -->
                    <h2>Our <span class=" border-bottom border-warning  border-2">Products</span></h2>
                   
                </div>
            </div>
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
                                    <router-link :to="{ name: 'project.single', params: { name: item.slug } }" v-html="item.log_title.substr(0, 20)"> 
                                        </router-link>
                                </h3>
                            </div>
                        </div>
                        <div class="text-bottom">
                            <h4 v-html=" item.log_description.substr(0, 70)"></h4>
                            <router-link class="project-btn"
                                :to="{ name: 'project.single', params: { name: item.slug } }">
                                View Product
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Section End -->
    <!-- about start -->
    <aboutVue />
    <!-- about end -->
    <!-- Service Section Start -->
    <section class="projects-section over-layer-white parallax-bg" :style="{'background-image':'url('+$imghost+'images/bg/px-1.jpg)'}"   :data-type="'parallax'" data-speed="5">
        <div class="container">
            <div class="row">
                <div class="section-title">

                    <h2>Our <span class=" border-bottom border-warning  border-2">Services</span></h2>
                    
                </div>
            </div>
            <div class="row">

                <div v-for="item in services" :key="item.id" class="col-md-4">
                    <div class="service-item style-4">
                        <div class="thumb">
                            <img alt="service img" v-bind:src="$imghost + 'services/' + item.img_name">
                            <div class="service-link-box">
                                <router-link :to="{ name: 'service.single', params: { name: item.slug } }">Read More
                                </router-link>
                            </div>
                        </div>
                        <div class="content">
                            <h3>{{ item.log_title.substr(0, 22) }}</h3>
                            <h4>{{ item.log_description.substr(0, 40) }}</h4>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- service Section End -->

    <!-- Contact Section Start -->
    <section class="contact-divider pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-item">
                        <h5>plant is an industrial site</h5>
                        <h3>The factory or manufacturing</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout.</p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-0">
                    <div class="contact-btn-item mt-3">
                        <router-link class="contact-btn style-1" to="/contact">Contact us</router-link>
                        <h3>+91{{ site_info.phone }} , +91{{ site_info.phone2 }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- testimonials Section Start -->
    <testimonialVue />
    <!-- testimonials Section End -->

 
    <!-- Contact Section Start -->
    <section class="contact-section pb-70">
        <div class="container">
            <div class="row contact-bg">
                <div class="col-md-12 col-lg-4 p-0">
                    <div class="contact-text">
                        <h2>Get in <span>Touch</span></h2>
                        <p>Consectetur adipisicing elit. Temporibus error quod necessitatibus</p>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="flaticon-pin-1"></i>
                            </div>
                            <h6>{{ site_info.address }}
                            </h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h6> {{ site_info.phone }} <br> {{ site_info.phone2 }}</h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h6> <a v-bind:href="'mailto:' + site_info.email">{{ site_info.email }}</a> </h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="fab fa-internet-explorer"></i>
                            </div>
                            <h6><a href="#">http://www.amichand.com/</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 style-2">
                    <contactVue />
                </div>
            </div>
        </div>
    </section>
    <!-- contact vue end -->
    <!-- clients vue start -->
    <clientsVue />
    <!-- clients vue end -->
</template>

<script>
import clientsVue from '../components/clinets.vue'
import contactVue from '../components/contact.vue';
import sliderVue from '../components/slider.vue';
import testimonialVue from '../components/testimonial.vue';
import aboutVue from '../components/about.vue';
export default {
    name: 'home',
    components: {
        clientsVue,
        contactVue,
        sliderVue,
        testimonialVue,
        aboutVue

    },
    data() {
        return {
            products: [],
            services: [],
            site_info: [],



        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "index");
            this.products = res.data.products;
            this.services = res.data.services;

        } catch (error) {
            console.log(error);
        }

        try {
            const res = await axios.get(this.$host + "contact");
            this.site_info = res.data;
        } catch (error) {
            console.log(error);
        }

    },
}
</script>