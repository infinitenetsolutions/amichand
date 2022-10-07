<template>
    <div>
        <section class="testimonials-section pb-70">
            <div class="container">
                <div class="row">
                    <div class="section-title">

                        <h2>client <span class=" border-bottom border-warning  border-2">testimonials</span></h2>
                        <p>What clients are saying.</p> <br>
                    </div>
                </div>
                <div class="row testimonials-post">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               
                        <div class="carousel-inner">
                            <div v-for="(item,index) in testimonial"  class="carousel-item " v-bind:class="index==0 ? 'active':''">
                                <div class="item">
                                    <div class="testimonials-item" >
                                        <div class="thumb">
                                            <img v-bind:src="$imghost+'testimonial/'+item.images" alt="">
                                        </div>
                                        <div class="content">
                                            <p><i class="fa fa-quote-left"></i>{{item.massage}}<i
                                                    class="fa fa-quote-right"></i></p>
                                            <small><strong>{{item.name}}</strong> - {{item.designation}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>


            </div>
        </section>
    </div>
</template>
<script>
export default {
    name:'testimonial',
    data() {
        return {
            testimonial: [],
          
        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "testimonial");
            this.testimonial = res.data;
        } catch (error) {
            console.log(error);
        }
    },
}
</script>