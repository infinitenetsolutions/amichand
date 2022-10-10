<template>
    <div>



        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" style="background-image: url('images/bg/px-1.jpg')" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>team</h4>
                            <p>Home <a href="#">team</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- team Section Start -->
        <section class="team-section">
            <div class="container">
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
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="public/images/team/5.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">The Rock</a></h4>
                                <h5>designer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="public/images/team/6.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">Dusty Rhodes</a></h4>
                                <h5>designer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="public/images/team/7.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">md. kalnagin</a></h4>
                                <h5>designer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="public/images/team/8.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">mikel jackson</a></h4>
                                <h5>designer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team Section End -->

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
        <clientsVue />
        <!-- Client Section End -->

    </div>
</template>

<script>
    import clientsVue from '../components/clients.vue'
    export default {
        name: 'team',
        component: {
            clientsVue
        }
    }
</script>