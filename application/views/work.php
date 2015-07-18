<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
		<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
		<meta name="description" content="Camp poe">
		<meta name="author" content="Camp Poe Gallery">
		
		<title>Camp Poe Gallery</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>resoures/gallery/css/bootstrap.min.css">
		<!-- Bootstrap Core CSS -->
		
		<!-- FontAwesome -->
		<link href="<?php echo base_url(); ?>resoures/gallery/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Blue Imp Gallery -->
		<link href="<?php echo base_url(); ?>resoures/gallery/css/blueimp-gallery.min.css" rel="stylesheet">
		
		<link href="<?php echo base_url(); ?>resoures/gallery/css/blueimp-gallery-indicator.css" rel="stylesheet">
		
		 <!-- Custom CSS -->
		<link href="<?php echo base_url(); ?>resoures/gallery/css/theme.css" rel="stylesheet">
	
		 <!-- wow animation -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>resoures/css/animate.css">
		
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
				
					<li><a title="Work" class="active" href="<?php echo base_url(); ?>index.php/Gallery">Gallery</a></li>
					<li><a title="Blog" href="<?php echo base_url(); ?>index.php/Gallery/blog">Blog</a></li>
					<li><a title="Contact" href="<?php echo base_url(); ?>index.php/Gallery/albem">Albem</a></li>
				
				</ul> <!-- .sidebar-nav -->
			</nav> <!-- #sidebar-wrapper -->
		
			<!-- #page-content-wrapper -->
			<div id="page-content-wrapper">
				<div class="container-fluid">
				<h1 class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">Camp Poe Gallery</h1>
					<div class="row">
						<div class="col-md-12 menu-toggle-container hidden-xs">
							<span class="menu-toggle menu-toggle-btn" id="menu-toggle"><i class="fa fa-navicon"></i></span>
							<span class="sr-only">Toggle sidebar view</span>
						</div>
					</div>  <!-- /.row -->
					
<!--
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							
						</div>
