<?php
$page_name = 'Contact';
include_once('_header.php');
?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 pt-5 pb-4">
        <div class="container pt-lg-5 pt-md-3 py-lg-4 pb-md-3">
            <h2 class="title">Get in touch</h2>
            <ul class="breadcrumbs-custom-path mt-2">
                <li><a href="/">Home</a></li>
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
                    <div class="col-lg-8">
                        <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                        <form action="send_email.php" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Name*" required="">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
                            <button type="submit" name="contactForm" class="btn btn-primary btn-style mt-3">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Our Office Address</h5>
                            <p><span class="fa fa-map-marker"></span>
                                <p class="title-small">REGARD CHEMICAL WORKS (PVT) LTD</p>
                                54 B.K. Ganguly Lane. Kayettuly,
                                Dhaka – 1000, Bangladesh.
                            </p>
                            <p><span class="fa fa-phone"></span>
                                <a href="tel:+8801715077247">  +8801715077247, </a>
                                <a href="tel:+8801715077247">  +8801715077247, </a>
                            </p>
                            <p> <a href="mailto:info@regardchemical.com.bd"><span class="fa fa-envelope"></span>info@regardchemical.com.bd</a></p>
                            
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d456.5856095491287!2d90.4020033!3d23.7229448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c4efff6931%3A0x6a081d57e7b7774c!2sRegard%20Chemical%20Works%20(Pvt)%20Ltd!5e0!3m2!1sen!2sbd!4v1714294863156!5m2!1sen!2sbd" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- //contacts -->
<?php
include_once('_footer.php');
?>