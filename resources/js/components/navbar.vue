<template>
    <div>
       

        <!-- Start Page Wrapper  -->
        <div class="page-wrapper">

            <!-- Header Section Start -->
            <header class="header header-style-2 clearfix">

                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-building"></i>
                                           {{site_info.address}} | <i class="fas fa-phone-office"></i> {{site_info.phone}} , {{site_info.phone2}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="social-icons">
                                    <ul>
                                        <li v-if="site_info.twitter" ><a v-bind:href="site_info.twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li v-if="site_info.facebook" ><a v-bind:href="site_info.facebook"><i class="fab fa-facebook"></i></a></li>
                                    <li v-if="site_info.instagram" ><a v-bind:href="site_info.instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li v-if="site_info.whatsapp" ><a v-bind:href="site_info.whatsapp"><i class="fas fa-envelope"></i></a></li>
                                    <li v-if="site_info.youtube" ><a v-bind:href="site_info.youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-style menu-style-2 bg-transparent clearfix">
                    <!-- main-navigation start -->
                    <div class="main-navigation main-mega-menu animated">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container">
                                <!-- header dropdown buttons end-->
                                <router-link class="navbar-brand" :to="{name:'home'}">
                                    <img id="logo_img" v-bind:src="$imghost1+'images/logo-1.png'" alt="">
                                </router-link>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>


                                <div class="collapse navbar-collapse" id="navbar-collapse-1">

                                    <!-- main-menu -->
                                    <ul class="navbar-nav ml-xl-auto">

                                        <!-- mega-menu end -->
                                        <li class="nav-item dropdown active">
                                            <router-link :to="{name:'home'}" class="nav-link "
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home
                                            </router-link>

                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">About Us</a>
                                            <div class="dropdown-menu navbar-left">
                                                <div class="dropdown">
                                                    <router-link class="dropdown-item" :to="{name:'about'}">Our Company
                                                    </router-link>
                                                    <router-link class="dropdown-item" :to="{name:'history'}">Our
                                                        History</router-link>
                                                    <a class="dropdown-item"
                                                        :to="{name:'vission-mission'}">Mission/Vission</a>

                                                </div>
                                            </div>
                                        </li>
                                        <!-- mega-menu start -->

                                        <!-- mega-menu end -->
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Products</a>
                                            <div class="dropdown-menu left-1">
                                                <ul class="dropdown">
                                                    <li v-for="item in product_category" :key="item.id">
                                                        <router-link class="dropdown-item"   :to="{name:'products',params:{category:item.name.toLowerCase()}}" >
                                                         {{ item.name }}</router-link>
                                                    </li>
                                             



                                                </ul>
                                            </div>
                                        </li>

                                        <!-- mega-menu end -->
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Services</a>
                                            <div class="dropdown-menu left-1">
                                                <div class="dropdown">
                                                    <router-link  v-for="item in service_category" :key="item.id" class="dropdown-item" :to="{name:'services',params:{category: item.name.toLowerCase()}}">{{item.name}}
                                                    </router-link>
                                                  
                                                </div>
                                            </div>
                                        </li>
                                        <!-- mega-menu start -->


                                        <li class="nav-item dropdown">
                                            <router-link :to="{name:'career'}" class="nav-link "
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Career
                                            </router-link>

                                        </li>

                                        <!-- mega-menu end -->
                                        <li class="nav-item dropdown">
                                            <router-link to="/contact" class="nav-link ">
                                                Contact</router-link>

                                        </li>
                                        <!-- mega-menu start -->

                                    </ul>


                                    <!-- main-menu end -->

                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- main-navigation end -->
                </div>

            </header>
            <!-- Header Section End -->
        </div>
    </div>
</template>
<script>
export default {
    name:'navbar',
    inject:['site_info'],
    data() {
        return {
            product_category: [],
            service_category:[],
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

