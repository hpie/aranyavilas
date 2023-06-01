<?php

if (isset($_POST['name'])) {
    include('smtp_mail/smtp_send.php');
    $sendmail = new \SMTP_mail();
    $resMail = $sendmail->sendTestMail($_POST);
?>
    <script>
        alert('Message sent successfully');
    </script>
<?php
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Contact us location details of Aranyavilas Shoghi-Shimla</title>
    <meta name="description" content="Aranyavilas homestay Shimla Google map location with contact details including email and whatsapp number for hotel booking">
    <meta name="keywords" content="Contactus,phonenumber,whatsappnumber,chatwithus,email,shimlahotel,Googlemaplocation,reachus,aranyavilas,hotel,homestay,bedandbreakfast,shimla accommodation,shimlahotels">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="hpie">
    <!-- Start Import Head -->
    <?php
    include('_partials/includes.php'); // Includes Head Tags, Scripts and Libs
    ?>
    <!-- End Import Head -->

<body>
    <!--[if lt IE 7]>
                 <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
             <![endif]-->
    <!-- Start Import Header and Menu -->
    <?php
    include('_partials/header.php'); // Includes Site Header and Menu
    ?>
    <!-- End Import Header and Menu -->
    <div id="page-wrap">
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>CONTACT WITH US</h2>
                        <p>Have questions or need assistance? Contact us today, and our friendly team will be delighted to help</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->

        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container">
                <div class="contact">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="text">
                                <h2>Contact</h2>
                                <p>
                                    We value your feedback and are eager to assist you with any inquiries you may have. Please feel free to get in touch with us using the contact information provided below.</p>
                                <ul>
                                    <li><i class="icon lotus-icon-location"></i> Aranyavilas Shoghi Shoghi-Anandpur road</li>
                                    <li><i class="icon lotus-icon-phone"></i> +91-985-700-8200</li>
                                    <li><i class="icon lotus-icon-phone"></i> +91-985-700-8300</li>
                                    <li><i class="icon lotus-icon-phone"></i> +91-701-812-8686</li>
                                    <li><i class="icon fa fa-envelope-o"></i> info@aranyavilas.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <div class="contact-form">
                                <form id="send-contact-form" id="contactform" action="contact.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text" id="name" name="name" placeholder="Your Name" required="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text" id="email" name="email" placeholder="Your Email" required="">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="field-text" id="subject" name="subject" placeholder="Subject" required="">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="10" id="message" name="message" class="field-textarea" placeholder="Write what do you want"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- <button type="submit" class="awe-btn awe-btn-13">SEND</button> -->
                                            <input type="submit" class="awe-btn awe-btn-13" id="submit" value="Send Message" disabled="">
                                        </div>
                                    </div>
                                    <div id="contact-content"></div>
                                    <div>
                                        <script nonce='S51U26wMQz' type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
                                        <script nonce='S51U26wMQz' type="text/javascript">
                                            function enableLogin() {
                                                document.getElementById("submit").disabled = false;
                                            }
                                        </script>
                                        <div class="g-recaptcha" style="" data-sitekey="6LcpauoZAAAAAA9KUPEGMDJMYoIu3WRkuuOS8N9G" data-callback="enableLogin"></div>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->

        <!-- MAP -->
        <section class="section-map">
            <h1 class="element-invisible">Map</h1>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6836.370912285496!2d77.1338280126947!3d31.048936308318588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39057f1c6b6f29d9%3A0x9d47c13ac5ddfe51!2sAranyavilas!5e0!3m2!1sen!2sin!4v1578424531052!5m2!1sen!2sin" width="100%" height="470" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section>
        <!-- END / MAP -->
        <!-- Start Import testimonial -->
        <?php
        include('_partials/testimonials.php');
        ?>
        <!-- End Import testimonial -->

        <!-- Start Import Footer -->
        <?php
        include('_partials/footer.php'); // Includes footer links and scripts
        ?>
        <!-- End Import Footer -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
</body>

</html>