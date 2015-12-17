<?php include ('/var/www/html/include/registration_checker.php'); ?>


  



  



  
  



<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Quiz: How many of the best cheap restaurants in Washington, DC have you eaten at? | Washingtonian</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/apple-touch-icon-57x57-precomposed.png"/>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <meta http-equiv="cleartype" content="on">

  
    
    <link rel="stylesheet" href="/responsive/normalize.css">
    <link rel="stylesheet" href="/responsive/blogs.css">
    <link rel="stylesheet" href="/responsive/footer.css">
    <link rel="stylesheet" href="/responsive/fonts/font-awesome/css/font-awesome.min.css">
    
    
  

  
  <meta name="Description" content="See how you stack up." />

<meta name="robots" content="all" />  
<meta name="google-site-verification" content="vvVTsFEd7-c5BCuE1p4P_yz2s99Ensy3QhC-odFrCjQ" /> 
<meta property="fb:admins" content="100002475007199" />


  
    
      
    
    
  

  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="/responsive/blog.js"></script>
  <script src="/responsive/footer.js"></script>
  <script src="/responsive/browser-selector.js"></script>
  <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=washaddthis" async="async"></script>
  
  <!-- AD UNITS -->
<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
  var gads = document.createElement('script');
  gads.async = true;
  gads.type = 'text/javascript';
  var useSSL = 'https:' == document.location.protocol;
  gads.src = (useSSL ? 'https:' : 'http:') + 
  '//www.googletagservices.com/tag/js/gpt.js';
  var node = document.getElementsByTagName('script')[0];
  node.parentNode.insertBefore(gads, node);
  })();
</script>




<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/1026476/mom_popup_640x480', [640, 480], 'mom_popup_640x480').addService(googletag.pubads());             
    
      googletag.defineOutOfPageSlot('/1026476/Interstitial_ScreenShiftFullPage_OutOfPage', 'div-gpt-ad-1440104610263-0').addService(googletag.pubads()); 
    
    
      
  
    googletag.defineSlot('/1026476/ROS_MediumRectangle_300x250', [300, 250], 'ROS_MediumRectangle_300x250').addService(googletag.pubads());
  
    googletag.defineSlot('/1026476/News_Leaderboard_728x90', [728, 90], 'News_Leaderboard_728x90').addService(googletag.pubads());
  
    googletag.defineSlot('/1026476/ROS_Bottom_MediumRectangle', [300, 250], 'ROS_Bottom_MediumRectangle').addService(googletag.pubads());
  
    googletag.defineSlot('/1026476/News_Tile_Right_180x90', [180, 90], 'News_Tile_Right_180x90').addService(googletag.pubads());
  
    googletag.defineSlot('/1026476/News_Tile_Left_180x90', [180, 90], 'News_Tile_Left_180x90').addService(googletag.pubads());
  
    googletag.defineSlot('/1026476/Sitewide_Interstitial_640x480', [640, 480], 'Sitewide_Interstitial_640x480').addService(googletag.pubads());
  
    googletag.defineSlot('/1026476/News_HalfPage_300x600', [300, 600], 'News_HalfPage_300x600').addService(googletag.pubads());
  
    googletag.defineSlot('/1026476/News_CapitalComment_Mobile_Leaderboard_320x99', [300, 250], 'News_CapitalComment_Mobile_Leaderboard_320x99').addService(googletag.pubads());
  

    
    
      
      
  

    
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>


  <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setCustomVar', 1, 'Author', 'Washingtonian Staff', 3]);
      _gaq.push(['_setCustomVar', 2, 'Year', '2015', 3]);
      _gaq.push(['_setCustomVar', 3, 'Month', '2015-06', 3]);
      _gaq.push(['_setCustomVar', 4, 'Day', '2015-06-19', 3]);
      _gaq.push(['_setCustomVar', 5, 'Entry ID', '139875', 3]);
    </script>
  



  
    <link rel="alternate" type="application/atom+xml" title="Washingtonian" href="http://feeds.feedburner.com/WashingtonianBlogs" />
    <link rel="alternate" type="application/rss+xml" title="Washingtonian Blogs" href="http://www.washingtonian.com/blogs/rss.xml" />
    
      <link rel="alternate" type="application/rss+xml" title="Washingtonian Quizzes" href="http://www.washingtonian.com/quizzes/rss.xml" />
    
    <script type="text/javascript" src="//www.washingtonian.com/quizzes/mt.js"></script>
  
    <!-- start custom open graph tags -->
  <?php
    $title = '';
    if( isset( $_GET['score'] ) ) $score = $_GET['score'];
    
      switch( true ){
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
        
          case $score >= intval('100'): $title = 'Hello, Todd Kliman.'; break;
        
          case $score >= intval('080'): $title = 'I am an eating machine.'; break;
        
          case $score >= intval('060'): $title = 'I probably need bigger pants.'; break;
        
          case $score >= intval('040'): $title = 'I am a cheap DC foodie.'; break;
        
          case $score >= intval('020'): $title = 'I must not have a car to go to the burbs.'; break;
        
          case $score >= intval('001'): $title = 'I am a tourist.'; break;
        
      }
    
    if( isset( $score ) ){
  ?>
    <meta property="og:type" content="washingtonian:quiz">
    <meta property="og:title" content="<?php echo $title; ?>">
    
      <meta property="og:image" content="http://www.washingtonian.com/quizzes/images/cheapeats_quiz_image.jpg" />
    
    
    <meta property="og:description" content="I got <?php echo $score; ?> out of 100 on the DC Cheap Eats Quiz. How many of the DC areas best cheap restaurants have you eaten at?">
  <?php } else { ?>
  
    
  <meta property="og:title" content="Quiz: How Many Cheap Eats Restaurants Have You Eaten At?" />
  <meta property="og:url" content="http://www.washingtonian.com/quizzes/2015/06/how-many-of-washington-dcs-best-cheap-restaurants-have-you-tried.php"/>
  <meta property="og:site_name" content="Washingtonian">
  <meta property="og:type" content="article"/>
  <meta property="article:published_time" content="2015-06-19">
  <meta property="og:description" content="See how you stack up." />
  
  <meta property="og:image" content="http://www.washingtonian.com/quizzes/images/cheapeats_quiz_image-2.jpg" />

  <?php } ?>
  <!-- end custom open graph tags -->


    <meta name="description" content="">
    
    <link rel="next" href="http://www.washingtonian.com/quizzes/2015/06/how-many-adventurous-dishes-from-our-cheap-eats-restaurants-are-you-brave-enough-to-try.php" title="Quiz: Are you an adventurous eater?" />
  
  
  <script type="text/javascript">
    //<![CDATA[[
    $SA={s:15014,asynch:1};
    (function(){
        var sa = document.createElement("script"); sa.type = "text/javascript"; sa.async = true;
        sa.src = ("https:" == document.location.protocol ? "https://" + $SA.s + ".sa" : "http://" + $SA.s + ".a") + ".siteapps.com/" + $SA.s + ".js";
        var t = document.getElementsByTagName("script")[0]; t.parentNode.insertBefore(sa, t);
    })();
    //]]>
  </script>
  <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-1860879-1']);
    _gaq.push(['_trackPageview']);  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body>