-->
					</div> <!-- /.row -->
					
					<div class="row">
						<div class="col-md-12">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#gallery" role="tab" data-toggle="tab">Gallery</a></li>
								<li role="presentation"><a href="#albums" role="tab" data-toggle="tab">Albums</a></li>
							</ul>
						</div>
					</div> <!-- /.row -->
					
					<div class="row">
					
						<!-- Tab panes -->
						<div class="tab-content">
						
							<!-- Gallery tab pane -->
							<div role="tabpanel" class="tab-pane fade in active" id="gallery">
								
								<!-- first row of gallery items -->
								<article class="col-md-4 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="500ms">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work1.jpg" title="Amazing image 1" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work1-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 1</h3></div>
									</a>
								</article> <!-- /.col-md-4 -->
								<article class="col-md-8">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work2.jpg" title="Amazing image 2" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work2-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 2</h3></div>
									</a>
								</article> <!-- /.col-md-8 -->
								<!-- / first row of gallery items -->
								
								<!-- second row of gallery items -->
								<article class="col-md-6">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work3.jpg" title="Amazing image 3" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work3-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 3</h3></div>
									</a>
								</article> <!-- /.col-md-6 -->
								<article class="col-md-6">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work4.jpg" title="Amazing image 4" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work4-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 4</h3></div>
									</a>
								</article> <!-- /.col-md-6 -->
								<!-- / second row of gallery items -->
								
								<!-- third row of gallery items -->
								<article class="col-md-5">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work5.jpg" title="Amazing image 5" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work5-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 5</h3></div>
									</a>
								</article> <!-- /.col-md-5 -->
								<article class="col-md-4">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work6.jpg" title="Amazing image 6" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work6-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 6</h3></div>
									</a>
								</article> <!-- /.col-md-4 -->
								<article class="col-md-3">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work7.jpg" title="Amazing image 7" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work7-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 7</h3></div>
									</a>
								</article> <!-- /.col-md-3 -->
								<!-- / third row of gallery items -->
								
								<!-- fourth row of gallery items -->
								<article class="col-md-4">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work8.jpg" title="Amazing image 8" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work8-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 8</h3></div>
									</a>
								</article> <!-- /.col-md-4 -->
								<article class="col-md-8">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work9.jpg" title="Amazing image 9" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work9-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 9</h3></div>
									</a>
								</article> <!-- /.col-md-8 -->
								<!-- / fourth row of gallery items -->
								
								<!-- fifth row of gallery items -->
								<article class="col-md-5">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work10.jpg" title="Amazing image 10" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work10-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 10</h3></div>
									</a>
								</article> <!-- /.col-md-5 -->
								<article class="col-md-7">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work11.jpg" title="Amazing image 11" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work11-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 11</h3></div>
									</a>
								</article> <!-- /.col-md-7 -->
								<!-- / fifth row of gallery items -->
								
								<!-- sixth row of gallery items -->
								<article class="col-md-4">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work12.jpg" title="Amazing image 12" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work12-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 12</h3></div>
									</a>
								</article> <!-- /.col-md-4 -->
								<article class="col-md-4">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work13.jpg" title="Amazing image 13" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work13-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 13</h3></div>
									</a>
								</article> <!-- /.col-md-4 -->
								<article class="col-md-4">
									<a href="<?php echo base_url(); ?>resoures/gallery/imgs/work14.jpg" title="Amazing image 14" data-gallery>
										<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work14-thumb.jpg');"></div>
										<div class="title-container" style="background: #2a7b72;"><h3>Amazing Image 14</h3></div>
									</a>
								</article> <!-- /.col-md-4 -->
								<!-- / sixth row of gallery items -->
								
							</div> <!-- /End gallery tab pane -->
							
							<!-- /Albums tab pane -->
							<div role="tabpanel" class="tab-pane fade" id="albums">
								<div class="col-md-8 col-md-offset-2">
									<article class="row">
										<div class="col-md-6 pad-top">
											<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work14-thumb.jpg');"></div>
										</div> <!-- /.col-md-6 -->
										<div class="col-md-6">
											<h2 class="work-header">Event One</h2>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, veritatis, expedita, laboriosam, saepe velit obcaecati officia suscipit alias aliquid mollitia dolores iste quia cupiditate praesentium ullam eum rerum? Debitis, optio.
											</p>
											<p>
												<a href="album.html" class="btn btn-default dark">View Album <i class="fa fa-link"></i></a>
											</p>
										</div> <!-- /.col-md-6 -->
									</article> <!-- /.row -->
								
									<hr>
								
									<article class="row">
										<div class="col-md-6">
											<h2 class="work-header">Event One Two</h2>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, veritatis, expedita, laboriosam, saepe velit obcaecati officia suscipit alias aliquid mollitia dolores iste quia cupiditate praesentium ullam eum rerum? Debitis, optio.
											</p>
											<p>
												<a href="album.html" class="btn btn-default dark">View Album <i class="fa fa-link"></i></a>
											</p>
										</div> <!-- /.col-md-6 -->
										<div class="col-md-6 pad-top">
											<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work11-thumb.jpg');"></div>
										</div> <!-- /.col-md-6 -->
									</article> <!-- /.row -->
								
									<hr>
								
									<article class="row">
										<div class="col-md-6 pad-top">
											<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work9-thumb.jpg');"></div>
										</div> <!-- /.col-md-6 -->
										<div class="col-md-6">
											<h2 class="work-header">Event Three</h2>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, veritatis, expedita, laboriosam, saepe velit obcaecati officia suscipit alias aliquid mollitia dolores iste quia cupiditate praesentium ullam eum rerum? Debitis, optio.
											</p>
											<p>
												<a href="album.html" class="btn btn-default dark">View Album <i class="fa fa-link"></i></a>
											</p>
										</div> <!-- /.col-md-6 -->
									</article> <!-- /.row -->
								
									<hr>
								
									<article class="row">
										<div class="col-md-6">
											<h2 class="work-header">Event Four</h2>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, veritatis, expedita, laboriosam, saepe velit obcaecati officia suscipit alias aliquid mollitia dolores iste quia cupiditate praesentium ullam eum rerum? Debitis, optio.
											</p>
											<p>
												<a href="album.html" class="btn btn-default dark">View Album <i class="fa fa-link"></i></a>
											</p>
										</div> <!-- /.col-md-6 -->
										<div class="col-md-6 pad-top">
											<div class="img-container" style="background-image: url('<?php echo base_url(); ?>resoures/gallery/imgs/work5-thumb.jpg');"></div>
										</div> <!-- /.col-md-6 -->
									</article> <!-- /.row -->
									
								</div> <!-- /.col-md-8  -->
								
							</div> <!-- /End Albums tab pane -->
						
						</div> <!-- /.tab-content -->
					
					</div> <!-- .row -->
				</div> <!-- .container -->
			</div> <!-- /#page-content-wrapper -->
			
		</div> <!-- /#site-wrapper -->
		
		<!-- Gallery dialog markup: this must go at the bottom -->
		<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
		<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
			<div class="slides"></div>
			<h3 class="title"></h3>
			<a class="prev">‹</a>
			<a class="next">›</a>
			<a class="close"><i class="fa fa-times"></i></a>
			<a class="play-pause"></a>
			<ol class="indicator"></ol>
		</div>
		
		 <?php include_once './resoures/imports/temp_footer.php'; ?>
		 
		 
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
		<!-- sice scrolling -->
       <script src="<?php echo base_url(); ?>/resoures/js/jquery.nicescroll.min.js"></script>
           <!-- sice scrolling -->
       <script src="<?php echo base_url(); ?>/resoures/js/wow.min.js"></script>
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