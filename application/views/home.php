<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">
        <meta name="author" content="CAMP POE SRI LANKA">
        <title>CAMP POE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include_once './resoures/imports/baseimports.php'; ?>
    </head>

    <body id="home">
           <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Meghna Preloader" width="20%" height="20%" src="<?php echo base_url(); ?>/resoures/img/log_2.svg" />

			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->

            <?php include_once './resoures/imports/temp_header.php'; ?>
            <div  id="home_poe">

                  <!----=====================================================
                    home page   slider
             =================================================--------->
             
               <div class="home-top ">
                    <div id="carousel-example-generic " class="carousel slide " data-ride="carousel">
              <!-- Indicators -->
    

              <!-- Wrapper for slides -->
              <div class="carousel-inner wow fadeIn" data-wow-duration="500ms" data-wow-delay="1500ms" role="listbox">
                <div class="item active">
                  <img style="min-width: 100%;"  src="<?php echo base_url(); ?>/resoures/img/home/1.png" alt="CAMP POE HOTEL">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img style="min-width: 100%;"  src="<?php echo base_url(); ?>/resoures/img/home/2.png" alt="CAMP POE HOTEL">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                  <div class="item">
                  <img style="min-width: 100%;"  src="<?php echo base_url(); ?>/resoures/img/home/3.png" alt="CAMP POE HOTEL">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                  <div class="item">
                  <img style="min-width: 100%;"  src="<?php echo base_url(); ?>/resoures/img/home/4.png" alt="CAMP POE HOTEL">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
              </div>

            </div>
               </div><!--home top-->
             
              <!----=====================================================
                    home page   slider  end
             =================================================--------->
             
              <!----=====================================================
                    availability checking
             =================================================--------->
             <!-- Reservation form -->
<section id="reservation-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">         
        <form class="form-inline reservation-horizontal clearfix" role="form" method="post" action="php/reservation.php" name="reservationform" id="reservationform">
        <!-- Error message -->
		<div id="message"></div>
          <div class="row">
           
             <div id="input">
                  <div class="col-sm-3 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
              <div class="form-group">
               
                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00">  </div>
                <i class="fa fa-calendar infield visible-lg-block" style="   color: #2a7b72;"></i>
                <input name="checkin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
              </div>
            </div>
            <div class="col-sm-3 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
              <div class="form-group">
               
                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00">  </div>
                <i class="fa fa-calendar infield  visible-lg-block" style="   color: #2a7b72;"></i>
                <input name="checkout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
              </div>
            </div>
             <div class="col-sm-2 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                <div class="form-group adults">
                     
                      <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years">  </div>
                      <select name="adults" id="adults" class="form-control">
                        <option value="1">1 adult</option>
                        <option value="2">2 adults</option>
                        <option value="3">3 adults</option>
                      </select>
                    </div>
            </div>
            
               <div class="col-sm-2 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
                <div class="form-group children">
                      
                      <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years">  </div>
                      <select name="children" id="children" class="form-control" >
                        <option value="0">0 children</option>
                        <option value="1">1 child</option>
                        <option value="2">2 children</option>
                        <option value="3">3 children</option>
                      </select>
                    </div>
                  </div>
             </div><!--input-->
            
           
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary btn-block wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">Book Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 
              <!----=====================================================
                    availability checking end
             =================================================--------->
                 
                 
            <!----=====================================================
                   pakages 
             =================================================--------->
                
                <section id="pakages">
                    <div class="container" id="cnt1">
                    <h1 class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms" style="margin-top:50px;">Camp Poe Pakages</h1>
    <div class="row feature">
        <div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-0 col-lg-offset-0 col-xs-0 pakag wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
            <div>
                <img src="http://lorempixel.com/200/200/city/1/" alt="Camp Poe Pakages" class="img-circle">
                <h6>Pakage One</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, urna id vestibulum viverra, 
                       tellus felis rutrum erat, sit amet ultrices orci urna sit amet nunc. 
                       Fusce ut fringilla sem. Curabitur eget est vitae nulla eleifend ullamcorper et laoreet odio. 
                                              
                </p>
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>

        <div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-0 col-lg-offset-0 col-xs-0 pakag wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
            <div>
                <img src="http://lorempixel.com/200/200/city/2/" alt="Camp Poe Pakages" class="img-circle">
                <h6>Pakage Two</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, urna id vestibulum viverra, 
                      tellus felis rutrum erat, sit amet ultrices orci urna sit amet nunc. 
                      Fusce ut fringilla sem. Curabitur eget est vitae nulla eleifend ullamcorper et laoreet odio. 
                            
                </p>
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>

        <div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-0 col-lg-offset-0 col-xs-0 pakag wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
            <div>
                <img src="http://lorempixel.com/200/200/city/3/" alt="Camp Poe Pakages" class="img-circle">
                <h6>Pakage Three</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, urna id vestibulum viverra, 
                       tellus felis rutrum erat, sit amet ultrices orci urna sit amet nunc. 
                       Fusce ut fringilla sem. Curabitur eget est vitae nulla eleifend ullamcorper et laoreet odio. 
                          
                </p>
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>
          <div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-0 col-lg-offset-0 col-xs-0 pakag wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
            <div>
                <img src="http://lorempixel.com/200/200/city/3/" alt="Camp Poe Pakages" class="img-circle">
                <h6>Pakage Four</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, urna id vestibulum viverra, 
                       tellus felis rutrum erat, sit amet ultrices orci urna sit amet nunc. 
                       Fusce ut fringilla sem. Curabitur eget est vitae nulla eleifend ullamcorper et laoreet odio. 
                            
                </p>
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>
    </div>
</div>
                </section><!--pakages-->
                 
                 
            <!----=====================================================
                   pakages end
             =================================================--------->
                 
               <!----=====================================================
                   dalailama
             =================================================--------->
                    
                    <section id="dalailama" class="fullheights">
                        <div class="container">
                          .
                        </div><!--container-->
                    </section><!--dalailama-->
                 
                 
             <!----=====================================================
                   dalailama end
             =================================================--------->
                  



            </div><!--home_poe-->


            <!----=====================================================
                   camp poe info end
           =================================================--------->

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
        <!-- jquery ui-->
        <script src="<?php echo base_url(); ?>/resoures/js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- allscript-->
        <script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>
        <!-- home script-->

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



