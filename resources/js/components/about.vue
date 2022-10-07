<template>
    <div>
        <!-- Company Section Start -->
        <section class="company-section">
            <div class="container">
                <div class="row about-features">
                    <div class="col-md-8">
                        <div class="content">

                            <h1>WelCome to <span class=" border-bottom border-warning  border-2">Amichand</span></h1>
                            <p class="p-text">{{about.massage}}.</p>

                            <div class="company-funfact">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <img v-bind:src="$imghost+'about/'+about.images" v-bind:alt="about.name">
                            <div class="about-video">
                                <h4> Our company  </h4>
                                <a class="about-video-btn" href="#"><i class="far fa-building"></i></a>
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
    name: 'about',
    data() {
        return {
            about: {},
            all_product: 0,
            all_clients: 0
        }
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "about/about");
            this.about = res.data.about;
            this.all_product = res.data.all_product;
            this.all_clients = res.data.all_clients;


        } catch (error) {
            console.log(error);
        }
    },
}
</script>