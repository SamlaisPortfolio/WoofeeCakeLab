<?php

    require "header.php";

?>


    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">contact us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- contact area start -->
        <div class="contact-area section-padding pt-0 contact-pg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-message ">
                            <p class="contact-title">Contact Form</p>
                            <form id="contact-form" action="assets/php/mail" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="first_name" placeholder="Name *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" placeholder="Phone *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="email_address" placeholder="Email *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="contact_subject" placeholder="Subject *" type="text">
                                    </div>
                                    <div class="col-12">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Message *" name="message" class="form-control2" required=""></textarea>
                                        </div>
                                        <div class="contact-btn">
                                            <button class="btn btn-sqr"type="submit">Send Message</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <p class="contact-title">Contact Us</p>
                            <p>Feel free to contact us with the following channel, we will get back to you soon once we received your enquiry!</p>
                            <ul>
                                <!-- <li><i class="fa fa-fax"></i> Address :</li> -->
                                <li><i class="fa fa-phone"></i> E-mail: info@woofeecakelab.com</li>
                                <li><i class="fa fa-envelope-o"></i> +61 412 228 051</li>
                            </ul>
                            <div class="working-time">
                                <p class="contact-title">We will reply your enquiries within 24 hours!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->
    </main>

    <!-- Shopping cart start -->
    <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?31087015&data_platform=singleproduct_v2" charset="utf-8"></script><script 
    type="text/javascript">xProduct()</script>
    <!-- Shopping cart End -->

<?php

    require "footer.php";

?>

