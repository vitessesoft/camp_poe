<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">

        <meta name="author" content="CAMP POE SRI LANKA">

        <title>CAMP POE</title>

        <!--perloader js--->
        <script src="<?php echo base_url(); ?>resoures/loader/js/modernizr.custom.js"></script>
        <!--perloader js end--->

        <!--perloader css--->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resoures/loader/css/effect2.css" />
        <!--perloader css end--->

        <!--all css--->
        <?php include_once './resoures/imports/baseimports.php'; ?>
        <!--all css end--->
    </head>

    <body>
        <div id="ip-container" class="ip-container">
            <!-- initial header -->
            <header class="ip-header">

                <div class="ip-loader">
                    <div class="container">
                        <div class="row " style=" text-align: center;">
                            <img  class="img-rounded" src="<?php echo base_url(); ?>/resoures/img/logo.png" alt=""> 
                        </div>
                    </div>
                    <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                    <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                    <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                    </svg>
                </div>
            </header>
            <!-- top bar -->

            <!-- main content -->
            <?php include_once './resoures/imports/temp_header.php'; ?>


            <div  id="view_item">
                <div class="cart_baner ">
                    <img src="<?php echo base_url(); ?>/resoures/img/covers/cart_baner.png" alt="...">
                </div>    


                <!--==========================================
                               item view start
                ==========================================--->

                <section id="view_item" >
                    <div class="container">
                        <div class="row">				
                            <div class="col-lg-12">
                                <div id="main_area">
                                    <!-- Slider -->
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="col-xs-12" id="slider">
                                                <!-- Top part of the slider -->
                                                <div class="row">
                                                    <div class="col-sm-12" id="carousel-bounding-box">
                                                        <div class="carousel slide" id="myCarousel">
                                                            <!-- Carousel items -->
                                                            <div class="carousel-inner">
                                                                <?php
                                                                if (!empty($item_img)) {
                                                                    $count = 0;
                                                                    foreach ($item_img as $item_imgs) {
                                                                        if ($count == 0) {
                                                                            $item = "active";
                                                                        }
                                                                        ?>
                                                                        <div class="<?php echo $item; ?> item" data-slide-number="<?php echo $count; ?>">
                                                                            <img src="<?php echo base_url() . $item_imgs->img_url; ?>"></div>
                                                                        <?php
                                                                        $count++;
                                                                        $item = "";
                                                                    }
                                                                }
                                                                ?>
                                                            </div>

                                                        </div>
                                                        <div class="selection" id="slider-thumbs">
                                                            <!-- Bottom switcher of slider -->
                                                            <ul class="hide-bullets">
                                                                <?php
                                                                if (!empty($item_img)) {
                                                                    $count = 0;
                                                                    foreach ($item_img as $item_imgs) {
                                                                        ?>
                                                                        <li class="col-sm-3">
                                                                            <a class="thumbnail" id="<?php echo "carousel-selector-" . $count; ?>">
                                                                                <img src="<?php echo base_url() . $item_imgs->img_url; ?>">
                                                                            </a>
                                                                        </li>
                                                                        <?php
                                                                        $count++;
                                                                    }
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!--/Slider and col-sm-6-->

                                        <div class="col-sm-6">
                                            <div class="info-set">
                                                <?php
                                                if (!empty($item_detail)) {
                                                    foreach ($item_detail as $item_details) {
                                                        ?>           
                                                        <h4><?php echo $item_details->name; ?></h4>
                                                        <p>LKR <?php echo $item_details->price; ?></p>
                                                        <hr>
                                                        <h3><?php echo $item_details->discription; ?></h3>
                                                        <hr>
                                                        <p><p><button type = "button" class = "btn btn-labeled btn-primary"><span class = "btn-label"><i class = "fa fa-shopping-cart"></i></span>Add to Cart</button></p></p>
                                                        <hr>

                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div><!--info-set-->
                                        </div>
                                    </div><!--row-->
                                </div><!--main area-->
                            </div> 		<!-- end col lg 12 -->
                        </div>	    <!-- End row -->
                    </div>       <!-- End container -->
                </section>    <!-- End Section -->


                <section id="others">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="owl-demo">
                                    <?php
                                    if (!empty($images)) {
                                        $count = 0;
                                        foreach ($images as $item_imgs) {
                                            if ($item_imgs->img_type == "1") {
                                                ?>
                                                <div class="item"><div class="mas"><a href="<?php echo base_url() . "index.php/shop/item_details/" . $item_imgs->item_id; ?>"><img src="<?php echo base_url() . $item_imgs->img_url; ?>" alt="Camp poe shop items"></a></div></div>
                                                            <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                </div>
                            </div>
                        </div>
                    </div><!--container-->
                </section><!--others-->

            </div><!--view_item-->  
            <!----=====================================================
                   camp poe info end
           =================================================--------->
        </div><!-- /per loader container -->
        <!----=====================================================
                fotter
        =================================================--------->
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
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery sticky-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery.nicescroll.min.js"></script>
        <!-- owl js-->
        <script src="<?php echo base_url(); ?>/resoures/js/owl.carousel.min.js"></script>
        <!-- allscript-->
        <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>
        <!-- per loader-->
        <script src="<?php echo base_url(); ?>resoures/loader/js/classie.js"></script>

        <script src="<?php echo base_url(); ?>resoures/loader/js/pathLoader.js"></script>

        <script src="<?php echo base_url(); ?>resoures/loader/js/main.js"></script>

        <script>
            wow = new WOW({
                animateClass: 'animated',
                offset: 120
            });
            wow.init();

        </script>



        <!----==============================
              end      script
          ----------------------------------> 


    </body>
</html>