<?php include ('/var/www/html/include/registration_checker.php'); ?>


  



  



  
  



<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Quiz: How Many of the 100 Very Best Restaurants in Washington Have You Eaten At? | Washingtonian</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/apple-touch-icon-57x57-precomposed.png"/>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <meta http-equiv="cleartype" content="on">

  
    
    <link rel="stylesheet" href="/responsive/normalize.css">
    <link rel="stylesheet" href="/responsive/blogs.css">
    <link rel="stylesheet" href="/responsive/footer.css">
    <link rel="stylesheet" href="/responsive/fonts/font-awesome/css/font-awesome.min.css">
    
    
  

  
  <meta name="Description" content="How many have you eaten at?" />

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
      _gaq.push(['_setCustomVar', 3, 'Month', '2015-08', 3]);
      _gaq.push(['_setCustomVar', 4, 'Day', '2015-08-14', 3]);
      _gaq.push(['_setCustomVar', 5, 'Entry ID', '140913', 3]);
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
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
        
          case $score >= intval('100'): $title = 'I get paid to eat for a living.'; break;
        
          case $score >= intval('080'): $title = 'My personal challenge every year is eating my way through this list. '; break;
        
          case $score >= intval('060'): $title = 'Food is my passion (and also my expense account knows no bounds).   '; break;
        
          case $score >= intval('040'): $title = 'I just added a new hole to my belt. '; break;
        
          case $score >= intval('020'): $title = 'Places like Rose’s Luxury are great, but I save \'em for special occasions. '; break;
        
          case $score >= intval('001'): $title = 'I pretty much frequent only José Andrés’s restaurants.   '; break;
        
      }
    
    if( isset( $score ) ){
  ?>
    <meta property="og:type" content="washingtonian:quiz">
    <meta property="og:title" content="<?php echo $title; ?>">
    
      <meta property="og:image" content="http://www.washingtonian.com/quizzes/images/2015.08.11.VBR-quiz-ledeimg-FINAL-635.jpg" />
    
    
    <meta property="og:description" content="">
  <?php } else { ?>
  
    
  <meta property="og:title" content="QUIZ: How Many of Washington's 100 Very Best Restaurants Have You Tried? " />
  <meta property="og:url" content="http://www.washingtonian.com/quizzes/2015/08/how-many-of-the-100-very-best-restaurants-in-washington-dc-have-you-eaten-at.php"/>
  <meta property="og:site_name" content="Washingtonian">
  <meta property="og:type" content="article"/>
  <meta property="article:published_time" content="2015-08-14">
  <meta property="og:description" content="The homework for this quiz is so worth it." />
  
  <meta property="og:image" content="http://www.washingtonian.com/quizzes/images/2015.08.11.VBR-quiz-ledeimg-FINAL-1215.jpg" />

  <?php } ?>
  <!-- end custom open graph tags -->


    <meta name="description" content="">
    <link rel="prev" href="http://www.washingtonian.com/quizzes/2015/07/how-many-of-dcs-state-streets-have-you-visited.php" title="How Many of DC's State Streets Have You Visited?" />
    <link rel="next" href="http://www.washingtonian.com/quizzes/2015/08/quiz-how-many-of-these-charming-small-towns-near-washington-dc-have-you-been-to.php" title="Quiz: How Many of These Charming Small Towns Near DC Have You Been To?" />
  
  
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
    <h1 class="title">Quiz: How Many of the 100 Very Best Restaurants in Washington Have You Eaten At?</h1>
    
    <div class="byline">      By                                        <a href="/authorprofiles/washingtonian-staff.php">Washingtonian Staff</a>    |     August 14, 2015</div><!-- .byline -->
    <div class="story-content">
      <img src="//www.washingtonian.com/quizzes/assets_c/2015/08/2015.08.11.VBR-quiz-ledeimg-FINAL-1215-1-thumb-995xauto-97329.jpg" class="mt-image-center wide" />
            
            

          
        
        

      

    
  



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

        
        <style type="text/css"><!--
