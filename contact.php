<?php
$page_name = 'Contact';
include_once('_header.php');
?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 pt-5 pb-4">
        <div class="container pt-lg-5 pt-md-3 py-lg-4 pb-md-3">
            <h2 class="title">Get in touch</h2>
            <ul class="breadcrumbs-custom-path mt-2">
                <li><a href="index.html">Home</a></li>
                <li class="mx-2">/ </li>
                <li class="active"> Contact </li>
            </ul>
        </div>
    </div>
</section>
<!-- //Contact breadcrumb -->
<!-- contacts -->
<section class="w3l-contact-7 pt-5" id="contact">
    <div class="contacts-9 pt-lg-5 pt-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-7">
                        <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Name*" required="">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-5 cont-details">
                        <address>
                            <h5 class="">Our Office Address</h5>
                            <p><span class="fa fa-map-marker"></span><p class="title-small">Regard Chemical Works (Pvt) Ltd</p> 
                            54 B.K. Ganguly Lane. Kayettuly, <br> Dhaka – 1000, Bangladesh</p>
                            <p><span class="fa fa-phone"></span>
                              <a href="tel:+8801715077247"> 01715077247, </a>
                              <a href="tel:+8801975077247"> 01975077247</a></p>
                            <p> <a href="mailto:mail@example.com"><span
                                        class="fa fa-envelope"></span>mail@example.com</a></p>
                            <p> <a href="mailto:support@example.com"><span
                                        class="fa fa-support"></span>support@example.com</a></p>

                            <h5 class="mt-4 mb-3">Follow us on social media</h5>
                            <div class="main-social-footer-29">
                                <a href="#facebook" class="facebook"><span class="fa fa-facebook m-0"></span></a>
                                <a href="#twitter" class="twitter"><span class="fa fa-twitter m-0"></span></a>
                                <a href="#instagram" class="instagram"><span class="fa fa-instagram m-0"></span></a>
                                <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin m-0"></span></a>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="map mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d690.2354764119906!2d90.40175947317805!3d23.72251666233157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e4c15fc48d%3A0x114aa23dcc7d7394!2s54no%20BK%20Ganguly%20Ln%2C%20Dhaka%201100!5e0!3m2!1sen!2sbd!4v1713784939132!5m2!1sen!2sbd" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- //contacts -->
<?php
include_once('_footer.php');
?>