<template>
    <div>
        <!-- Contact Section Start -->
        <section class="contact-section pb-70">
            <div class="container">
                <div class="row contact-bg">
                    <div class="col-md-12 col-lg-4 p-0">
                        <div class="contact-text">
                            <h2>Get in <span>Touch</span></h2>
                            <p>Consectetur adipisicing elit. Temporibus error quod necessitatibus</p>
                            <div class="contact-info">
                                <div class="icon-box">
                                    <i class="flaticon-pin-1"></i>
                                </div>
                                <h6>{{ site_info.address }}
                                </h6>
                            </div>
                            <div class="contact-info">
                                <div class="icon-box">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h6> {{ site_info.phone }} <br> {{ site_info.phone2 }}</h6>
                            </div>
                            <div class="contact-info">
                                <div class="icon-box">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h6>  <a v-bind:href="'mailto:'+site_info.email">{{site_info.email}}</a> </h6>
                            </div>
                            <div class="contact-info">
                                <div class="icon-box">
                                    <i class="fab fa-internet-explorer"></i>
                                </div>
                                <h6><a href="#">http://www.amichand.com/</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 style-2">
                        <form id="ajax-contact" method="post" action="#">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="First Name" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="contact-textarea text-center">
                                        <textarea class="form-control" rows="6" placeholder="Wright Message"
                                            id="message" name="message" required></textarea>
                                        <button class="btn btn-theme mt-4" type="submit" value="Submit Form">Send
                                            Message</button>
                                    </div>
                                </div>
                                <div id="form-messages"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->
    </div>
</template>
<script>
export default {
    name: 'contact',
    data() {
        return {
            site_info: [],


        };
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "contact");
            this.site_info = res.data;
        } catch (error) {
            console.log(error);
        }
    },
}
</script>