<div id="courtesy-header">
  <div class="c-menu full-width">
    <a href="http://www.washingtonian.com/weddings">Bride &amp; Groom</a>
    <a href="http://www.washingtonian.com/mom/">MOM</a>
    <a href="https://www.washingtonian.com/magazine/subscribe/?src=r-header">Subscribe</a>
  </div><!-- .c-menu -->
</div><!-- #courtesy-header -->

  <!-- /1026476/Interstitial_ScreenShiftFullPage_OutOfPage -->
  <div id='div-gpt-ad-1440104610263-0' style="background: #ECECEC;">
    <script type='text/javascript'>
      googletag.cmd.push(function() { googletag.display('div-gpt-ad-1440104610263-0'); });
    </script>
  </div>

<div id="ad-top" class="ad-unit">
  <img src="/responsive/advertisement.png" width="9" class="inline desktop" />

  
    
      <div id="News_CapitalComment_Leaderboard_728x90" class="inline desktop">
        <script>googletag.cmd.push(function() { googletag.display('News_CapitalComment_Leaderboard_728x90'); });</script>
      </div>
    
  


  <span class="advertisement mobile">Advertisement</span><br />

  
    
      <div id="News_CapitalComment_Mobile_Leaderboard_320x99" class="inline mobile">
        <script>googletag.cmd.push(function() { googletag.display('News_CapitalComment_Mobile_Leaderboard_320x99'); });</script>
      </div>
    
  


</div><!-- #ad-top -->
<header id="flyout-menu">
</header><!-- #flyout-menu -->
<header id="top-branding">
  <div class="full-width">
    <div class="inline menu-toggle">
      <span>menu</span>
      <a href="#" id="toggle"><i class="fa fa-bars"></i></a>
    </div><!-- .menu-toggle -->
    <a href="/"><img src="/images/wash50.png" class="site-logo" /></a>
    <ul id="site-controls" class="right inline">
      <li class="dropper">
        <a href="#"><i class="fa fa-cog"></i></a>
        <div id="web-login">
          <h4>Sign in to Washingtonian.com</h4>
          <p>
            A Washingtonian.com account will allow you to manage services offered through our website.
            <span style="display:block; height:6px;"></span>
            
            
              <?php 
                $file = '/var/www/html/member/library/Am/Lite.php';
                if( file_exists($file) && is_readable($file) && include_once($file) ) {
                  if(Am_Lite::getInstance()->isLoggedIn()) {
                  echo "<a href=\"/member/member/\" class=\"memberBtn\">Welcome, ".Am_Lite::getInstance()->getUsername()."</a>";
              ?>
                <a href="/member/login/logout" class="memberBtn">Log Out</a>
              <?php
                  } else {
                ?>
            
                <a href="/member/member/index/" class="memberBtn">Go to Member Login Page</a>
                <a href="/member/signup/index/c/create_account" class="memberBtn">Create a New Account</a>
            
              <?php
                  }
                }
              ?>
            
          </p>
        </div>
      </li>
      <li class="desktop"><a href="http://www.facebook.com/washingtonian"><i class="fa fa-facebook"></i></a></li>
      <li class="desktop"><a href="http://www.twitter.com/washingtonian"><i class="fa fa-twitter"></i></a></li>
      <li class="desktop"><a href="http://instagram.com/washingtonianmag"><i class="fa fa-instagram"></i></a></li>
      <li class="desktop"><a href="http://www.pinterest.com/washingtonians"><i class="fa fa-pinterest"></i></a></li>
      
      <li class="dropper">
        <a href="#"><i class="fa fa-search"></i></a>
        <div id="search-form">
          <form name="qs" action="/search_site/finder.php">
            <div id="search-field">
              <input class="search" id="searchField" name="search" value="Search the Washingtonian" onblur="clearText(this);" onfocus="clearText(this);" type="text">
            </div>
            <div id="search-button">
              <input name="btnG" id="searchButton" src="/images/search_button_2.png" type="image">
            </div>
          </form>
        </div><!-- #search-form -->
      </li>
    </ul><!-- #site-controls -->
  </div><!-- .full-width -->