li {text-transform: none !important;}
input {background-color: #00A0E9  !important; font-family: source_sans_problack !important;}
#results h2 {color: #00A0E9  !important;}
--></style>
        
        
          <form id="quiz" action="javascript:score();">
    <ul>
      
        
        <li><input type="checkbox" class="styled" /><div>Komi <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-1-komi.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Minibar <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-2-minibar.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rose's Luxury <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-3-roses-luxury.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Fiola Mare <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-4-fiola-mare.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rasika <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-5-rasika.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Little Serow <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-6-little-serow.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>The Red Hen <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-7-the-red-hen.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Fiola <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-8-fiola.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>The Restaurant at Patowmack Farm <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-9-the-restaurant-at-patowmack-farm.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Vin 909 Winecafé <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-10-vin-909-winecafe.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Seasonal Pantry <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-11-seasonal-pantry.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Del Campo <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-12-del-campo.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Casa Luca <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-13-casa-luca.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Le Diplomate <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-14-le-diplomate.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Central Michel Richard <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-15-central-michel-richard.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ananda <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-16-ananda.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Mintwood Place <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-17-mintwood-place.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Plume <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-18-plume.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Izakaya Seki <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-19-izakaya-seki.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Marcel's <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-20-marcels.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Woodberry Kitchen <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-21-woodberry-kitchen.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>The Inn at Little Washington <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-22-the-inn-at-little-washington.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Estadio <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-23-estadio.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Kapnos <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-24-kapnos.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Thai Taste by Kob <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-25-thai-taste-by-kob.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Sushi Capitol <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-26-sushi-capitol.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Jaleo <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-27-jaleo.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Obelisk <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-28-obelisk.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Table <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-29-table.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>DGS Delicatessen <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-30-dgs-delicatessen.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>2 Amys <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-31-2-amys.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Crane & Turtle <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-32-crane-turtle.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Osteria Morini <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-33-osteria-morini.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Zaytinya <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-34-zaytinya.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Gypsy Soul <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-35-gypsy-soul.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Baby Wale <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-36-baby-wale.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>The Bombay Club <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-37-the-bombay-club.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Daikaya <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-38-daikaya.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Corduroy <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-39-corduroy.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bangkok Golden <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-40-bangkok-golden.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Graffiato <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-41-graffiato.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bistro Bis <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-42-bistro-bis.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Green Pig Bistro <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-43-green-pig-bistro.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Sushi Sono <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-44-sushi-sono.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Cashion's Eat Place <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-45-cashions-eat-place.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Sushi Taro <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-46-sushi-taro.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rice Paper <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-47-rice-paper.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Etto <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-48-etto.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ruan Thai <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-49-ruan-thai.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Iron Gate <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-50-iron-gate.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Passage to India <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-51-passage-to-india.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ocopa <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-52-ocopa.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Pearl Dive Oyster Palace <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-53-pearl-dive-oyster-palace.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Water & Wall <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-54-water-wall.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Aggio <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-55-aggio.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ripple <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-56-ripple.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Lupo Verde <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-57-lupo-verde.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Brasserie Beck <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-58-brasserie-beck.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>G by Mike Isabella <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-59-g-by-mike-isabella.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ethiopic <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-60-ethiopic.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Poste <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-61-poste.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Doi Moi <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-62-doi-moi.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Kogiya <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-63-kogiya.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>The Majestic <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-64-the-majestic.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>La Limeña <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-65-la-limena.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Toki Underground <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-66-toki-underground.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>L'Auberge Chez François and Jacques' Brasserie <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-67-lauberge-chez-francois-and-jacques-brasserie.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Nostos <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-68-nostos.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Saba <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-69-saba.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>The Partisan <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-70-the-partisan.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>PassionFish <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-71-passionfish.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Equinox <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-72-equinox.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Proof <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-73-proof.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Mokomandy <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-74-mokomandy.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Restaurant Eve <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-75-restaurant-eve.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Trapezaria <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-76-trapezaria.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bar Pilar <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-77-bar-pilar.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Birch & Barley <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-78-birch-barley.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ghibellina <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-79-ghibellina.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Tico <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-80-tico.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rogue 24 <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-81-rogue-24.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>DBGB Kitchen and Bar <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-82-dbgb-kitchen-and-bar.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Johnny’s Half Shell <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-83-johnnys-half-shell.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rappahannock Oyster Bar <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-84-rappahannock-oyster-bar.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Sushiko <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-85-sushiko.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Liberty Tavern <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-86-liberty-tavern.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Republic <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-87-republic.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Petit Louis Bistro <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-88-petit-louis-bistro.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Cava Mezze <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-89-cava-mezze.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Et Voila! <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-90-et-voila.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Ris <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-91-ris.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Béarnaise <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-92-bearnaise.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Kaz Sushi Bistro <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-93-kaz-sushi-bistro.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Montmartre <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-94-montmartre.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Rus Uz <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-95-rus-uz.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Westend Bistro <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-96-westend-bistro.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>The Fainting Goat <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-97-the-fainting-goat.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Compass Rose <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-98-compass-rose.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>BlackSalt <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-99-blacksalt.php">[read more]</a></div></li>
      
        
        <li><input type="checkbox" class="styled" /><div>Bourbon Steak Lounge <a href="http://www.washingtonian.com/restaurantreviews/100-very-best-restaurants-2015-no-100-bourbon-steak-lounge.php">[read more]</a></div></li>
      
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
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
          
            
          
          
        
        
          case (score >= parseInt('100')): return 'I get paid to eat for a living.';
        
          case (score >= parseInt('080')): return 'My personal challenge every year is eating my way through this list. ';
        
          case (score >= parseInt('060')): return 'Food is my passion (and also my expense account knows no bounds).   ';
        
          case (score >= parseInt('040')): return 'I just added a new hole to my belt. ';
        
          case (score >= parseInt('020')): return 'Places like Rose’s Luxury are great, but I save \'em for special occasions. ';
        
          case (score >= parseInt('001')): return 'I pretty much frequent only José Andrés’s restaurants.   ';
        
      }
    
  }
  function score(){
    $('#quiz input[type=submit]').attr('value','Update Your Score');
    var score = $('#quiz :checked').size();
    $('#results .score').text( score );
    $('#results .title').text( getTitle( score ) );

    var url = encodeURIComponent( baseURL( document.URL ) );
    var tweeturl = $('#results .twitter').data( 'orighref' );
    
    var text = encodeURIComponent( '' );
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
    <span id="comments_bubble"><script type='text/javascript' src='//disqus.com/forums/washingtonian/get_num_replies_for_entry.js?url=http://www.washingtonian.com/quizzes/2015/08/how-many-of-the-100-very-best-restaurants-in-washington-dc-have-you-eaten-at.php'></script><noscript>View</noscript></span>
    <div style="clear:both;"></div>
    <div id="disqus">
                  <div id="disqus_thread"></div>
            <div style="display:none;" id="disqus_post_title">Quiz: How Many of the 100 Very Best Restaurants in Washington Have You Eaten At?</div>
            <div style="display:none;" id="disqus_post_message"><style type=\"text/css\"><!--\nli {text-transform: none !important;}\ninput {background-color: #00A0E9  !important; font-family: source_sans_problack !important;}\n#results h2 {color: #00A0E9  !important;}\n--></style></div>
            <script type="text/javascript">
                var disqus_domain = 'disqus.com';
                var disqus_shortname = '';
                var disqus_url = 'http://www.washingtonian.com/quizzes/2015/08/how-many-of-the-100-very-best-restaurants-in-washington-dc-have-you-eaten-at.php';
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
  $entry_id = 140913;
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


