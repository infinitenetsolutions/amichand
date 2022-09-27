<template>
    <div>

        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="images/bg/px-1.jpg" data-type="parallax"
            data-speed="3">
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

        <section class="contact-details pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-item style-1 border-1px">
                            <div class="service-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Contact Info</a></h5>
                                <p>INDUSTRIAL ESTATE ADITYAPUR, JAMSHEDPUR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item style-1 border-1px">
                            <div class="">
                                <i class="fas fa-phone-office"></i>
                                                        </div>
                            <div class="content">
                                <h5><a href="#">Contact No.</a></h5>
                                <p>+91-8292580535 <br> +91-9905167484</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item style-1 border-1px">
                            <div class="">
                                <i class="fad fa-envelope-open-text"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Email</a></h5>
                                <p> <a href="mailto:INFO@AMITEC.IN">INFO@AMITEC.IN</a> </p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-details pb-60">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                            <h3 class="title">Contact <span>us</span></h3>
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
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29420.654923866234!2d89.53310012531244!3d22.81795249624981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff90089bf88dc7%3A0xb26720ff9233a60e!2sShib+Bari+Square!5e0!3m2!1sen!2sbd!4v1544010802348"
                                    width="100%" height="532" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>