</header><!-- #top-branding -->
<div id="finder-tools">
  <div class="full-width">
    <h4 class="inline">Find Local</h4>
    <ul class="inline">
      <i class="fa fa-arrow-circle-down"></i>
      <li title="http://washingtonian.com/restaurantreviews/" class="active-item"><a href="javascript:void(0);">Restaurants</a></li>
      <li title="http://washingtonian.com/locations/finder.php?&type=bar"><a href="javascript:void(0);">Bars &amp; Clubs</a></li>
      <li title="http://washingtonian.com/events/index.php"><a href="javascript:void(0);">Events</a></li>
      <li title="http://washingtonian.com/healthcare/finder.php?type=doctor"><a href="javascript:void(0);">Doctors</a></li>
      <li title="http://washingtonian.com/healthcare/finder.php?type=dentist"><a href="javascript:void(0);">Dentists</a></li>
      <li title="http://washingtonian.com/sections/neighborhood-guides/index.php"><a href="javascript:void(0);">Neighborhoods</a></li>
      <li title="http://washingtonian.com/locations/finder.php?&type=spa"><a href="javascript:void(0);">Spas</a></li>
      <li title="http://washingtonian.com/weddings/vendors/"><a href="javascript:void(0);">Wedding Vendor</a></li>
      <li title="http://washingtonian.com/packages/politics-personalities/top-lawyers-2013-2014/"><a href="javascript:void(0);">Lawyer</a></li>
      <li title="http://washingtonian.com/packages/work-family/washingtons-top-money-advisers-2014/"><a href="javascript:void(0);">Financial Planner</a></li>
      <li title="http://washingtonian.com/articles/style/great-hair-2012-60-good-salons-in-washington/"><a href="javascript:void(0);">Salon</a></li>
      <li title="http://washingtonian.com/homerepair/"><a href="javascript:void(0);">Home/Garden Contractor</a></li>
      <li title="http://washingtonian.com/petvendors/"><a href="javascript:void(0);">Pet Care &amp; Supplies</a></li>
    </ul><!-- END MENU OPTIONS -->
  </div><!-- .full-width -->
</div><!-- #finder-tools -->


<section id="main" class="full-width">
  
    <div class="left social-col">
  <div id="social-ad">
    <span class="advertisement block">Advertisement</span>

  
    
      <div id="News_CapitalComment_Tile_Left_180x90" class="inline desktop">
        <script>googletag.cmd.push(function() { googletag.display('News_CapitalComment_Tile_Left_180x90'); });</script>
      </div>
    
  


  </div><!-- #social-ad -->
  <div class="tools" style="margin-top: 20px;">
    <style>
.addthis_responsive_sharing .at-share-btn {
  width:180px;
}
.addthis_responsive_sharing a .label, .addthis_responsive_sharing a .label span {
  font-size: 14px;
  font-family: Arial;
  font-weight: bold;
}
.addthis_responsive_sharing a .label span {
  position: absolute;
  right: 10px;
}
    </style>
    <div class="addthis_responsive_sharing" style="width:180px;"></div>
    
  </div><!-- .tools -->
</div><!-- .social-col -->

  
  <article id="content-container">
    <h1 class="title">Quiz: How many of the best cheap restaurants in Washington, DC have you eaten at?</h1>
    
    <div class="byline">      By                                        <a href="/authorprofiles/washingtonian-staff.php">Washingtonian Staff</a>    |     June 19, 2015</div><!-- .byline -->
    <div class="story-content">
      <img src="//www.washingtonian.com/quizzes/assets_c/2015/06/cheapeats_quiz_image-3-thumb-995xauto-93725.jpg" class="mt-image-center wide" />
            
            <span class="mt-image-center">Photograph of DCity Smokehouse stacked sandwiches by Scott Suchman. Food styling by Lisa Cherkasky.</span>

          
        
        

      

    
  



      <div class="story left">
        
        <!-- on smaller screens, addthis + tile ad unit after lead img -->
        <div class="tablet other-tools">
          <span class="advertisement block">Advertisement</span>

  
    
      <div id="News_CapitalComment_Tile_Right_180x90" class="inline">
        <script>googletag.cmd.push(function() { googletag.display('News_CapitalComment_Tile_Right_180x90'); });</script>
      </div>
    
  


          <div class="addthis_custom_sharing" style="margin-bottom:20px;"></div>
        </div><!-- .mobile -->
        
          <style>
