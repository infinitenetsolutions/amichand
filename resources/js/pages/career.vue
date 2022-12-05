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
                                        <input type="text" v-model="form.name" id="name" class="form-control"
                                            placeholder=" Enter  Full Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" v-model="form.phone" id="phone" class="form-control"
                                            placeholder="Enter 10 digit valid Phone number" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" v-model="form.email" id="email" class="form-control"
                                            placeholder="Enter Your Email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="file" @change=uploadImage name="resume" class="form-control" placeholder="resume"
                                            id="resume" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select  type="file" v-model="form.career_id" class="form-control" id="resume" required>
                                            <option selected disabled> -Select Career- </option>
                                            <option v-for="item in career" v-bind:value="item.id">{{item.name}}</option>
                                        </select>

                                    </div>


                                    <div class="form-group col-md-12">
                                        <div class="contact-textarea">
                                            <textarea v-model="form.massage" class="form-control" rows="6" placeholder="Wright Message"
                                                id="message" name="message" required></textarea>
                                            <button @click=careerForm  class="btn btn-theme mt-4" type="button" value="Submit Form">Send
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
                                <div class="accordion-item challenge-tag ">
                                    <div v-for="(item,index) in career" :key="item.id" class="mb-2">
                                        <small class="text-info">Start
                                            From {{
                                            item.start}}</small> | <small class="text-danger">Last Date {{
                                            item.end}}</small>
                                        <li class=" accordion-button career service-item style-1 border-1px"
                                            type="button" data-bs-toggle="collapse"
                                            v-bind:data-bs-target="'#panelsStayOpen-collapseOne'+index"
                                            aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            <h5> <i class="far fa-briefcase"></i> {{ item.name}} </h5>
                                        </li>

                                        <div v-bind:id="'panelsStayOpen-collapseOne'+index"
                                            class=" accordion-collapse collapse career-dropdown "
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
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d117697.39849123852!2d86.12405182694233!3d22.800844467339946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1samichand!5e0!3m2!1sen!2sin!4v1670240671214!5m2!1sen!2sin"
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
            career: {},
            form:{}
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

    methods: {
        async careerForm() {
            try {
                const res = await axios.post(this.$host + "career/apply",this.form);
                // this.career = res.data;
                console.log(res);
            } catch (error) {
                console.log(error);
            }
        }
        ,
        uploadImage(e) {
            const image = e.target.files[0];
            const reader = new FileReader();
            reader.readAsDataURL(image);
            reader.onload = e => {
                this.form.resume = e.target.result;
                
            };
        }

    }
}
</script>