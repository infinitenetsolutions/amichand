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
                                <h6>Address: Amichand Technological Pvt. Limited
                                    B19/B20, Phase 7, Adityapur Industrial Estate
                                    Adityapur, Jamshedpur –832109
                                </h6>
                            </div>
                            <div class="contact-info">
                                <div class="icon-box">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h6>+91-8292580535 / +91-9905167484</h6>
                            </div>
                            <div class="contact-info">
                                <div class="icon-box">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h6> info@amitec.in</h6>
                            </div>
                            <div class="contact-info">
                                <div class="icon-box">
                                    <i class="fab fa-internet-explorer"></i>
                                </div>
                                <h6><a href="#">http://www.amitec.in/</a></h6>
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
    name:'contact'
}
</script>