/*
  .story-content form, #results {
    margin:0 60px;
  }
*/
  #quiz-content ul {
    list-style-type: none;
    padding:0;
  }
  #quiz-content ul li:first-child {
    border-top: 1px solid #666;
  }
  #quiz-content ul li {
    border-bottom: 1px solid #666;
    text-transform: uppercase;
    line-height: 75px;
    margin:0;
    text-indent:0;
    font-size: 20px;
    overflow: auto;
    /*white-space: nowrap;*/
  }
  #quiz-content ul li div {
    padding:24px 0 19px 105px;
    line-height:29px;
  }
  #quiz-content .checkbox {
    width: 78px;
    height: 72px;
    padding: 0 10px 0 0;
    background: url(/responsive/images/checkbox.png) no-repeat;
    display: block;
    clear: left;
    float: left;
    margin-top: 2px;
    margin-left: 25px;
  }
  #results h2 {
    margin: 10px 0;
    color: #F2693F;
    font-size:30px;
    line-height: 30px;
    text-align: left;
    text-transform: uppercase;
  }
  #results p {
    margin: 10px 0;
    font-size: 20px;
    line-height: 20px;
    text-align: left;
  }
  #results h3 {
    margin: 10px 0;
    font-size:24px;
    line-height: 24px;
    text-align: left;
    font-weight: normal;
  }
  #results p a {
    text-align: center;
    text-transform: uppercase;
  }
  #quiz input[type=submit], #results .share a {
    display:inline-block;
    font-size: 20px;
    width:300px;
    height:44px;
    text-transform: uppercase;
    color:#fff;
    overflow:hidden;
    padding:12px 20px;
    text-decoration: none;
    box-sizing: content-box;
  }
  #quiz input[type=submit] {
    height:50px;
    background: #F2693F;
    border:0;
    xfont-weight: bold;
    margin:20px 44px;
  }
/*
  #results {
    padding:0 44px;
  }
  #results h3 {
    margin-top:30px;
  }
*/
  #results .share a img {
    width:auto;
    height:32px;
    position: relative;
    top: 6px;
  }
  #results .facebook {
    background: #3B5998;
  }
  #results .twitter {
    background: #55ACEE;
  }
</style>

<script>
/*

CUSTOM FORM ELEMENTS

Created by Ryan Fait
www.ryanfait.com

The only things you may need to change in this file are the following
variables: checkboxHeight, radioHeight and selectWidth (lines 24, 25, 26)

The numbers you set for checkboxHeight and radioHeight should be one quarter
of the total height of the image want to use for checkboxes and radio
buttons. Both images should contain the four stages of both inputs stacked
on top of each other in this order: unchecked, unchecked-clicked,
checked, checked-clicked.

You may need to adjust your images a bit if there is a slight vertical
movement during the different stages of the button activation.

The value of selectWidth should be the width of your select list image.

Visit http://ryanfait.com/ for more information.

*/

var checkboxHeight = "72";
var radioHeight = "72";
var selectWidth = "190";


/* No need to change anything after this */


document.write('<style type="text/css">input.styled { display: none; } select.styled { position: relative; width: ' + selectWidth + 'px; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style>');

