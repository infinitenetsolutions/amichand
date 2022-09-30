<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="../../images/bg/px-1.jpg" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Project details</h4>
                            <p>Home <a href="#">Product</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- Projects Section Start -->
        <section class="project-details-section pb-60">
            <div class="container">
                <div class="row">
                    <div class="project-details">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="project-thumb">
                                    <!-- slider start -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    src="https://amichand.com/public/images/slider/1.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="https://amichand.com/public/images/slider/1.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="https://amichand.com/public/images/slider/1.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <!-- slider end -->
                                </div>
                            </div>
                        </div>
                        <div class="row mb-50">
                            <div class="col-md-8">
                                <div class="project-title">
                                    <h3>project <span>overview</span></h3>
                                </div>
                                <p class="mb-25">It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. Many
                                    desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy. Various versions have evolved over the years, sometimes by
                                    accident, sometimes on purpose (injected humour and the like).It is a long
                                    established fact that a reader will be distracted by the readable content of a page
                                    when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using 'Content here,
                                    content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                <ul class="project-social">
                                    <span>Share:</span>
                                    <li><a href="#"><i class="flaticon-facebook-logo"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="flaticon-social-media"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="details-tag">
                                    <ul>
                                        <li>
                                            <span>Project Category</span>
                                            <span>Agriculture</span>
                                        </li>
                                        <li>
                                            <span>Date </span>
                                            <span>21 March, 2018</span>
                                        </li>
                                        <li>
                                            <span>Project Status</span>
                                            <span>Running</span>
                                        </li>
                                        <li>
                                            <span>Location</span>
                                            <span>USA</span>
                                        </li>
                                        <li>
                                            <span>Live Demo </span>
                                            <span>www.YourSite.com</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="project-title">
                                    <h3>challenge</h3>
                                </div>
                                <p class="mb-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                                    necessitatibus, modi iusto eveniet reiciendis culpa a hic ipsa impedit nisi
                                    nesciunt! Non id adipisci omnis nam tempora, nulla quaerat atque.</p>
                                <ul class="challenge-tag">
                                    <li><i class="fa fa-times"></i>consectetur adipisicing elit.</li>
                                    <li><i class="fa fa-times"></i>consectetur adipisicing elit.</li>
                                    <li><i class="fa fa-times"></i>consectetur adipisicing elit.</li>
                                    <li><i class="fa fa-times"></i>consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="project-title">
                                    <h3>solutions</h3>
                                </div>
                                <p class="mb-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                                    necessitatibus, modi iusto eveniet reiciendis culpa a hic ipsa impedit nisi
                                    nesciunt! Non id adipisci omnis nam tempora, nulla quaerat atque.</p>
                                <ul class="challenge-tag">
                                    <li><i class="fa fa-check"></i>consectetur adipisicing elit.</li>
                                    <li><i class="fa fa-check"></i>consectetur adipisicing elit.</li>
                                    <li><i class="fa fa-check"></i>consectetur adipisicing elit.</li>
                                    <li><i class="fa fa-check"></i>consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section End -->

        <!-- Client Section Start -->
        <clientsVue />
        <!-- Client Section End -->
    </div>
</template>

<script>
import clientsVue from '../components/clinets.vue'

export default {
    name: 'project-details',
    components: {
        clientsVue
    }
    ,
    data() {
        return {
            products: [],
        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "products");
            this.products = res.data;
        } catch (error) {
            console.log(error);
        }
    },
}
</script>