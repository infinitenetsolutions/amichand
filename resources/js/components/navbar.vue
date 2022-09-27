<template>
    <div>
        <div class="preloader"></div>

        <!-- Start Page Wrapper  -->
        <div class="page-wrapper">

            <!-- Header Section Start -->
            <header class="header header-style-1 clearfix">

                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <i class="flaticon-flash"></i>
                                            325, Dreem streen Borgona united, London.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-style menu-style-1 bg-transparent clearfix">
                    <!-- main-navigation start -->
                    <div class="main-navigation main-mega-menu animated">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <div class="container">
                                <!-- header dropdown buttons end-->
                                <router-link class="navbar-brand" :to="{name:'home'}">
                                    <img id="logo_img" src="images/logo-1.png" alt="">
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
                                            <router-link :to="{name:'home'}" class="nav-link dropdown-toggle"
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
                                                aria-haspopup="true" aria-expanded="false">Services</a>
                                            <div class="dropdown-menu left-1">
                                                <div class="dropdown">
                                                    <router-link class="dropdown-item" :to="{name:'services'}">PLC
                                                    </router-link>
                                                    <router-link class="dropdown-item" :to="{name:'services'}">
                                                        Retrofitting Services</router-link>
                                                    <router-link class="dropdown-item" :to="{name:'services'}">
                                                        Electromechanical & Numerical </router-link>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- mega-menu start -->

                                        <!-- mega-menu end -->
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Projects</a>
                                            <div class="dropdown-menu left-1">
                                                <ul class="dropdown">
                                                    <li>
                                                        <router-link :to="{name:'projects'}" class="dropdown-item">
                                                            L&amp;T
                                                            SWITCHGEARS</router-link>
                                                    </li>
                                                    <li>
                                                        <router-link :to="{name:'projects'}" class="dropdown-item">LV
                                                            ELECTRICAL
                                                            PANELS</router-link>
                                                    </li>



                                                </ul>
                                            </div>
                                        </li>



                                        <li class="nav-item dropdown">
                                            <router-link :to="{name:'career'}" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Career
                                            </router-link>

                                        </li>

                                        <!-- mega-menu end -->
                                        <li class="nav-item dropdown">
                                            <router-link to="contact" class="nav-link dropdown-toggle">
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