var Custom = {
	init: function() {
		var inputs = document.getElementsByTagName("input"), span = Array(), textnode, option, active;
		for(a = 0; a < inputs.length; a++) {
			if((inputs[a].type == "checkbox" || inputs[a].type == "radio") && inputs[a].className.indexOf("styled") > -1) {
				span[a] = document.createElement("span");
				span[a].className = inputs[a].type;

				if(inputs[a].checked == true) {
					if(inputs[a].type == "checkbox") {
						position = "0 -" + (checkboxHeight*2) + "px";
						span[a].style.backgroundPosition = position;
					} else {
						position = "0 -" + (radioHeight*2) + "px";
						span[a].style.backgroundPosition = position;
					}
				}
				inputs[a].parentNode.insertBefore(span[a], inputs[a]);
				inputs[a].onchange = Custom.clear;
				if(!inputs[a].getAttribute("disabled")) {
					span[a].onmousedown = Custom.pushed;
					span[a].onmouseup = Custom.check;
				} else {
					span[a].className = span[a].className += " disabled";
				}
			}
		}
		document.onmouseup = Custom.clear;
	},
	pushed: function() {
		element = this.nextSibling;
		if(element.checked == true && element.type == "checkbox") {
			this.style.backgroundPosition = "0 -" + checkboxHeight*3 + "px";
		} else if(element.checked != true && element.type == "checkbox") {
			this.style.backgroundPosition = "0 -" + checkboxHeight + "px";
		}
	},
	check: function() {
		element = this.nextSibling;
		if(element.checked == true && element.type == "checkbox") {
			this.style.backgroundPosition = "0 0";
			element.checked = false;
		} else {
			if(element.type == "checkbox") {
				this.style.backgroundPosition = "0 -" + checkboxHeight*2 + "px";
			} else {
				this.style.backgroundPosition = "0 -" + radioHeight*2 + "px";
				group = this.nextSibling.name;
				inputs = document.getElementsByTagName("input");
				for(a = 0; a < inputs.length; a++) {
					if(inputs[a].name == group && inputs[a] != this.nextSibling) {
						inputs[a].previousSibling.style.backgroundPosition = "0 0";
					}
				}
			}
			element.checked = true;
		}
	},
	clear: function() {
		inputs = document.getElementsByTagName("input");
		for(var b = 0; b < inputs.length; b++) {
			if(inputs[b].type == "checkbox" && inputs[b].checked == true && inputs[b].className.indexOf("styled") > -1) {
				inputs[b].previousSibling.style.backgroundPosition = "0 -" + checkboxHeight*2 + "px";
			} else if(inputs[b].type == "checkbox" && inputs[b].className.indexOf("styled") > -1) {
				inputs[b].previousSibling.style.backgroundPosition = "0 0";
			} else if(inputs[b].type == "radio" && inputs[b].checked == true && inputs[b].className.indexOf("styled") > -1) {
				inputs[b].previousSibling.style.backgroundPosition = "0 -" + radioHeight*2 + "px";
			} else if(inputs[b].type == "radio" && inputs[b].className.indexOf("styled") > -1) {
				inputs[b].previousSibling.style.backgroundPosition = "0 0";
			}
		}
	}
}
window.onload = Custom.init;
</script>
<div id="quiz-content">

        
        
        
          <div class="midstory-ad">
            <span class="advertisement block">Advertisement</span>

  
    
      <div id="News_CapitalComment_MediumRectangle_300x250" class="block desktop ">
        <script>googletag.cmd.push(function() { googletag.display('News_CapitalComment_MediumRectangle_300x250'); });</script>
      </div>
    
  


          </div><!-- .midstory-ad -->
          <style type="text/css"><!--
