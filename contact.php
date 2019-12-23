<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

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

        <div class="page-top" id="templatemo_contact">
        </div> <!-- /.page-header -->

        <div class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 map-wrapper">
                        <h3 class="widget-title">Our Location</h3>
                        <div class="map-holder"></div>
                        <div class="contact-infos">
                            <ul>
                                <li>Aranyavilas Shoghi</li>
                                <li>Shoghi-Mehli Bypass Road</li>
								<li>Pin: 171219</li>
                                <li>Tel: 091-985-700-8200</li>
								<li>Tel: 091-985-700-8300</li>
								<li>Tel: 091-701-812-8686</li>
                                <li>Email: <a href="mailto:info@aranyavilas.com">info@aranyavilas.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="contact-form">
                            <form name="contactform" id="contactform" action="#" method="post">
                                <p>
                                    <input name="name" type="text" id="name" placeholder="Your Name">
                                </p>
                                <p>
                                    <input name="email" type="text" id="email" placeholder="Your Email"> 
                                </p>
                                <p>
                                    <input name="subject" type="text" id="subject" placeholder="Subject"> 
                                </p>
                                <p>
                                    <textarea name="message" id="message" placeholder="Message"></textarea>    
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Send Message">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>


<!-- Start Import Testimonials -->
<?php
	//include('_partials/testimonials.php'); // Testimonials and Feedback
?>
<!-- End Import Testimonials -->

<!-- Start Import Footer -->
<?php
	include('_partials/footer.php'); // Includes footer links and scripts
?>
<!-- End Import Footer -->

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('.first-map, .map-holder').gmap3({
                    marker:{
                        address: '16.8496189,96.1288854' 
                    },
                        map:{
                        options:{
                        zoom: 16,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script>
        
    </body>
</html>