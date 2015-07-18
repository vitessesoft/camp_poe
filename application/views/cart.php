<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="description" content="CAMP POE SRI LANKA HOTELS ">

        <meta name="author" content="CAMP POE SRI LANKA">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
        <script type="text/javascript">
            $(function () {
                $(document).on('click', 'button.add_to_cart', function () {
                    alert("aa");
                });
            });

        </script>

    </head>

    <body id="shop">
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


            <div  id="Shop_content">
                <div class="pakages_baner">
                    <img style="min-width: 100%;" src="<?php echo base_url(); ?>/resoures/img/covers/cart_baner.png" alt="...">
                </div> 

                <div class="addcollect">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6">
<!--                                <h3 style="display:block"><p>Cart</p><span>5</span> <p>Tolat</p></h3>-->
                                <h3 class="cart-total"><i class = "fa fa-shopping-cart fa-lg"> </i>  Cart<span> 2</span>&nbsp Totala<span> $4000</span>&nbsp <button type="submit" class="btn btn-default">&nbsp;<i class="fa fa-paypal"></i></button>&nbsp <button type="submit" class="btn btn-default">&nbsp <i class="fa fa-list"></i></button></h3>
                            </div>
                        </div>
                    </div>
                </div><!--addcollect-->   

                <div class="search">
                    <div class="container">
                        <div class="row">
                            <div class="aside">
                                <div class="col-sm-8 ">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt fuga rerum quis. Recusandae possimus ab, voluptatem voluptate commodi at labore suscipit laborum nesciunt modi. Nesciunt aspernatur quas harum, ut repellendus!
                                </div>
                            </div>
                            <div class="left">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label for="inputPassword2" class="sr-only"></label>
                                            <input type="text" class="form-control" id="inputPassword2" placeholder="Item Name">
                                        </div>
                                        <button type="submit" class="btn btn-default">Search</button>
                                    </form>
                                </div>
                            </div><!--left-->
                        </div>
                    </div><!--container-->

                </div><!--search-->

                <style>

                    ::-webkit-input-placeholder {
                        text-align: center;
                    }

                    :-moz-placeholder { /* Firefox 18- */
                        text-align: center;  
                    }

                    ::-moz-placeholder {  /* Firefox 19+ */
                        text-align: center;  
                    }

                    :-ms-input-placeholder {  
                        text-align: center; 
                    }

                </style>

                <div class="items">
                    <div class="container">
                        <div class="row">

                            <!--item one---->
                            <?php
                            if (!empty($images)) {
                                $count = 0;
                                foreach ($images as $item_imgs) {
                                    if ($item_imgs->img_type == "1") {
                                        $count++;
                                        foreach ($items as $item_details) {
                                            if ($item_details->id == $count) {
                                                ?>
                                                <div class = "col-sm-6 col-md-3 wow fadeInUp" data-wow-duration = "500ms" data-wow-delay = "400ms">
                                                    <div class = "thumbnail">
                                                        <img src = "<?php echo base_url() . $item_imgs->img_url; ?>" alt = "...">
                                                        <div class = "caption">
                                                            <h3><?php echo $item_details->name; ?></h3>
                                                            <p>LKR <?php echo $item_details->price; ?></p>
                                                            <p><a href="<?php echo base_url() . "index.php/shop/item_details/" . $item_details->id; ?>"><button type = "button" class = "btn btn-labeled btn-primary"><span class = "btn-label"><i class = "fa fa-eye"></i></span>View</button></a>
                                                               <!--  <button type = "button" class = "btn btn-labeled btn-primary"><span class = "btn-label"><i class = "fa fa-shopping-cart"></i></span>Add to Cart</button>>--->
                                                           <!-- <center><input class="qty" type="text" placeholder="Qty" id="<?php echo "item" . $item_details->id ?>"></center></p>--->
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }
                                }
                            }
                            ?>

                        </div><!--row-->
                    </div><!--container-->
                </div><!--items-->

            </div><!--row-->
        </div><!--container-->
    </div><!--items-->





</div><!--Shop_content-->


<!----=====================================================
camp poe info end
================================================ = --------->
</div><!--/per loader container -->
<!----=====================================================
fotter
================================================ = --------->
<?php include_once './resoures/imports/temp_footer.php';
?>



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
<!--        <script src="<?php echo base_url(); ?>/resoures/js/jquery-ui-1.10.4.custom.min.js"></script>-->
<!-- allscript-->
<script src="<?php echo base_url(); ?>/resoures/js/allscript.js"></script>
<!-- per loader-->

<script src="<?php echo base_url(); ?>resoures/loader/js/classie.js"></script>

<script src="<?php echo base_url(); ?>resoures/loader/js/pathLoader.js"></script>

<script src="<?php echo base_url(); ?>resoures/loader/js/main.js"></script>




<!----==============================
      end      script
  ----------------------------------> 


</body>
</html>