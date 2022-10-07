<template>
    <div>
        <!-- Footer Style Seven Start -->
        <footer class="bg-faded pt-70 pb-40 bg-theme-color-2">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="footer-item footer-widget-one">
                                <img class="footer-logo mb-25"  v-bind:src="$imghost1+'images/logo-1.png'"  alt="amichand logo">

                                <p>{{site_info.address}}</p>
                                <hr>
                                <h6>Follow<span> Us</span></h6>
                                <ul class="social-icon bg-transparent bordered-theme">

                                    <li v-if="site_info.twitter" ><a v-bind:href="site_info.twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li v-if="site_info.facebook" ><a v-bind:href="site_info.facebook"><i class="fab fa-facebook"></i></a></li>
                                    <li v-if="site_info.instagram" ><a v-bind:href="site_info.instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li v-if="site_info.whatsapp" ><a v-bind:href="site_info.whatsapp"><i class="fas fa-envelope"></i></a></li>
                                    <li v-if="site_info.youtube" ><a v-bind:href="site_info.youtube"><i class="fab fa-youtube"></i></a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="footer-item">
                                <div class="footer-title">
                                    <h4>Our <span>Products</span></h4>
                                    <div class="border-style-3"></div>
                                </div>
                                <ul class="footer-list">
                                    <li v-for="item in product_category" :key="item.id">
                                        <router-link :to="{name:'products',params:{category:item.name.toLowerCase()}}">
                                            {{ item.name }}</router-link>
                                    </li>
                                </ul>

                            </div>
                        </div>


                        <div class="col-md-3 col-sm-12">
                            <div class="footer-item">
                                <div class="footer-title">
                                    <h4>Usefull <span>Links</span></h4>
                                    <div class="border-style-3"></div>
                                </div>
                                <ul class="footer-list">
                                    <li>
                                        <router-link :to="{name:'about'}">About us
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name:'about'}">Team
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name:'career'}">Career
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name:'contact'}">Contact us
                                        </router-link>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="footer-item">
                                <div class="footer-title">
                                    <h4>Quick <span>Contact</span></h4>
                                    <div class="border-style-3"></div>
                                </div>
                                <ul class="footer-list footer-contact mb-10">
                                    <li><i class="fas fa-phone-office"></i> Phone: {{site_info.phone}}</li>
                                    <li><i class="fas fa-phone-volume"></i> Phone : {{ site_info.phone2}} </li>
                                    <li><i class="fas fa-envelope-open-text"></i> <a href="mailto:">Email:
                                            {{site_info.email}}</a></li>
                                            <li><i class="fas fa-map"></i> <a href="mailto:">Google Map
                                            </a></li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="footer-copy-right bg-theme-color-2 text-white p-0">
            <div class="p-2">
                <div class="row">
                    <div class="col-12 text-center">
                        <p> copyright&#169;2022<a target="_blank" href="https://www.amichand.com"> amichand.com </a>
                            Powered By <a href="https://infinitenetsolutions.com/">infinitenetsolutions.com</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Style Seven End -->
        <a href="#" class="scrollup"><i class="flaticon-long-arrow-pointing-up" aria-hidden="true"></i></a>
    </div>

</template>

<script>
export default {
    name: 'footer',
    
    data() {
        return {
            product_category: [],
            service_category: [],
            site_info:[]
        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "category");
            this.product_category = res.data.product_category;
            this.service_category = res.data.service_category;

            const res1 = await axios.get(this.$host + "contact");
            this.site_info = res1.data;
        } catch (error) {
            console.log(error);
        }
    },
}
</script>