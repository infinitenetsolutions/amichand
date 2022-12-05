<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" v-bind:style="{ backgroundImage: 'url(' + $imghost1 + image + ')' }"
            data-type="parallax" data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>contact</h4>
                            <p>Home <a href="#">contact</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <section class="contact-details pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-item style-1 border-1px">
                            <div class="service-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Contact Info</a></h5>
                                <p>{{ site_info.address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item style-1 border-1px">
                            <div class="">
                                <i class="fas fa-phone-office"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Contact No.</a></h5>
                                <p>{{ site_info.phone }} <br> {{ site_info.phone2 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item style-1 border-1px">
                            <div class="">
                                <i class="fad fa-envelope-open-text"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Email</a></h5>
                                <p> <a v-bind:href="'mailto:' + site_info.email">{{ site_info.email }}</a> </p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-details pb-60">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                            <h3 class="title">Contact <span>us</span></h3>
                            <contactVue />
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d117697.39849123852!2d86.12405182694233!3d22.800844467339946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1samichand!5e0!3m2!1sen!2sin!4v1670240671214!5m2!1sen!2sin"
                                    width="100%" height="532" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
import contactVue from '../components/contact.vue';
export default {
    components: {
        contactVue,
    },
    data() {
        return {
            site_info: [],
            image: 'images/bg/px-1.jpg',

        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "contact");
            this.site_info = res.data;
        } catch (error) {
            console.log(error);
        }
    },
}
</script>