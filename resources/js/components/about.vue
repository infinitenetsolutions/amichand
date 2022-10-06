<template>
    <div>
        <!-- Company Section Start -->
        <section class="company-section">
            <div class="container">
                <div class="row about-features">
                    <div class="col-md-8">
                        <div class="content">

                            <h1>Our <span>Company</span></h1>
                            <p class="p-text">{{about.massage}}.</p>

                            <div class="company-funfact">
                                <div class="funfact-item">
                                    <h2>80+</h2>
                                    <h4>projects</h4>
                                </div>
                                <div class="funfact-item">
                                    <h2>99+</h2>
                                    <h4>Happy Clients</h4>
                                </div>
                                <div class="funfact-item">
                                    <h2>75+</h2>
                                    <h4>Award Won</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <img src="public/images/features/h-1.jpg" alt="">
                            <div class="about-video">
                                <h4>company video gane</h4>
                                <a class="about-video-btn" href="#"><i class="flaticon-play-button-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company Section End -->
    </div>
</template>
<script>
export default {
    name:'about',
    data() {
        return {
         about:''
        }
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "about/about");
            this.about = res.data;

        } catch (error) {
            console.log(error);
        }
    },
}
</script>