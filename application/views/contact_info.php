<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="SRI LANKA HOTELS">
        <meta name="description" content="SRI LANKA TOURS">
        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">
        <meta name="author" content="CAMP POE SRI LANKA">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>CAMP POE | Contact</title>
        <!-- Mobile Specific Meta
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include_once './resoures/imports/baseimports.php'; ?>
    </head>

    <body id="contact">
        <div id="ip-container" class="ip-container">
            <!-- initial header -->
            <?php include_once './resoures/imports/temp_header.php'; ?>

            <div id="contact_info">
                <div class="cart_baner">
                    <img style="min-width: 100%;" src="<?php echo base_url(); ?>/resoures/img/covers/contact.png" alt="...">
                </div> 
                <div id="main_info">
                    <div class="container">
                        <h1 class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">Contact Camp Poe</h1>
                        <div class="row">
                            <div class="discrp wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Earum, temporibus, delectus! Quia repellendus quod impedit 
                                    ea ex natus quidem pariatur nulla iusto! Animi ullam quasi 
                                    esse odit asperiores tempora eligendi.</p>
                            </div>
                        </div><!--row-->
                    </div><!--container-->
                </div><!--main_info-->


                <section id="contact-page">
                    <div class="container">
                        <div class="row contact-wrap"> 
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="form-on">
                                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo base_url();  ?>contact-camp-poe/send-email">
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <div class="form-group wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                            <label>Name *</label>
                                            <input type="text" name="name" class="form-control" required="required">
                                        </div>
                                        <div class="form-group wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                            <label>Email *</label>
                                            <input type="email" name="email" class="form-control" required="required">
                                        </div>
                                        <div class="form-group wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                            <label>Phone</label>
                                            <input type="number" name="phone" class="form-control">
                                        </div>
                                        <div class="form-group wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                            <label>Subject *</label>
                                            <input type="text" name="subject" class="form-control" required="required">
                                        </div>
                                        <div class="form-group wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                            <label>Message *</label>
                                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                                        </div>                        
                                        <div class="form-group wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                                        </div>

                                    </div>

                                </form>
                            </div>/<!--form-on-->
                            <div class="col-sm-4 ">
                                <ul class="row">
                                    <li class="col-sm-12 address">
                                        <address class="wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                            <h5>Head Office</h5>
                                            <p>1537 Flint Street <br>
                                                Tumon, MP 96911</p>
                                            <p>Phone:670-898-2847 <br>
                                                Email Address:info@domain.com</p>
                                        </address>

                                        <address class="wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                            <h5>Zonal Office</h5>
                                            <p>1537 Flint Street <br>
                                                Tumon, MP 96911</p>                                
                                            <p>Phone:670-898-2847 <br>
                                                Email Address:info@domain.com</p>
                                        </address>
                                    </li>
                                </ul>

                            </div>

                        </div><!--/.row-->
                    </div><!--/.container-->
                </section><!--/#contact-page-->


                <!--=========================================
                      map
                =======================================---->
                <div id="map" class="wow  fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                    <div id="gmap-wrap">
                        <div id="gmap"> 				
                        </div>	 			
                    </div>
                </div><!--/#map-->

                <!--=========================================
                      end map
                =======================================---->


            </div><!--contact_info-->






        </div><!--ip container-->

        <?php include_once './resoures/imports/temp_footer.php'; ?>

        <!-- jquery-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery-1.11.0.min.js"></script>
        <!-- bootstrap-->
        <script src="<?php echo base_url(); ?>/resoures/js/bootstrap.min.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.sticky.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/wow.min.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.nicescroll.min.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery ui-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- allscript-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- Google Map API -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/resoures/js/gmaps.js"></script>
        <!-- Google Map API -->
        <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>

        <script>
            wow = new WOW({
                animateClass: 'animated',
                offset: 120
            });
            wow.init();

// Google Map Customization
            (function () {

                var map;

                map = new GMaps({
                    el: '#gmap',
                    lat: 43.04446,
                    lng: -76.130791,
                    scrollwheel: false,
                    zoom: 16,
                    zoomControl: true,
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    clickable: false
                });

                var image = '<?php echo base_url(); ?>/resoures/img/logo_head.png';
                map.addMarker({
                    lat: 43.04446,
                    lng: -76.130791,
                    icon: image,
                    animation: google.maps.Animation.DROP,
                    verticalAlign: 'bottom',
                    horizontalAlign: 'center',
                    backgroundColor: '#3e8bff',
                });


                var styles =[
                    {
                        "featureType": "road",
                        "stylers": [
                            {"color": "#2a7b72"}
                        ]
                    }, {
                        "featureType": "water",
                        "stylers": [
                            {"color": "#4d9cd6"}
                        ]
                    }, {
                        "featureType": "landscape",
                        "stylers": [
                            {"color": "#6f6f6f"}
                        ]
                    }, {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {"color": "#fff"}
                        ]
                    }, {
                        "featureType": "poi",
                        "stylers": [
                            {"color": "#363636"}
                        ]
                    }, {
                        "elementType": "labels.text",
                        "stylers": [
                            {"saturation": 1},
                            {"weight": 0.1},
                            {"color": "#000000"}
                        ]
                    }

                ];

                map.addStyle({
                    styledMapName: "Styled Map",
                    styles: styles,
                    mapTypeId: "map_style"
                });

                map.setStyle("map_style");
            }());


        </script>

        <!----==============================
              end      script
          ----------------------------------> 
    </body>

</html>