input {background-color: #00A0E9 !important; font-family: source_sans_problack !important;}
#results h2 {color: #00A0E9 !important;}
--></style>
        
        
          <form id="quiz" action="javascript:score();">
    <ul>
      
        
        <li><input type="checkbox" class="styled" /><div>Abay Market (<a href="http://www.washingtonian.com/articles/cheap-eats/abay-market/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>A&J Restaurant (<a href="http://www.washingtonian.com/articles/cheap-eats/aj-restaurant/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Amoo's Restaurant (<a href="http://www.washingtonian.com/articles/cheap-eats/amoos-restaurant/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Athena Pallas (<a href="http://www.washingtonian.com/articles/cheap-eats/athena-pallas/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bamian (<a href="http://www.washingtonian.com/articles/cheap-eats/bamian/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Banana Leaf (<a href="http://www.washingtonian.com/articles/cheap-eats/banana-leaf/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bangkok Golden (<a href="http://www.washingtonian.com/articles/cheap-eats/bangkok-golden/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bánh Mì DC Sandwich (<a href="http://www.washingtonian.com/articles/cheap-eats/banh-mi-dc-sandwich/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bayou Bakery (<a href="http://www.washingtonian.com/articles/cheap-eats/bayou-bakery/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Black Hog BBQ (<a href="http://www.washingtonian.com/articles/cheap-eats/black-hog-bbq/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Black Jack (<a href="http://www.washingtonian.com/articles/cheap-eats/black-jack/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bob's Shanghai 66 (<a href="http://www.washingtonian.com/articles/cheap-eats/bobs-shanghai-66/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bonchon (<a href="http://www.washingtonian.com/articles/cheap-eats/bonchon/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bon Fresco (<a href="http://www.washingtonian.com/articles/cheap-eats/bon-fresco/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bub and Pop's (<a href="http://www.washingtonian.com/articles/cheap-eats/bub-and-pops/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Cafe Divan (<a href="http://www.washingtonian.com/articles/cheap-eats/cafe-divan/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Cheesetique (<a href="http://www.washingtonian.com/articles/cheap-eats/cheesetique/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>China Bistro (<a href="http://www.washingtonian.com/articles/cheap-eats/china-bistro/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>China Jade (<a href="http://www.washingtonian.com/articles/cheap-eats/china-jade/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>China Star (<a href="http://www.washingtonian.com/articles/cheap-eats/china-star/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Cosmopolitan Grill (<a href="http://www.washingtonian.com/articles/cheap-eats/cosmopolitan-grill/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Cuba de Ayer (<a href="http://www.washingtonian.com/articles/cheap-eats/cuba-de-ayer/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Curry Leaf (<a href="http://www.washingtonian.com/articles/cheap-eats/curry-leaf/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Daikaya Ramen (<a href="http://www.washingtonian.com/articles/cheap-eats/daikaya-ramen/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>DCity Smokehouse (<a href="http://www.washingtonian.com/articles/cheap-eats/dcity-smokehouse/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>DGS Delicatessen (<a href="http://www.washingtonian.com/articles/cheap-eats/dgs-delicatessen/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Donburi (<a href="http://www.washingtonian.com/articles/cheap-eats/donburi/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Duck Chang's (<a href="http://www.washingtonian.com/articles/cheap-eats/duck-changs/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Eamonn's a Dublin Chipper (<a href="http://www.washingtonian.com/articles/cheap-eats/eamonns/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>El Catrachito (<a href="http://www.washingtonian.com/articles/cheap-eats/el-catrachito/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Elephant Jumps (<a href="http://www.washingtonian.com/articles/cheap-eats/elephant-jumps/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>El Pike (Pike Pizza) (<a href="http://www.washingtonian.com/articles/cheap-eats/el-pike-pike-pizza/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Enat (<a href="http://www.washingtonian.com/articles/cheap-eats/enat/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ethiopic (<a href="http://www.washingtonian.com/articles/cheap-eats/ethiopic/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Eyo Restaurant & Sports Bar (<a href="http://www.washingtonian.com/articles/cheap-eats/eyo-restaurant-sports-bar/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Frankly...Pizza! (<a href="http://www.washingtonian.com/articles/cheap-eats/frankly-pizza/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Full Key (<a href="http://www.washingtonian.com/articles/cheap-eats/full-key/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>G by Mike Isabella (<a href="http://www.washingtonian.com/articles/cheap-eats/g-by-mike-isabella/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Glen's Garden Market (<a href="http://www.washingtonian.com/articles/cheap-eats/glens-garden-market/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Gom Ba Woo (<a href="http://www.washingtonian.com/articles/cheap-eats/gom-ba-woo/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Hai Duong (<a href="http://www.washingtonian.com/articles/cheap-eats/hai-duong/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Haute Dogs & Fries (<a href="http://www.washingtonian.com/articles/cheap-eats/haute-dogs-fries/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Honey Pig (<a href="http://www.washingtonian.com/articles/cheap-eats/honey-pig/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Hong Kong Palace (<a href="http://www.washingtonian.com/articles/cheap-eats/hong-kong-palace/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Hunan Taste (<a href="http://www.washingtonian.com/articles/cheap-eats/hunan-taste/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Huong Viet Restaurant  (<a href="http://www.washingtonian.com/articles/cheap-eats/huong-viet-restaurant/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Indigo (<a href="http://www.washingtonian.com/articles/cheap-eats/indigo/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Izakaya Blue Ocean (<a href="http://www.washingtonian.com/articles/cheap-eats/izakaya-blue-ocean/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Jewel of India (<a href="http://www.washingtonian.com/articles/cheap-eats/jewel-of-india/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Just Jerk (<a href="http://www.washingtonian.com/articles/cheap-eats/just-jerk/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div> Kabob n Karahi (<a href="http://www.washingtonian.com/articles/cheap-eats/kabob-n-karahi/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Kabul Kabob House (<a href="http://www.washingtonian.com/articles/cheap-eats/kabul-kabob-house/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>KBQ Real Barbecue (<a href="http://www.washingtonian.com/articles/cheap-eats/kbq-real-barbeque/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Keren Restaurant (<a href="http://www.washingtonian.com/articles/cheap-eats/keren-restaurant/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Kogiya (<a href="http://www.washingtonian.com/articles/cheap-eats/kogiya/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>La Caraqueña (<a href="http://www.washingtonian.com/articles/cheap-eats/la-caraquena/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>La Limeña (<a href="http://www.washingtonian.com/articles/cheap-eats/la-limena/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>London Curry House (<a href="http://www.washingtonian.com/articles/cheap-eats/london-curry-house/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Lucy Ethiopian Restaurant (<a href="http://www.washingtonian.com/articles/cheap-eats/lucy-ethiopian-restaurant/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Mala Tang (<a href="http://www.washingtonian.com/articles/cheap-eats/mala-tang/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Mandalay (<a href="http://www.washingtonian.com/articles/cheap-eats/mandalay/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Mason's Famous Lobster Rolls (<a href="http://www.washingtonian.com/articles/cheap-eats/masons-famous-lobster-rolls/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Meats & Foods (<a href="http://www.washingtonian.com/articles/cheap-eats/meats-foods/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Mi Cuba Café (<a href="http://www.washingtonian.com/articles/cheap-eats/mi-cuba-cafe/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Mi La Cay (<a href="http://www.washingtonian.com/articles/cheap-eats/mi-la-cay/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Moa (<a href="http://www.washingtonian.com/articles/cheap-eats/moa/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Moby Dick House of Kabob (<a href="http://www.washingtonian.com/articles/cheap-eats/moby-dick-house-of-kabob/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Nainai's Noodle and Dumpling Bar (<a href="http://www.washingtonian.com/articles/cheap-eats/nainais-noodle-and-dumpling-bar/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Nha Trang (<a href="http://www.washingtonian.com/articles/cheap-eats/nha-trang/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Panda Gourmet (<a href="http://www.washingtonian.com/articles/cheap-eats/panda-gourmet/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Peter Chang (<a href="http://www.washingtonian.com/articles/cheap-eats/peter-chang/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Pho 88 (<a href="http://www.washingtonian.com/articles/cheap-eats/pho-88/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Pizzeria Orso (<a href="http://www.washingtonian.com/articles/cheap-eats/pizzeria-orso/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Plaka Grill (<a href="http://www.washingtonian.com/articles/cheap-eats/plaka-grill/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Potato Valley Cafe (<a href="http://www.washingtonian.com/articles/cheap-eats/potato-valley-cafe/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Punjabi Junction (<a href="http://www.washingtonian.com/articles/cheap-eats/punjabi-junction/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Pupatella (<a href="http://www.washingtonian.com/articles/cheap-eats/pupatella/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rabieng (<a href="http://www.washingtonian.com/articles/cheap-eats/rabieng/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ravi Kabob House I and II (<a href="http://www.washingtonian.com/articles/cheap-eats/ravi-kabob-house-i-and-ii/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Red Apron Butcher (<a href="http://www.washingtonian.com/articles/cheap-eats/red-apron-butcher/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rice Paper (<a href="http://www.washingtonian.com/articles/cheap-eats/rice-paper/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ruan Thai (<a href="http://www.washingtonian.com/articles/cheap-eats/ruan-thai/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rus Uz (<a href="http://www.washingtonian.com/articles/cheap-eats/rus-uz/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Saba (<a href="http://www.washingtonian.com/articles/cheap-eats/saba/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Samantha's (<a href="http://www.washingtonian.com/articles/cheap-eats/samanthas/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Sardi's (<a href="http://www.washingtonian.com/articles/cheap-eats/sardis/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Spice 6 (<a href="http://www.washingtonian.com/articles/cheap-eats/spice-6/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Sugar Palm Thai (<a href="http://www.washingtonian.com/articles/cheap-eats/sugar-palm-thai/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Sushi Yoshi (<a href="http://www.washingtonian.com/articles/cheap-eats/sushi-yoshi/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Taco Bamba (<a href="http://www.washingtonian.com/articles/cheap-eats/taco-bamba/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Taqueria el Mexicano (<a href="http://www.washingtonian.com/articles/cheap-eats/taqueria-el-mexicano/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Taqueria la Placita (<a href="http://www.washingtonian.com/articles/cheap-eats/taqueria-la-placita/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Thai Square (<a href="http://www.washingtonian.com/articles/cheap-eats/thai-square/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Thai Taste by Kob (<a href="http://www.washingtonian.com/articles/cheap-eats/thai-taste-by-kob/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Thip Khao (<a href="http://www.washingtonian.com/articles/cheap-eats/thip-khao/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Toki Underground (<a href="http://www.washingtonian.com/articles/cheap-eats/toki-underground/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Tortacos (<a href="http://www.washingtonian.com/articles/cheap-eats/tortacos/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Wiseguy NY Pizza (<a href="http://www.washingtonian.com/articles/cheap-eats/wiseguy-ny-pizza/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Woodlands (<a href="http://www.washingtonian.com/articles/cheap-eats/woodlands/index.php">learn more</a>)</div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ya Hala (<a href="http://www.washingtonian.com/articles/cheap-eats/ya-hala/index.php">learn more</a>)</div></li>
      
    </ul>
    <input type="submit" value="See Your Score" />
  </form>
  <div id="results" style="display:none;">
    <h2>Your score: <span class="score"></span> / 100</h2>
    <p><span class="title"></span></p>
    <h3>Share your score:</h3>
    <p class="share">
      <a href="javascript:shareOnFacebook();" class="facebook"><img src="/responsive/images/facebook.png" /> Share on Facebook</a>
      <a href="https://twitter.com/intent/tweet" data-orighref="https://twitter.com/intent/tweet" class="twitter"><img src="/responsive/images/twitter-white.png" /> Share on Twitter</a>
    </p>
  </div>

<script type="text/javascript" async src="//platform.twitter.com/widgets.js"></script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '341283662736445',
      xfbml      : false,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  function getTitle( score ){
    
      switch( true ){
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
        
          case (score >= parseInt('100')): return 'Hello, Todd Kliman.';
        
          case (score >= parseInt('080')): return 'I am an eating machine.';
        
          case (score >= parseInt('060')): return 'I probably need bigger pants.';
        
          case (score >= parseInt('040')): return 'I am a cheap DC foodie.';
        
          case (score >= parseInt('020')): return 'I must not have a car to go to the burbs.';
        
          case (score >= parseInt('001')): return 'I am a tourist.';
        
      }
    
  }
  function score(){
    $('#quiz input[type=submit]').attr('value','Update Your Score');
    var score = $('#quiz :checked').size();
    $('#results .score').text( score );
    $('#results .title').text( getTitle( score ) );

    var url = encodeURIComponent( baseURL( document.URL ) );
    var tweeturl = $('#results .twitter').data( 'orighref' );
    
    var text = encodeURIComponent( 'I got ' + score + ' out of 100 on the DC Cheap Eats Quiz. How many of the DC areas best cheap restaurants have you eaten at?' );
    $('#results .twitter').attr( 'href', tweeturl + '?text=' + text + '&url=' + url );

    $('#results').slideDown();
    var scroll_to = $('#results').offset().top + $('#results').height();
    $('html, body').animate({
        scrollTop: scroll_to
    }, 2000);
  }
  function shareOnFacebook(){
    var score = $('#quiz :checked').size();
    FB.ui({
      method: 'share_open_graph',
      action_type: 'washingtonian:share',
      action_properties: JSON.stringify({
        quiz: baseURL( document.URL ) + '?score=' + score
      })
    }, function(response){
      if (response && !response.error_code) {
        console.log('Posting completed.');
      } else {
        console.log('Error while posting.');
        console.log(response.error_code);
      }
    });
  }
  function baseURL( sourceURL ) {
    var parts = sourceURL.split('?');
    if( parts.length >= 2 ){
      return parts[0];
    } else {
      return sourceURL;
    }
  }
</script>
</div><!-- id="quiz-content" -->


        
        <!-- Twitter byline -->                        
        
        <i class="fa fa-caret-square-o-up scroll-top"></i>
        <div id="comments">
  <div id="comments_counter">
    <img src="/responsive/images/comments_text.svg" alt="Comments" />
    <span id="comments_bubble"><script type='text/javascript' src='//disqus.com/forums/washingtonian/get_num_replies_for_entry.js?url=http://www.washingtonian.com/quizzes/2015/06/how-many-of-washington-dcs-best-cheap-restaurants-have-you-tried.php'></script><noscript>View</noscript></span>
    <div style="clear:both;"></div>
    <div id="disqus">
                  <div id="disqus_thread"></div>
            <div style="display:none;" id="disqus_post_title">Quiz: How many of the best cheap restaurants in Washington, DC have you eaten at?</div>
            <div style="display:none;" id="disqus_post_message"></div>
            <script type="text/javascript">
                var disqus_domain = 'disqus.com';
                var disqus_shortname = '';
                var disqus_url = 'http://www.washingtonian.com/quizzes/2015/06/how-many-of-washington-dcs-best-cheap-restaurants-have-you-tried.php';
                var disqus_title = document.getElementById('disqus_post_title').innerHTML;
                var disqus_message = document.getElementById('disqus_post_message').innerHTML;
            </script>
            <script type="text/javascript" src="http://.disqus.com/embed.js"></script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=">comments powered by Disqus.</a></noscript>

    </div><!-- #disqus. this div added to provide toggle function -->
    <div style="clear:both;"></div>
    <img src="/responsive/images/comments_arrow.png" id="c_arrow" />
  </div>
</div><!-- comments -->


      </div><!-- .story -->
      
        <div id="right-col" class="right">
          <!-- AD UNIT -->
  <div class="box300 inline">
    <span class="advertisement block">Advertisement</span>

  
    
      <div id="News_CapitalComment_Lower_MediumRectangle_300x250" class="block desktop">
        <script>googletag.cmd.push(function() { googletag.display('News_CapitalComment_Lower_MediumRectangle_300x250'); });</script>
      </div>
    
  


  </div><!-- .box300 -->

          
          <div id="more-reads">
  <h4><span class="block">more from</span> Washingtonian</h4>
  <ul>
    <?php
      $include1 = '/var/www/html/responsive/sidebar_includes/more.html';
      include $include1;
      $include2 = '/var/www/html/responsive/sidebar_includes/magazine.html';
      $include3 = '/var/www/html/responsive/sidebar_includes/review.html';
      include $include3;
      $include4 = '/var/www/html/responsive/sidebar_includes/guide.html';
      include $include4;
      $include5 = '/var/www/html/responsive/sidebar_includes/more2.html';
      include $include5;
    ?>
  </ul>
</div><!-- #more-reads -->
        </div><!-- #right-col -->
      
    </div><!-- .story-content -->
    <div style="clear:both; height:45px;"></div>
  </article><!-- #content-container -->
</section><!-- #main -->
<?php
  include_once '/var/www/html/include/buffer/buffer.php';
  if( ! isset( $cache ) ) { $cache = new Buffer(); }
  $result = $cache->data( 'http://editorial.washingtonian.com/include/pop/?days=3&format=JSON&limit=30&password=bellyflop', 86400, '/var/www/html/include/buffer/cache' );
  $entry_id = 139875;
  $decoded = json_decode( $result, true );
  $counter = 0;
  if( count( $decoded ) > 0 ){
?>
<section id="read-wrapper">
  <section id="also-read" class="full-width">
    <h2>Most Popular on Washingtonian</h2>
    <?php
      }
      foreach( $decoded as $decode ){
        if( $counter > 8 ) { break; }
        // if( $decode['id'] !== $entry_id ){
        if( ! in_array( $decode['id'], $entries_on_page ) ){
          $entries_on_page[] = $decode['id'];
          $counter++;
    ?>
<div class="also-story inline <?php echo "num$counter"; ?>">
  <a href="<?php echo $decode['path']; ?>"><img src="<?php echo $decode['img']; ?>" /></a>
  <h3><a href="<?php echo $decode['path']; ?>"><?php echo $decode['title']; ?></a></h3>
</div><!-- .also-story -->
    <?php
        }
      }
      if( count( $decoded ) > 0 ){
    ?>
  </section><!-- #also-read -->
</section><!-- #read-wrapper -->
<?php
  }
?>



<?php include '/var/www/html/responsive/footer.html'; ?>


