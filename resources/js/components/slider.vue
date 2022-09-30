<template>
    <div>
        <!-- Slick Section Start -->
        <section class="slider-wrapper p-0">
            <div id="slider-style-one" class="carousel slide bs-slider control-round indicators-line"
                data-ride="carousel" data-pause="hover" data-interval="5000">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#slider-style-one" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-style-one" data-slide-to="1"></li>
                    <li data-target="#slider-style-one" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper For Slides -->
                <div class="carousel-inner" role="listbox">

                    <!-- Third Slide -->
                    <div class="carousel-item active">

                        <!-- Slide Background -->
                        <img src="public/images/slider/1.jpg" alt="Slider Images" class="slide-image" />
                        <div class="bs-slider-overlay"></div>

                        <div class="container">
                            <div class="row">
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide-style-left">
                                    <div class="sub-title">
                                        <h4>we provide</h4>
                                    </div>
                                    <div class="title-box">
                                        <h2>We are the best industrial company <br> in the world </h2>
                                    </div>
                                    <div class="btn-box">
                                        <a href="#" class="btn-theme">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Slide -->

                    <!-- Third Slide -->

                    <div v-for="item in items" :key="item.id" class="carousel-item">

                        <!-- Slide Background -->
                        <img v-bind:src="imagehost+item.image_name" alt="Slider Images" class="slide-image" />
                        <div class="bs-slider-overlay"></div>

                        <div class="container">

                            <div class="row">
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide-style-right">
                                    <div class="sub-title">
                                        <h4>{{ item.title}} </h4>
                                    </div>
                                    <div class="title-box">
                                        <h2>{{ item.sub_title }} </h2>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{item.virtual_image_name}}" class="btn-theme">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of Slide -->



                </div><!-- End of Wrapper For Slides -->

                <!-- Left Control -->
                <a class="left carousel-control" href="#slider-style-one" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <!-- Right Control -->
                <a class="right carousel-control" href="#slider-style-one" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div> <!-- End  slider-style-one Slider -->
        </section>
        <!-- Slick Section End -->
    </div>
</template>

<script>


import axios from "axios";
export default {
    name: "slider",
    data() {
        return {
            items: [],
            imagehost: this.$imghost + 'slider/'
        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "slider");
            this.items = res.data;
        } catch (error) {
            console.log(error);
        }
    },
};


</script>