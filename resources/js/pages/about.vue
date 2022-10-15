<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg"  v-bind:style="{ backgroundImage: 'url(' + $imghost1 + image+')' }" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>about</h4>
                            <p>Home <a href="#">about</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- Company Section Start -->
        <aboutVue />
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
import aboutVue from '../components/about.vue';
import teamVue from '../components/team.vue';
export default {
    name: 'about',
    components: {
        testimonialVue,
        aboutVue,
        teamVue
    },
    data() {
        return {
            image:'images/bg/px-1.jpg',
 
        }
    },

}
</script>
