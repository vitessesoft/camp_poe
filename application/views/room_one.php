<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">
        <meta name="author" content="CAMP POE SRI LANKA">
        
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>CAMP POE | Room One</title>

        <!-- Mobile Specific Meta
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <?php include_once './resoures/imports/baseimports.php'; ?>
    </head>

    <body>
        <div id="ip-container" class="ip-container">
            <?php include_once './resoures/imports/temp_header.php'; ?>
            <div id="room_one">
                <div class="room_baner fullheight" style="margin: 20px;">

                    <?php
                    if (!empty($images)) {
                        foreach ($images as $room_imgs) {
                            if ($room_imgs->img_type == "cover") {
                                echo "<img style='background-size: 100% 100%;' src='" . base_url() . $room_imgs->ril_img_url . "' alt='' >";
                            }
                        }
                    }
                    ?>
                </div>
                <div id="room_one_first">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                <div class="first-img">
                                    <?php
                                    if (!empty($images)) {
                                        foreach ($images as $room_imgs) {
                                            if ($room_imgs->style_col == "3A") {
                                                echo "<img  class='img-rounded' src='" . base_url() . $room_imgs->ril_img_url . "' alt=''>";
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-3 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                <div class="second-img">
                                    <?php
                                    if (!empty($images)) {
                                        foreach ($images as $room_imgs) {
                                            if ($room_imgs->style_col == "3B") {
                                                echo "<img  class='img-rounded' src='" . base_url() . $room_imgs->ril_img_url . "' alt=''>";
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                <div class="booking" style="background:#333333;">

                                    <div class="room-info">

                                        <?php
                                        if (!empty($details)) {
                                            foreach ($details as $room_details) {
                                                echo"<h3 style='margin-left: 25px; color:white;'>" . $room_details->rm_name . "</h3><br>";
                                                echo "<p style='color:white;'>" . $room_details->rm_detail . "</p>";
                                            }
                                        }
                                        ?>
                                     
                                        <div class="row">
                                            <form action="<?php echo base_url(); ?>index.php/camp/available-suites" class="form_start" method="post">
                                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                                    <div class="form-group">
                                                        <input type="hidden" name="room_home_id" value="<?php echo $this->uri->segment(3); ?>">
                                                        <input type="text" class="form-control" name="arrive" id="datepicker_1" placeholder="CHECK IN">
                                                    </div>
                                                    <select name="adult" id="adult" class="form-control"  >
                                                        <option value="0">ADULTS</option>
                                                        <option value="1">1 adult</option>
                                                        <option value="2">2 adults</option>
                                                        <option value="3">3 adults</option>
                                                        <option value="1">4 adults</option>
                                                        <option value="2">5 adults</option>
                                                        <option value="3">6 adults</option>
                                                        <option value="3">7 adults</option>
                                                        <option value="1">8 adults</option>
                                                        <option value="2">9 adults</option>
                                                        <option value="3">10 adults</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                                                    <div class="form-group">
                                                        <input type="text" name="depart" class="form-control" id="datepicker_2" placeholder="CHECK IN">
                                                    </div>
                                                    <select name="child" id="child" class="form-control" style="">
                                                        <option value="0">CHILDREN</option>
                                                        <option value="1">1 CHILD</option>
                                                        <option value="2">2  CHILDREN</option>
                                                        <option value="3">3  CHILDREN</option>
                                                        <option value="1">4  CHILDREN</option>
                                                        <option value="2">5  CHILDREN</option>
                                                        <option value="3">6  CHILDREN</option>
                                                        <option value="3">7  CHILDREN</option>
                                                        <option value="1">8  CHILDREN</option>
                                                        <option value="2">9  CHILDREN</option>
                                                        <option value="3">10  CHILDREN</option>

                                                    </select>                                     
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-default">Check Availability</button>
                                                </div>
                                            </form><!--form-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--row-->
                    </div><!--container-fluid-->
                </div><!--room_one_first-->

                <!----=====================================================
                           first tow image and checkin end
                =================================================--------->

                <!----=====================================================
                           map and next two images
                =================================================--------->
                <div id="room_one_second">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="first-thrd">
                                    <?php
                                    if (!empty($images)) {
                                        foreach ($images as $room_imgs) {
                                            if ($room_imgs->style_col == "6C") {
                                                echo "<img  class='img-rounded' src='" . base_url() . $room_imgs->ril_img_url . "' alt=''>";
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="first-fourth">
                                    <?php
                                    if (!empty($images)) {
                                        foreach ($images as $room_imgs) {
                                            if ($room_imgs->style_col == "3D") {
                                                echo "<img  class='img-rounded' src='" . base_url() . $room_imgs->ril_img_url . "' alt=''>";
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="first-fifth">
                                    <?php
                                    if (!empty($images)) {
                                        foreach ($images as $room_imgs) {
                                            if ($room_imgs->style_col == "3E") {
                                                echo "<img  class='img-rounded' src='" . base_url() . $room_imgs->ril_img_url . "' alt=''>";
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--room_one_first-->
                <!----=====================================================
                            map and next two images end
                =================================================--------->


                <!----=====================================================
                              last two images
                  =================================================--------->
                <div id="room_one_thrd">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="first-six">
                                    <?php
                                    if (!empty($images)) {
                                        foreach ($images as $room_imgs) {
                                            if ($room_imgs->style_col == "4F") {
                                                echo "<img  class='img-rounded' src='" . base_url() . $room_imgs->ril_img_url . "' alt=''>";
                                            }
                                        }
                                    }
                                    ?>
                                </div> 
                            </div>
                            <div class="col-sm-8">
                                <div class="first-six">
                                    <?php
                                    if (!empty($images)) {
                                        foreach ($images as $room_imgs) {
                                            if ($room_imgs->style_col == "8G") {
                                                echo "<img  class='img-rounded' src='" . base_url() . $room_imgs->ril_img_url . "' alt=''>";
                                            }
                                        }
                                    }
                                    ?>
                                </div> 
                            </div>
                        </div><!--row-->
                    </div><!--CONTAINE-->
                </div><!--room_one_thrd-->
                <!----=====================================================
                            last two images end
                =================================================--------->
            </div><!--room_one-->
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
        <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>

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



