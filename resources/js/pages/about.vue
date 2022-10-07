<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="images/bg/px-1.jpg" data-type="parallax"
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
        <section class="team-section bg-f8">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>OUR <span class=" border-bottom border-warning  border-2" >TEAM</span></h2>
                        <p>Our team EXPERT MEMBERS</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="public/images/team/1.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">mikel jackson</a></h4>
                                <h5>designer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="public/images/team/2.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">CM Punk</a></h4>
                                <h5>designer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="public/images/team/3.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">Hulk Hogan</a></h4>
                                <h5>designer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="public/images/team/4.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">André the Giant</a></h4>
                                <h5>designer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team Section End -->

        <!-- testimonials Section Start -->
        <testimonialVue />
        <!-- testimonials Section End -->
    </div>
</template>
<script>
import testimonialVue from '../components/testimonial.vue';
import aboutVue from '../components/about.vue';
export default {
    name: 'about',
    components: {
        testimonialVue,
        aboutVue
    }
    , data() {
        return {
            team: [],

        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "team");
            this.team = res.data;
        } catch (error) {
            console.log(error);
        }
    },
}
</script>
