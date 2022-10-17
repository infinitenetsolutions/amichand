<template>
    <div>

        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" v-bind:style="{ backgroundImage: 'url(' + $imghost1 + image+')' }"
            data-type="parallax" data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>contact</h4>
                            <p>Home <a href="#">contact</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- slider start  -->


        <!-- slider end -->
        <section class="contact-details pb-70">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                            <h3 class="title">Apply <span>Now</span></h3>
                            <form id="ajax-contact" method="post"
                                action="http://heatmaponline.com/html/intruder/php/contact.php">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="f_name" id="f_name" class="form-control"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="l_name" id="l_name" class="form-control"
                                            placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject"
                                            id="subject" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="contact-textarea">
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
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 class="title">CURRENT <span>OPENINGS</span></h3>

                            <div class="accordion " id="accordionPanelsStayOpenExample">
                                <div class="accordion-item challenge-tag row">
                                    <div v-for="(item,index) in career" :key="item.id">
                                        <li class=" accordion-button career service-item style-1 border-1px" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                            aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            <h5> <i class="far fa-briefcase"></i> {{ item.name}} </h5> <small class="text-info">Start
                                                From {{
                                                item.start}}</small> | <small class="text-danger">Last Date {{
                                                item.end}}</small>
                                        </li>

                                        <div id="panelsStayOpen-collapseOne" v-bind:class="index==0?'show':''" class=" accordion-collapse collapse "
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <strong class="pl-2 pr-2">{{ item.description}} </strong>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29420.654923866234!2d89.53310012531244!3d22.81795249624981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff90089bf88dc7%3A0xb26720ff9233a60e!2sShib+Bari+Square!5e0!3m2!1sen!2sbd!4v1544010802348"
                    width="100%" height="450" frameborder="0" style="border:0"></iframe>
            </div>
        </section>


    </div>
</template>

<script>
export default {
    data() {
        return {
            image: 'images/bg/px-1.jpg',
            career: {}
        }
    },
    async created() {
        try {
            const res = await axios.get(this.$host + "career");
            this.career = res.data;
        } catch (error) {
            console.log(error);
        }
    },
}
</script>