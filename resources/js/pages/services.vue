<template>
    <div>



        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="images/bg/px-1.jpg" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Service</h4>
                            <p>Home <a href="#">Services</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- Services Section Start -->
        <section class="service-section4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="images/service/1.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Pharmaceutical Research</h3>
                                <h4>Industrial</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="images/service/2.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Conswervation </h3>
                                <h4>Oil & Gas </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="images/service/3.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>power and engery</h3>
                                <h4>Supplayer </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="images/service/4.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Asbestos Remediation</h3>
                                <h4>Industrial</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="images/service/5.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Painting and Protective</h3>
                                <h4>Painting</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="images/service/6.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Pharmaceutical Research</h3>
                                <h4>Industrial</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->

        <section class="text-center pt-0 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-link-item">
                            <ul>
                                <li><a class="flaticon-left-arrow-1" href="#"></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="flaticon-right-arrow-1" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Client Section Start -->
        <clinetsVue />
        <!-- client section end -->
    </div>
</template>

<script>
import clinetsVue from '../components/clinets.vue';
export default {
    name: 'services',
    components: {
        clinetsVue
    }
}
</script>