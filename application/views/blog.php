<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
		<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
		<meta name="description" content="Responsive Twitter Bootstrap Template For Photography Portfolio">
		<meta name="author" content="Maria Antonietta Perna">
		
		<title>Camp Poe Blog</title>
		
		<!-- Bootstrap Core CSS -->
	   <link rel="stylesheet" href="<?php echo base_url(); ?>resoures/gallery/css/bootstrap.min.css">
		<!-- Bootstrap Core CSS -->
		
		<!-- FontAwesome -->
		<link href="<?php echo base_url(); ?>resoures/gallery/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Blue Imp Gallery -->
		<link href="<?php echo base_url(); ?>resoures/gallery/css/blueimp-gallery.min.css" rel="stylesheet">
		
		<link href="<?php echo base_url(); ?>resoures/gallery/css/blueimp-gallery-indicator.css" rel="stylesheet">
		
		 <!-- Custom CSS -->
		<link href="<?php echo base_url(); ?>resoures/gallery/css/theme.css" rel="stylesheet">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>resoures/css/all.css">
	</head>
	<body id="photos">
	
		<!-- .preloader -->
		<div class="preloader">
			<img src="<?php echo base_url(); ?>resoures/gallery/imgs/preloader.gif" alt="">
		</div> <!-- /.preloader -->
	
		 <?php include_once './resoures/imports/temp_header.php'; ?>
		<div id="site-wrapper" style="margin-top:120px;">
			
			<nav id="sidebar-wrapper" role="navigation">
				<ul class="sidebar-nav">
					<li class="clearfix">
						<div class="close-icon pull-right">
							<i class="fa fa-times"></i><span class="sr-only">Close</span>
						</div>
					</li>
				
					<li><a title="Work"  href="<?php echo base_url(); ?>index.php/Gallery">Gallery</a></li>
					<li><a title="Blog"  class="active" href="<?php echo base_url(); ?>index.php/Gallery/blog">Blog</a></li>
					<li><a title="Contact" href="<?php echo base_url(); ?>index.php/Gallery/albem">Albem</a></li>
				</ul> <!-- .sidebar-nav -->
			</nav> <!-- #sidebar-wrapper -->
		
			<!-- #page-content-wrapper -->
			<div id="page-content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 menu-toggle-container">
							<span class="menu-toggle menu-toggle-btn" id="menu-toggle"><i class="fa fa-navicon"></i></span>
							<span class="sr-only">Toggle sidebar view</span>
						</div>
					</div>  <!-- /.row -->
					
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<h2>Latest News</h2>
						</div>
					</div> <!-- /.row -->
					
					<div class="row pad-top">
					
						<div class="col-md-8 col-md-offset-2">
						
							<div class="row" id="blog">
							
								<!-- article row 1 -->
								<article class="col-md-12">
									<a href="#" title="Article Title">
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work3-thumb.jpg');">
											<div class="photo-overlay"></div>
										</div>
										<div class="blog-info">
											<div class="blog-meta">October 10, 2014</div>
											<div class="title-container"><h3>Article Title</h3></div>
										</div>
									</a>
								</article> <!-- /.col-md-12 -->
								<!-- /article row 1 -->
								
								<!-- article row 2 -->
								<article class="col-md-6">
									<a href="#" title="Article Title">
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work4-thumb.jpg');">
											<div class="photo-overlay"></div>
										</div>
										<div class="blog-info">
											<div class="blog-meta">October 15, 2014</div>
											<div class="title-container"><h3>Article Title</h3></div>
										</div>
									</a>
								</article> <!-- /.col-md-6 -->
								<article class="col-md-6">
									<a href="#" title="Article Title">
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work10-thumb.jpg');">
											<div class="photo-overlay"></div>
										</div>
										<div class="blog-info">
											<div class="blog-meta">October 18, 2014</div>
											<div class="title-container"><h3>Article Title</h3></div>
										</div>
									</a>
								</article> <!-- /.col-md-6 -->
								<!-- /article row 2 -->
								
								<!-- article row 3 -->
								<article class="col-md-6">
									<a href="#" title="Article Title">
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work12-thumb.jpg');">
											<div class="photo-overlay"></div>
										</div>
										<div class="blog-info">
											<div class="blog-meta">October 20, 2014</div>
											<div class="title-container"><h3>Article Title</h3></div>
										</div>
									</a>
								</article> <!-- /.col-md-6 -->
								<article class="col-md-6">
									<a href="#" title="Article Title">
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work13-thumb.jpg');">
											<div class="photo-overlay"></div>
										</div>
										<div class="blog-info">
											<div class="blog-meta">October 22, 2014</div>
											<div class="title-container"><h3>Article Title</h3></div>
										</div>
									</a>
								</article> <!-- /.col-md-6 -->
								<!-- /article row 3 -->
								
							</div> <!-- .row (nested row)-->
							
						</div> <!-- /.col-md-8 -->
					
					</div> <!-- .row -->
				</div> <!-- .container -->
			</div> <!-- /#page-content-wrapper -->
			
		</div> <!-- /#site-wrapper -->
		
		<!-- jQuery Version 1.11.2 -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!			 <?php include_once './resoures/imports/temp_footer.php'; ?>
		
		<!-- jQuery Version 1.11.2 -->
		<script src="<?php echo base_url(); ?>resoures/gallery/js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url(); ?>resoures/gallery/js/bootstrap.min.js"></script>
		<!-- FitText Plugin -->
		<script src="<?php echo base_url(); ?>resoures/gallery/js/jquery.fittext.js"></script>
		<!-- ArcText Plugin -->
		<script src="<?php echo base_url(); ?>resoures/gallery/js/jquery.arctext.js"></script>
		<!-- Blue Imp GAllery Plugin -->
		<script src="<?php echo base_url(); ?>resoures/gallery/js/jquery.blueimp-gallery.min.js"></script>
		<!-- Theme Scripts -->
		       <script src="<?php echo base_url(); ?>/resoures/js/jquery.nicescroll.min.js"></script>
            <!-- Theme Scripts -->
		<script src="<?php echo base_url(); ?>resoures/gallery/js/app.js"></script>
		
		<script>
        	var nice = $("html").niceScroll({
		cursorborderradius: 0,
		cursorwidth: "18px",
		cursorfixedheight: 150,
		cursorcolor: "rgba(62, 202, 255, 0.92)",
		zindex: 9999,
		cursorborder: 0,
	});
        
        </script>
	</body>
</html>