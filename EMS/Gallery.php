<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Event Management System | Gallery</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--script-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
<!--script-->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.img-top a').Chocolat();
		});
		</script>


</head>
<body>
<!--header-->

	<div class="header">
	
			<div class="header-top">
				<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="search">
					<form>
					
					</form>
				</div>
			<div class="clearfix">
            <div class="login">
                <form>
                <a href="Login.php"><input type="button" value="Sign In"></a>
              </form></div>
            </div>
		</div>
		</div>
		<div class="container">
				<div class="top-nav">
				
					<ul class="nav nav-pills nav-justified">
						<li ><a href="index.php" >Home </a></li>
						<li><a href="about1.php" >About </a></li>
						<li><a href="UpComing Event.php" >UpComing Events</a></li>
						<li class="active"><a href="Gallery.php" >Gallery</a></li>						
						<li><a href="contact.php" >Contact</a></li>
					<div class="clearfix"></div>
					</ul>
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
				</div>			
		
		</div>
			<div class="container">
	<!--//header-->
	 <div class="banner">
            <div class="slider">
                   <section class="slider">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                      	<div class="col-md-8 banner-left">
                      	<img  class="img-responsive" src="images/banner.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	           <h3>Nirma University </h3>
                        <p>Institute of Technology </p>
                       </div>
                       <div class="clearfix"></div>
  	    		</li>
 	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner1.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	            <h3>Nirma University </h3>
                        <p>Institute of Technology </p>
                           </div>
                       <div class="clearfix"></div>
  	    		</li>
  	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner2.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	            <h3>Nirma University </h3>
                        <p>Institute of Technology </p>
                           </div>
                       <div class="clearfix"></div>
  	    		</li>
          </ul>
        </div>
      </section>
			  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
			  <!--FlexSlider-->
			  <script defer src="js/jquery.flexslider.js"></script>
			  <script type="text/javascript">
			    $(function(){
			      SyntaxHighlighter.all();
			    });
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: "slide",
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>
			</div>
		</div>
	</div>
</div>
<!--content-->
<!---->
	<div class="gallery">
	<div class="container">
	<div class="gallery-top ">
						<h1>Gallery</h1>
						<p>******************************Photos**************************************</p>
					</div>	
	<div class="sap_tabs">
			
						 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Category</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Category1</span></li>
							 <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Category2</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga2.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			     <a href="images/ga3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			     	<img src="images/ga3.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
							     <div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga4.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga5.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga6.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			     <a href="images/ga7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			     	<img src="images/ga7.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
							     <div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga8.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga6.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			     <a href="images/ga3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			     	<img src="images/ga3.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
									 	        					 
						  </div>
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								
							     <div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga4.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga5.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga6.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			     <a href="images/ga7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			     	<img src="images/ga7.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
							     	<div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga2.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
									 	        					 
						  </div>
						    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								
									  <div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga4.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga5.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga6.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
									<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
							     	<div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										
											<div class="clearfix"></div>
							     </div>		        					 
						  </div>
						   <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
						   	<div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga2.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			     <a href="images/ga3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			     	<img src="images/ga3.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
							     <div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga4.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga5.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga6.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			     <a href="images/ga7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			     	<img src="images/ga7.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
									 	        					 
						  </div>
						    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								
									  <div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga4.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga5.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga6.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
									<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
							     	<div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										
											<div class="clearfix"></div>
							     </div>		        					 
						  </div>
						   <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
						   	<div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga1.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga2.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			     <a href="images/ga3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			     	<img src="images/ga3.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
							     <div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <a href="images/ga4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga4.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			    <a href="images/ga5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			    	<img src="images/ga5.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			   <a href="images/ga6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			   	<img src="images/ga6.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
										<div class="col-md-3 img-top ">
					   		  			     <a href="images/ga7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					   		  			     	<img src="images/ga7.jpg" class="img-responsive" alt=""/>
												 <div class="link-top">
												 <i class="link"> </i>
												 </div>
					   		  			   </a>
										</div>
											<div class="clearfix"></div>
							     </div>	
						   	</div>		
                  </div>
          </div>
         </div>
         </div>	
</div>
		<!---->

 <!--footer-->
 <div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
				<li><a href="Login.php">Sign In</a></li>
						<li><a href="SignUp.php">Create Account</a></li>
<li><a href="#createevent" onClick="login1()">Create Event</a></li>
						<li><a href="UpComing Event.php">UpComing Events</a></li>
		<li><a href="#buyunit" onClick="login()">Buy Units</a></li>
                        <script>
						function login()
						{
							alert("Login First to Buy Unit");
						}
						function login1()
						{
							alert("Login First to Create Event");
						}
						</script>				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>Event Management System</p>
					<p>Nirma University</p>
					<p>Office :  +91-8690267513</p>		
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Follow Us</h4>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="google"> </i></a></li>
						<li><a href="#"><i class="dribbble"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p><a href="index.php">Event Management System</a></p>
		</div>
		</div>
</body>
</html>