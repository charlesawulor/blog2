<?php
include('admin/dbconnect.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>






</head>
<body>
<div class="header" id="ban">
		<div class="container">
			<div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<div class="header-search">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="text" name="Search" placeholder="Search...">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
				</div>
			</div>
			<div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-7" id="link-effect-7">
						<ul class="nav navbar-nav">
							<li class=""><a href="index.php">Home</a></li>
							<?php
							$qry="SELECT * FROM categorytbl limit 2";
							$run= mysqli_query($conn, $qry);
							while($row = mysqli_fetch_array($run)){
								$cid = $row['catid'];
								$cat = $row['category'];
								echo "<li><a href='page.php?id=$cid'>$cat</a></li>";
							}
							?>
							
						  <div class="dropdown">
  <button class="dropbtn">more</button>	  
  <div class="dropdown-content">
								
							
							  </div>
</div> 
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			</div>
			<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					<ul>
						<li><a href="#"> </a></li>
						<li><a href="#" class="pin"> </a></li>
						<li><a href="#" class="in"> </a></li>
						<li><a href="#" class="be"> </a></li>
						
						<li><a href="#" class="vimeo"> </a></li>
					</ul>
				</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s" style="float:left">
				<h1><a href="index.html">BLOG</a></h1>
				<p><label class="of"></label>CONNECTING YOU TO THE WORLD<label class="on"></label></p>
			</div>
		</div>
	</div>
<!-- banner -->

<div class="banner">
<div class="container">	
		<h2>Welcome</h2>
		
	</div>
</div>
<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
		<div class="container">
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">FASHION</a></li>
						<li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari">TRAVEL</a></li>
						<li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">MUSIC</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">
							
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/f2.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/f4.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/f3.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="clearfix"></div>
						</div>
						
						
						<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/t1.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/t2.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/t3.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="clearfix"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">

							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/m2.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/m1.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/m3.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="tech-no">
			<!-- technology-top -->
			
						
                				<?php
								
								
								$per_page=10;
								if(isset($_GET['page'])){
									$page = $_GET['page'];
								}
								else {
									$page = 1;
								}
								$start_from =($page-1) * $per_page;
								
								
								
								
								
			$qry = "SELECT * FROM posttbl Order by 1 DESC LIMIT $start_from, $per_page";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){
				$pt = $row['post_title'];
				$pid=$row['postid'];
				$pd = $row['posted_by'];
				$d = $row['posted_date'];
				$pc = $row['post_content'];
				$reduce_size = substr ($pc,0,20);
				$img  = $row['post_img'];
			echo"
			 <div class='tc-ch wow fadeInDown'  data-wow-duration='.8s' data-wow-delay='.2s'>
				
					<div class='tch-img'>
						<a href='#'><img src='admin/post_image/$img' class='img-responsive' alt=''/></a>
					</div>
					
					<h3><a href='#'>$pt</a></h3>
					<h6>BY <a href='#'>$pd </a>$d</h6>
						<p>$reduce_size .....</p>
						<div class='bht1'>
							<a href='singlepage.php?id=$pid'>Continue Reading</a>
						</div>
						<div class='soci'>
							<ul>
								<li class='hvr-rectangle-out'><a class='fb' href='#'></a></li>
								<li class='hvr-rectangle-out'><a class='twit' href='#'></a></li>
								<li class='hvr-rectangle-out'><a class='goog' href='#'></a></li>
								<li class='hvr-rectangle-out'><a class='pin' href='#'></a></li>
								<li class='hvr-rectangle-out'><a class='drib' href='#'></a></li>
							</ul>
						</div>
						<div class='clearfix'></div>
						
				</div>
				
				";
			
				
			}
			?>
			
			
			</div>
			</div>

						
		
		
			
	
			
			
			
			
			
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				<div class="blo-top1">
							
					<div class="tech-btm">
					<div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<form action="#" method="post">
								<input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
								<input type="submit" value=" ">
							</form>
						</div>
					<h4>Popular Posts </h4>
						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/t2.jpg" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/m2.jpg" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/f2.jpg" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/t3.jpg" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/m3.jpg" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<h4>Instagram</h4>
						<ul>
							
							<li><a href="singlepage.html"><img src="images/t1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/t2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/t3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m3.jpg" class="img-responsive" alt=""></a></li>
						</ul>
					</div>
					
					<p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
					<div class="twt">
					
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
					</div>
					
					
					
				</div>
				
			
		</div>

		<div class="clearfix"></div>
		
		<?php include("pagenation.php");?>
		
		
		
		<!-- technology-right -->
	</div>
</div>
<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h4>About Me</h4>
				<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
				<img src="images/t4.jpg" class="img-responsive" alt="">
					<div class="bht1">
						<a href="singlepage.html">Read More</a>
					</div>
			</div>
			<div class="col-md-4 footer-middle wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
			<h4>Latest Tweet</h4>
			<div class="mid-btm">
				<p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
				<a href="">https://w3layouts.com/</a>
			</div>
			
				<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
				<a href="">https://w3layouts.com/</a>
		
			</div>
			<div class="col-md-4 footer-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h4>Newsletter</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
						<div class="name">
							<form action="index.php" method="POST">
								<input type="text" name="na" placeholder="Your Name" >
								<input type="text" name="mail" placeholder="Your Email" >
								<input type="submit" name="subscribe" value="Subscribed Now">
							</form>
						
						</div>	
						
							<div class="clearfix"> </div>
					
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<div class="container">
					<p>© 2016 Style Blog. All rights reserved | Design by <a href="">W3layouts</a></p>
				</div>
			</div>
			



<?php


if(isset($_POST['subscribe']))
{
	$na=$_POST['na'];
	$mail=$_POST['mail'];

	
	

		include("dbconnect.php");
		$ff="insert into newslettertbl(name,email)values('$na','$mail')";
        if($result=$conn->query($ff))
			
		{
         echo"<script>alert('contact added successfully')</script>";	
        }	

         else
         {
			 echo"<script>alert('not successfull')</script>";
	 }
	
}
	

?>
			
			
</body>
</html>