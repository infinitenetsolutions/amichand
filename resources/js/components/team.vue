<template>
    <div>


        <!-- team Section Start -->
        <section class="team-section bg-f8">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>OUR <span class=" border-bottom border-warning  border-2">TEAM</span></h2>
                        <p>Our team EXPERT MEMBERS</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div v-for="item in team" class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-col">
                            <div class="thumb">
                                <img src="images/team/1.jpg" alt="">
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">{{item.name}}</a></h4>
                                <h5>{{item.message}}</h5>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- team Section End -->



    </div>
</template>

<script>
export default {
    name: 'team',
    data() {
        return {
            team: [],

        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "team");
            this.team = res.data;
        } catch (error) {
            console.log(error);
        }
    },
}
</script>