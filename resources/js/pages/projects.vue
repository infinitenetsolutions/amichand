<template>
    <div>



        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="images/bg/px-1.jpg" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Projects</h4>
                            <p>Home <router-link :to="{name:'project.single'}">Projects</router-link></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- Projects Section Start -->
        <section class="projects-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="projects-item style-2">
                            <div class="thumb">
                                <img src="images/projects/1.jpg" alt="">
                                <div class="content">
                                    <div class="counter-item">
                                        <h1>01</h1>
                                    </div>
                                    <h3><router-link :to="{name:'project.single'}">Power Energy</router-link></h3>
                                </div>
                            </div>
                            <div class="text-bottom">
                                <h4>consectetur adipisicing elit sitm Mollitia obcaecati quaerat ome impedit</h4>
                                <router-link class="project-btn" :to="{name:'project.single'}">View Project</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="projects-item style-2">
                            <div class="thumb">
                                <img src="images/projects/2.jpg" alt="">
                                <div class="content">
                                    <div class="counter-item">
                                        <h1>02</h1>
                                    </div>
                                    <h3><router-link :to="{name:'project.single'}">Power Energy</router-link></h3>
                                </div>
                            </div>
                            <div class="text-bottom">
                                <h4>consectetur adipisicing elit sitm Mollitia obcaecati quaerat ome impedit</h4>
                                <router-link class="project-btn" :to="{name:'project.single'}">View Project</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="projects-item style-2">
                            <div class="thumb">
                                <img src="images/projects/3.jpg" alt="">
                                <div class="content">
                                    <div class="counter-item">
                                        <h1>03</h1>
                                    </div>
                                    <h3><router-link :to="{name:'project.single'}">Power Energy</router-link></h3>
                                </div>
                            </div>
                            <div class="text-bottom">
                                <h4>consectetur adipisicing elit sitm Mollitia obcaecati quaerat ome impedit</h4>
                                <router-link class="project-btn" :to="{name:'project.single'}">View Project</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="projects-item style-2">
                            <div class="thumb">
                                <img src="images/projects/4.jpg" alt="">
                                <div class="content">
                                    <div class="counter-item">
                                        <h1>04</h1>
                                    </div>
                                    <h3><router-link :to="{name:'project.single'}">Power Energy</router-link></h3>
                                </div>
                            </div>
                            <div class="text-bottom">
                                <h4>consectetur adipisicing elit sitm Mollitia obcaecati quaerat ome impedit</h4>
                                <router-link class="project-btn" :to="{name:'project.single'}">View Project</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="projects-item style-2">
                            <div class="thumb">
                                <img src="images/projects/3.jpg" alt="">
                                <div class="content">
                                    <div class="counter-item">
                                        <h1>05</h1>
                                    </div>
                                    <h3><router-link :to="{name:'project.single'}">Power Energy</router-link></h3>
                                </div>
                            </div>
                            <div class="text-bottom">
                                <h4>consectetur adipisicing elit sitm Mollitia obcaecati quaerat ome impedit</h4>
                                <router-link class="project-btn" :to="{name:'project.single'}">View Project</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="projects-item style-2">
                            <div class="thumb">
                                <img src="images/projects/1.jpg" alt="">
                                <div class="content">
                                    <div class="counter-item">
                                        <h1>06</h1>
                                    </div>
                                    <h3><router-link :to="{name:'project.single'}">Power Energy</router-link></h3>
                                </div>
                            </div>
                            <div class="text-bottom">
                                <h4>consectetur adipisicing elit sitm Mollitia obcaecati quaerat ome impedit</h4>
                                <router-link class="project-btn" :to="{name:'project.single'}">View Project</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section End -->

        <section class="text-center pt-0 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-link-item">
                            <ul>
                                <li><router-link class="flaticon-left-arrow-1" :to="{name:'project.single'}"></router-link></li>
                                <li><router-link :to="{name:'project.single'}">1</router-link></li>
                                <li><router-link class="active" :to="{name:'project.single'}">2</router-link></li>
                                <li><router-link :to="{name:'project.single'}">3</router-link></li>
                                <li><router-link class="flaticon-right-arrow-1" :to="{name:'project.single'}"></router-link></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Client Section Start -->
        <section class="client-section bg-f7 pb-70 pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="client_carousel" class="owl-carousel">
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/1.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/2.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/3.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/4.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/5.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/6.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Section End -->


    </div>
</template>