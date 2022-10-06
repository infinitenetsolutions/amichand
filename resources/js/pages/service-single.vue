<template>
    <div>
        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="images/bg/px-1.jpg" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Service single</h4>
                            <p>Home <a href="#">Services</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- service Section Start -->
        <section class="service-details-section pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="service-details-sidebar">
                            <div class="service-list mb-40">
                                <ul>
                                    <li>
                                        <a class="active" href="#">Industry Construction
                                            <i class="flaticon-right-arrow-1"></i>
                                        </a>
                                    </li>
                                    <li v-for="item in all_service" >
                                        <a class="" href="#">{{item.log_title}}
                                            <i class="flaticon-right-arrow-1"></i>
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                            <div class="download-box  mb-40">
                                <div class="download-item">
                                    <a href="#"><i class="fa fa-file-pdf-o"></i> COMPANY PRESENTATION</a>
                                </div>
                                <div class="download-item">
                                    <a href="#"><i class="fa fa-file-pdf-o"></i>Download Brochures</a>
                                </div>
                            </div>
                            <div class="contact-box">
                                <div class="contact-item">
                                    <h4>Contact us </h4>
                                    <p>24 hours online support our customer.replacing a multi-lined selection of text.
                                    </p>
                                    <a href="#">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="service-details">
                            <div class="thumb">
                                <img src="public/images/service/details-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h4>{{service.log_title}}</h4>
                                <p class="mb-20">{{service.log_description}}</p>
                             
                              
                                <div class="service-tab mb-40">

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li v-if="service.title1" class="nav-item"  >
                                            <a class="nav-link active" id="features-one-tab" data-toggle="tab"
                                                href="#features-one" role="tab" aria-controls="features-one"
                                                aria-selected="true">{{service.title1}}</a>
                                        </li>
                                        <li v-if="service.title2" class="nav-item"  >
                                            <a class="nav-link " id="features-one-tab" data-toggle="tab"
                                                href="#features-two" role="tab" aria-controls="features-one"
                                                aria-selected="true">{{service.title2}}</a>
                                        </li>
                                        <li  v-if="service.title3" class="nav-item" >
                                            <a class="nav-link " id="features-one-tab" data-toggle="tab"
                                                href="#features-three" role="tab" aria-controls="features-one"
                                                aria-selected="true">{{service.title3}}</a>
                                        </li>
                                        <li v-if="service.title4" class="nav-item"  >
                                            <a class="nav-link " id="features-one-tab" data-toggle="tab"
                                                href="#features-four" role="tab" aria-controls="features-one"
                                                aria-selected="true">{{service.title4}}</a>
                                        </li>
                                        <li v-if="service.title5" class="nav-item"  >
                                            <a class="nav-link " id="features-one-tab" data-toggle="tab"
                                                href="#features-five" role="tab" aria-controls="features-one"
                                                aria-selected="true">{{service.title5}}</a>
                                        </li>
                                      
                                    </ul>

                                    <div class="tab-content" id="myTabContent">
                                        <div v-if="service.title1" class="tab-pane fade show active" id="features-one" role="tabpanel"
                                            aria-labelledby="features-one-tab">
                                            <h4>{{service.title1}}</h4>
                                            <p>{{service.description1 }}</p>

                                        </div>
                                        <div v-if="service.title2" class="tab-pane fade" id="features-two" role="tabpanel"
                                            aria-labelledby="features-two-tab">
                                            <h4>{{service.title2}}</h4>
                                            <p>{{service.description2 }}</p>

                                        </div>
                                        <div v-if="service.title3" class="tab-pane fade" id="features-three" role="tabpanel"
                                            aria-labelledby="features-three-tab">
                                            <h4>{{service.title3}}</h4>
                                            <p>{{service.description3 }}</p>

                                        </div>
                                        <div v-if="service.title4" class="tab-pane fade" id="features-four" role="tabpanel"
                                            aria-labelledby="features-four-tab">
                                            <h4>{{service.title4}}</h4>
                                            <p>{{service.description4 }}</p>

                                        </div>
                                        <div v-if="service.title5" class="tab-pane fade" id="features-five" role="tabpanel"
                                            aria-labelledby="features-four-tab">
                                            <h4>{{service.title5}}</h4>
                                            <p>{{service.description5 }}</p>
                                        </div>
                                    </div>

                                </div>
                                <h4>OUR RESEARCH</h4>
                                <p>Consectetur adipisicing elit. Inventore dolorum amet corrupti expedita explicabo
                                    consectetur laboriosam ipsa error voluptatum necessitatibus quia ratione facere sint
                                    alias aliquid laudantium, dolores eligendi eveniet. Consectetur adipisicing elit.
                                    Inventore dolorum amet corrupti expedita explicabo consectetur laboriosam<br> error
                                    voluptatum necessitatibus quia ratione facere sint alias aliquid laudantium, dolor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service Section End -->
    </div>
    <!-- Client Section Start -->
    <clinetsVue />
    <!-- Client Section End -->
</template>

<script>
import clinetsVue from '../components/clinets.vue';
export default {
    name: 'service-single',
    components: {
        clinetsVue
    }

    ,
    data() {
        return {
            service: [],
            images: [],
            category: [],
            all_service:[],
        
        };
    },
    async created() {
        try {

            const res = await axios.get(this.$host + "services/single/" + this.$route.params.name);
            this.service = res.data.service;
            this.images = res.data.images;
            this.category = res.data.category;
            this.all_service=res.data.all_service;
        } catch (error) {
            console.log(error);
        }

    },
}
</script>