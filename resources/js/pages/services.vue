<template>
    <div>



        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg"  v-bind:style="{ backgroundImage: 'url(' + $imghost1 + image+')' }" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Service</h4>
                            <p>Home <a :to="{name:'service.single'}">Services</a></p>
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
                    <div v-for="item in services" :key="item.id" class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" v-bind:src="$imghost+'services/'+item.img_name">
                                <div class="service-link-box">
                                    <router-link :to="{name:'service.single',params:{name:item.slug}}">Read More</router-link>
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
    ,
    data() {
        return {
            services: [],
            image:'images/bg/px-1.jpg',
        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "services/"+this.$route.params.category);
            this.services = res.data;
    
        } catch (error) {
            console.log(error);
        }
    },
  
  
}
</script>