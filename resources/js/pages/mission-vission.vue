<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" style="background-image: url('images/bg/px-1.jpg')" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Mission/vision</h4>
                            <p>Home <a href="#">Mission/vision</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- Company Section Start -->
        <section class="company-section">
            <div class="container">
                <div class="row about-features">
                    <div class="col-md-8">
                        <div class="content">

                            <h1>WelCome to <span class=" border-bottom border-warning  border-2">Amichand</span></h1>
                            <p class="p-text">{{about.massage}}.</p>

                            <!-- <div class="company-funfact">
                                <div class="funfact-item">
                                    <h2>{{all_product}}+</h2>
                                    <h4>Products</h4>
                                </div>
                                <div class="funfact-item">
                                    <h2>{{all_clients}}+</h2>
                                    <h4>Happy Clients</h4>
                                </div>
                                <div class="funfact-item">
                                    <h2>75+</h2>
                                    <h4>Award Won</h4>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <img v-bind:src="$imghost+'about/'+about.images" v-bind:alt="about.name">
                            <div class="about-video">
                                <h4> Our company </h4>
                                <a class="about-video-btn" href="#"><i class="far fa-building"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company Section End -->

        <!-- team Section Start -->
        <teamVue />
        <!-- team Section End -->

        <!-- testimonials Section Start -->
        <testimonialVue />
        <!-- testimonials Section End -->
    </div>
</template>
<script>
import testimonialVue from '../components/testimonial.vue';
import teamVue from '../components/team.vue';
export default {
    name: 'about',
    components: {
        testimonialVue,
        teamVue
    }

}
</script>
