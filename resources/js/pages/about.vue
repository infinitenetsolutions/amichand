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
        <section class="company-section">
            <div class="container">
                <div class="row about-features">
                    <div class="col-md-8">
                        <div class="content">
                            <h5>About Industry</h5>
                            <h1>Our <span>Company</span></h1>
                            <p class="p-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt voluptates
                                amet voluptatum at aliquid veniam iste deleniti porro, natus inventore, quod itaque,
                                quae, officiis tenetur! Libero tempora eius, recusandae. Corporis quia, architecto
                                fugiat rerum, quod nihil possimus.</p>
                            <ul class="company-list mr-50">
                                <li><i class="pe-7s-angle-right"></i>Team of Professional</li>
                                <li><i class="pe-7s-angle-right"></i>Smart Technology</li>
                                <li><i class="pe-7s-angle-right"></i>Full of services css</li>
                                <li><i class="pe-7s-angle-right"></i>Need It Fast? We Can Help.</li>
                            </ul>
                            <ul class="company-list">
                                <li><i class="pe-7s-angle-right"></i>Team of Professional</li>
                                <li><i class="pe-7s-angle-right"></i>Smart Technology</li>
                                <li><i class="pe-7s-angle-right"></i>Need It Fast? We Can Help.</li>
                                <li><i class="pe-7s-angle-right"></i>Full of services css</li>
                            </ul>
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

        <!-- team Section Start -->
        <section class="team-section bg-f8">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h4>MEET OUR TEAM</h4>
                        <h2>OUR <span>TEAM</span></h2>
                        <p>Consectetur adipisicing elit. Excepturi nemo tenetur veniam repellat earum inventore modi
                            omnis.</p>
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
export default {
    name: 'about',
    components: {
        testimonialVue
    }
}
</script>
