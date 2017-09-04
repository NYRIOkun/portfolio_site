
<!DOCTYPE html>
<!-- by HTML5 -->
<html lang="ja">
<head>
	<meta charset="utf-8">
	<!-- for resposive-design meta-tag-->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>panel-test</title>
	<link href="images/favicon.ico" rel="shortcut icon">
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/panel.css">
	<link rel="stylesheet" type="text/css" href="css/panel_responsive.css">
	<!-- javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<!-- anytools-->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	

</head>
<body>
	<!-- 左の余白を消すためのwrap -->
	<div class="overflow_hide_wrap">
    <header>
    	<div class="container">
	    	<div class="row">
		    	<div class="col-xs-offset-1 col-xs-4 header_logo scroller" name="to_top">
		    		<img src="#">(sample.logo)</img>
		    	</div>
		        <nav class="col-sm-offset-2 col-sm-4 hidden-xs header_menu">
		        	<ul class="row">
		        		<li class="col-xs-4 scroller" name="to_focus">Focus</li>
		        		<li class="col-xs-4 scroller" name="to_cute">Slide</li>
		        		<li class="col-xs-4 scroller" name="to_form">Form</li>
		        	</ul>
		        </nav>
	        </div>
        </div>
    </header>
    <div class="main">
    	<div class="container">
			<div class="main_top">
				<i class="fa fa-fighter-jet fa-3x" aria-hidden="true">THIS IS SAMPLE SITE</i>
				
			</div>
			<div class="main_text">
				<p><?php for($i=0;$i!=30;$i++)echo "sample text.";?></p>
			</div>
			<div class="container">
				<div class="row main_showcase ">
					<div class="main_showcase_img col-xs-12 col-sm-6">
						<img src="images\topcat.jpg" class="img-thumbnail" alt="sample cat">
					</div>
					<div class="main_showcase_text col-xs-12 col-sm-6">
						<h2>
							<u class="slidetext">THIS</u>  <br></br>
							<mark class="slidetext">is</mark>  <br></br>
							<s class="slidetext">THE</s>  <br></br>
							<strong class="slidetext">Sample</strong>  <br></br>
							<em class="slidetext">Cat.</em>
						</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="main_back-focus">
			<div class="main_back-focus_text">
				<i class="fa fa-hand-o-right focus_text" aria-hidden="true">Focus</i>
			</div>
			<div class="main_back-focus_box container">
				<div class="row">
					<div class="box col-sm-offset-2 col-sm-4 col-xs-offset-2 col-xs-5"><i class="fa-2x fa fa-play-circle-o" aria-hidden="true"> LifeWork</i></div>
					<div class="box col-sm-offset-7 col-sm-4 col-xs-offset-2 col-xs-5"><i class="fa-2x fa fa-star-o" aria-hidden="true"> Experience</i></div>
					<div class="box col-sm-offset-2 col-sm-4 col-xs-offset-2 col-xs-5"><i class="fa-2x fa fa-handshake-o" aria-hidden="true"> Friends</i></div>
					<div class="box col-sm-offset-7 col-sm-4 col-xs-offset-2 col-xs-5"><i class="fa-2x fa fa-grav" aria-hidden="true"> Challenger</i></div>
				</div>
			</div>
			<div class="main_back-focus_under">
				<i class="fa-3x fa fa-hand-o-down" aria-hidden="true"></i>
			</div>
		</div>
		<div class="main_focus_items row">
			<div class="main_foucsL col-sm-12">
				<div class="object col-sm-6 col-xs-12">
					<h2>Life Works <i class=" fa fa-hand-o-right" aria-hidden="true"></i></h2> 
				</div>
				<div class="space_R col-sm-6 col-xs-12">
					<div class="space_box">
						<h2>Focus</h2>
						<p class="hover_to_show">any content</p>
					</div>
				</div>
			</div>
			<div class="item main_foucsR col-sm-12 col-xs-12">
				<div class="object col-sm-6 col-sm-push-6 col-xs-12">
					<h2><i class="fa fa-hand-o-left" aria-hidden="true"> Experience</i></h2>
				</div>
				<div class="space_L col-sm-6 col-sm-pull-6 col-xs-12">
					<div class="space_box">
						<h2>Focus</h2>
						<p  class="hover_to_show">any content</p>
					</div>
				</div>
				
			</div>
			<div class="item main_foucsL col-sm-12 col-xs-12">
				<div class="object col-sm-6 col-xs-12">
					<h2>Friends <i class=" fa fa-hand-o-right" aria-hidden="true"></i></h2> 
				</div>
				<div class="space_R col-sm-6 col-xs-12">
					<div class="space_box">
						<h2>Focus</h2>
						<p class="hover_to_show">any content</p>
					</div>
				</div>
			</div>
			<div class="item main_foucsR col-sm-12 col-xs-12">
				<div class="object col-sm-6 col-sm-push-6 col-xs-12">
					<h2><i class=" fa fa-hand-o-left" aria-hidden="true"> Challenge</i></h2>
				</div>
				<div class="space_L col-sm-6 col-sm-pull-6 col-xs-12">
					<div class="space_box">
						<h2>Focus</h2>
						<p class="hover_to_show">any content</p>
					</div>
				</div>
				
			</div>
		</div>
		<div class="main_focus_items_under"></div>
		
		<!-- code from https://v4-alpha.getbootstrap.com/components/carousel/ -->
		<div class="carousel_section container">
			<div class="carousel_title">
				<h2> <i class="fa fa-heart-o" aria-hidden="true"> <em>Cute</em></i></h2>
			</div>
			<div id="carousel_01" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			        <li data-target="#carousel_01" data-slide-to="0" class="active"></li>
			        <li data-target="#carousel_01" data-slide-to="1"></li>
			        <li data-target="#carousel_01" data-slide-to="2"></li>
			    </ol>
			    <div class="carousel-inner">
			        <div class="item active">
			            <img src="images/topcat.jpg" alt="サンプル画像１" >
			        </div>
			        <div class="item">
			            <img src="images/topcat.jpg" alt="サンプル画像２" >
			        </div>
			         <div class="item">
			            <img src="images/topcat.jpg" alt="サンプル画像３" >
			        </div>
			    </div>
			    <a class="left carousel-control" href="#carousel_01" role="button" data-slide="prev">
		    		<span class="glyphicon glyphicon-chevron-left"></span>
			    </a>
			    <a class="right carousel-control" href="#carousel_01" role="button" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right"></span>
			    </a>
			</div>
		</div>
		
		
		<div class="main_form container">
			<div class="main_form_text">
				<h2>form</h2>
			</div>
		    <form>
		        <div class="form-group">
		            <label><i class="fa fa-user" aria-hidden="true"></i> Your name</label>
		            <input type="text" name="name" class="form-control">
		            
		        </div>
		        <div class="form-group">
		            <label><i class="fa fa-envelope" aria-hidden="true"></i> e-mail</label>
		            <input type="text" name="email" class="form-control">
		        </div>
		        <div class="form-group">
		            <label><i class="fa fa-commenting-o" aria-hidden="true"></i> comment</label>
		            <textarea type="text" name="comment" rows="4" class="form-control">			            </textarea>
		        </div>
		        <div class="checkbox">
		            <label>
		                <input type="checkbox">accept
		            </label>
		        </div>
		        <button type="submit">
		        	<i class="fa fa-paper-plane" aria-hidden="true"></i> Send
		        	</button>
		    </form>
		</div>
    </div>
    <footer>
    	<div class="footer_container">
    		<div class="row">
				<icon class="col-sm-offset-3 col-sm-1 col-xs-offset-1 col-xs-1">
					<a href="https://ja.wikipedia.org/wiki/Twitter"><i class="fa-2x fa fa-twitter-square" aria-hidden="true"></i></a>
				</icon>
		    	<icon class="col-sm-1 col-xs-1">
		    		<a href="https://ja.wikipedia.org/wiki/Facebook"><i class="fa-2x fa fa-facebook-square" aria-hidden="true"></i></a>
		    	</icon>
				<icon class="col-sm-1 col-xs-1">
					<a href="https://ja.wikipedia.org/wiki/YouTube"><i class="fa-2x fa fa-youtube-square" aria-hidden="true"></i></a>
				</icon>
        		<div class="footer_right col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-3">
        			<p>Site by NYRIOkun </p>
    			</div>
    			<icon class="col-sm-1 col-xs-1">
    				<i class="fa-2x fa fa-hand-pointer-o scroller" name="to_top" aria-hidden="true"></i>
    			</icon>
    		</div>
    	</div>

    </footer>
    </div>
    <!--
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    -->
    <script type="text/javascript" src="js/panel.js"></script>
</body>
</html>