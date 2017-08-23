<!DOCTYPE html>
<html lang="en">
<head>
<title>search result</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/search-form.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="search/search.js"></script>
<script src="js/jquery.mobilemenu.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script> 

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<header>
    <div class="box1 clearfix">
        <div class="chat_box">
            <span class="fa fa-comments"></span>
            <div class="extra-wrap">
                <a href="#">live chat</a>
                <p>We are here to help you</p>
            </div>
        </div>
        <div class="follow_box">
            <div class="box">
                <a href="#">login</a>
                <a href="#">help</a>
                <a href="#">newsletter signup</a>
            </div>
            <ul class="follow_icon1">
                <li><a href="#" class="fa fa-google-plus"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-pinterest"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
            </ul>
        </div>
    </div>
    <div class="box2 clearfix">
        <h1 class="navbar-brand navbar-brand_ wow fadeInLeft" data-wow-delay="0.2s"><a href="index.html"><img src="img/logo.png" alt="logo"></a></h1>
        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
            <ul class="nav sf-menu clearfix">
                <li><a href="index.html">home</a></li>
                <li class="sub-menu"><a href="index-1.html">Our Range</a><span class="fa fa-angle-down"></span>
                    <ul class="submenu">
        				<li><a href="#">Quisque nulla</a></li>
        				<li><a href="#">Vestibulum libero nis</a><span class="fa fa-angle-right"></span>
                            <ul class="submenu">
                                <li><a href="#">Do eiusmod</a></li>
                                <li><a href="#">Incididunt ut</a></li>
                                <li><a href="#">Et dolore</a></li>
                                <li><a href="#">Ut enim ad minim</a></li>
                              </ul> 
                        </li>
        				<li><a href="#">Porta vel scelerisque eget</a></li>
                        <li><a href="#">Malesuada at neque</a></li>
                        <li><a href="#">Malesuada at neque</a></li>
        			</ul>
                </li>
                <li><a href="index-2.html">Camping Equipment</a></li>
                <li><a href="index-3.html">about us</a></li>
                <li><a href="index-4.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="js-search flt__l flt__n-xl">
        	<div class="toggle"></div>
        	<form id="search" class="search-form" action="search.php" method="GET" accept-charset="utf-8">
        		<label class="input" for="in">
        			<input id="in" type="text" name="s" value="Search" onblur="if(this.value == '') { this.value='Search'}" onfocus="if (this.value == 'Search') {this.value=''}">
                    <a href="#" onClick="document.getElementById('search').submit()" class="js-find"></a>
        		</label>
        	</form>
        </div>
    </div>
</header>
<div class="content indent">
    <!--content-->
    <div class="container">
        <h2>Search result:</h2>
        <div id="search-results"></div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <p class="wow fadeInUp">Camper trailer hire co. &copy; <em id="copyright-year"></em> <br><a href="index-5.html">Privacy Policy</a>. Terms of use</p>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>