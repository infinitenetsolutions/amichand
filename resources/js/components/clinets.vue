<template>
    <div class="bg-secondary p-2">
        <split-carousel>
            <split-carousel-item  v-for="item in clients" :key="item.id">
                <img v-bind:src="imagehost+item.images" alt="">
            </split-carousel-item>
        </split-carousel>
    </div>
</template>
  
<script>
import { SplitCarousel, SplitCarouselItem } from "vue-split-carousel";
export default {
    components: {
        SplitCarousel,
        SplitCarouselItem
    },
    data() {
        return {
            clients: [],
            imagehost: this.$imghost + 'clients/'
        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "clients");
            this.clients = res.data;
        } catch (error) {
            console.log(error);
        }
    },
};
</script>
  
<style>
.lol {

    margin: 10px auto;
}
</style>