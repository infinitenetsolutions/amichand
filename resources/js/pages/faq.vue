<template>
    <div>



        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg"  v-bind:style="{ backgroundImage: 'url(' + $imghost1 + image+')' }" data-type="parallax"
            data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>faq</h4>
                            <p>Home <a href="#">faq</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->

        <!-- faq Section Start -->
        <section class="faq-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="faq-col">
                            <div class="panel-group">
                                <h4 class="panel-title">What Is Web Development?</h4>
                                <div class="content">
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of
                                        Lorem Ipsum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-col">
                            <div class="panel-group">
                                <h4 class="panel-title">What Is Web Design?</h4>
                                <div class="content">
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of
                                        Lorem Ipsum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-col">
                            <div class="panel-group">
                                <h4 class="panel-title">What Is Web Development?</h4>
                                <div class="content">
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of
                                        Lorem Ipsum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-col">
                            <div class="panel-group">
                                <h4 class="panel-title">What Is Web Design?</h4>
                                <div class="content">
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of
                                        Lorem Ipsum. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq Section End -->

        <!-- Client Section Start -->
        <section class="client-section bg-f8 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="client_carousel" class="owl-carousel">
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/1.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/2.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/3.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/4.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/5.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/6.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-item">
                                    <img src="images/partner/2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Section End -->

    </div>
</template>

<script>
export default {
    data() {
        return {
            image:'images/bg/px-1.jpg',

        }
    },
}
</script>