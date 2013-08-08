<?
	$show_thumbs = "true";

	if ($this->router->class == "home")
	$show_thumbs = "false";
	
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="author" content="Dr Catherine Winslow">
    <? if (!empty($description)) { ?>
    <meta name="description" content="<?=$description?>">
    <? } ?>
    
    <meta http-equiv="cache-control" content="no-cache"> <!-- tells browser not to cache -->
    <meta http-equiv="expires" content="0"> <!-- says that the cache expires 'now' -->
    <meta http-equiv="pragma" content="no-cache"> <!-- says not to use cached stuff, if there is any -->
    
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    
   
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
    <![endif]-->
 
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/font.css">
    <link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="//use.typekit.net/fkd4pri.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<link href="css/allinone_thumbnailsBanner.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>    

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script src="js/rotator/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="js/rotator/allinone_thumbnailsBanner.js" type="text/javascript"></script>
<script src="js/rotator/reflection.js" type="text/javascript"></script>

<script src="/assets/bootstrap.min.js"></script>

<script>
		jQuery(function() {

			jQuery('#allinone_thumbnailsBanner_cool').allinone_thumbnailsBanner({
				skin: 'cool',
				defaultEffect: 'slideFromTop',
				autoPlay: 5,
				numberOfThumbsPerScreen:7,
				responsiveRelativeToBrowser: false,
				thumbsReflection:0,
				height: 300,
				responsive:true,
				origthumbsHolderWrapperH:121,
				thumbsWrapperMarginTop:0,
				autoHideThumbs: false,
				showAllControllers: true,
				showThumbs: <?=$show_thumbs?>
			});		
			
			
		});

/**/
</script>
  </head>
 
<body>


<div class="container-fluid">
<!-- Menu Area -->
<div class="main_menu_wrapper row-fluid">
  <div  class="main_menu_container">
      	
          <ul class="main_menu nav nav-tabs">
              	<li><a href="/">Home</a></li>
                  
                  <li class="dropdown">
                  	<a class="dropdown-toggle"  data-toggle="dropdown"href="#">Practice <b class="caret"></b></a>
                      	<ul class="dropdown-menu">
                            <li><a href="/staff">Staff</a></li>
                            <li><a href="/office">Office</a></li>
                            <li><a href="/map">Map</a></li>
                            <li><a href="/frequently_asked_questions">Frequently asked questions</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/testimonials">Testimonials</a></li>
                            <li><a href="/employment_opportunites">Employment Opportunites</a></li>
                            <li><a href="/military_discount">Military Discount</a></li>
                          </ul>
                  </li>
                  
                  <li class="dropdown">
                  	<a class="dropdown-toggle"  data-toggle="dropdown"href="#">Procedures <b class="caret"></b></a>
                      	<ul class="dropdown-menu">
                            <li><a href="/facelift_minilift_rejuvalift_indianapolis">Face, Neck, Mini Lift</a></li>
                            <li><a href="/browlift_eyelift_indianapolis">Browlift and Upper Eyelift / Blepharoplasty</a></li>
                            <li><a href="/lower_eyelift_midface_indianapolis">Lower Eyelift / Blepharoplasty and Midface</a></li>
                            <li><a href="/rhinoplasty_nose_surgery_indianapolis">Rhinoplasty and Revision</a></li>
                            <li><a href="/otoplasty_surgery_indianapolis">Otoplasty</a></li>
                            <li><a href="/chin_implants_indianapolis">Chin Implants</a></li>
                            <li><a href="/lip_rejuvenation_indianapolis">Lip Rejuvenation</a></li>
                            <li><a href="/skin_resurfacing_peels_dermadrasion_indianapolis">Skin Resurfacing / Peels / Dermabrasion</a></li>
                            <li><a href="/botox_injectable_fillers_lipodissolve_indianapolis">BOTOX&#174;, Injectable Fillers and Lipodissolve</a></li>
                          </ul>
                  </li>
                  
                  <li><a href="/dr_winslow">Dr Winslow</a></li>
                  
                  <li class="dropdown">
                  	<a class="dropdown-toggle"  data-toggle="dropdown"href="#">Aesthetics <b class="caret"></b></a>
                      	<ul class="dropdown-menu">
                            <li><a href="/skincare">Laser & Skin Care Services</a></li>
                            <li><a href="http://shop.thefusionspa.com/" target="new">Purchase Product</a></li>
                            <li><a href="/giftcard">Gift Card</a></li>
                          </ul>
                  </li>
               
                  
                  <li class="dropdown">
                  	<a class="dropdown-toggle"  data-toggle="dropdown"href="#">Resources <b class="caret"></b></a>
                      	<ul class="dropdown-menu">
                            <li><a href="/financing">Financing</a></li>
                             <li><a href="/getaquote">Get a Quote</a></li>
                            <li><a href="/new_patient_paperwork">New Patient Paperwork</a></li>
                            <li><a href="/surgical_paperwork">Surgical Paperwork</a></li>
                            <li><a href="/assets/documents/office_policy2.pdf">Office Policy</a></li>
                            <li><a href="/out_of_town_visitors">Out of Town Visitors</a></li>
                            <li><a href="/links">Links</a></li>
                          </ul>
                  </li>
                  
                   <li class="dropdown">
                  	<a class="dropdown-toggle"  data-toggle="dropdown"href="#">Open House / Specials <b class="caret"></b></a>
                      	<ul class="dropdown-menu">
                            <li><a href="http://www.winslowopenhouse.com/3/rsvp.htm">Open House</a></li>
                            <li><a href="/specials">Specials</a></li>

                          </ul>
                  </li>
          </ul>

          <div class="link_thumbnails">
               
                     <a href="https://www.facebook.com/WinslowFacialPlasticSurgery" target="new">
                      <img src="../../../images/badges/facebook_badge.png" width="25" /> 
                     </a>
                     
                     <a href="http://indyface.blogspot.com/" target="new">
                      <img src="../../../images/badges/blogger_badge.png" width="25" />
                     </a>
                   
          </div>

  </div>
</div>


<!-- END Menu Area -->
<div class="content-wrapper row-fluid">
<div class="span2"></div>

<div class="span8">
	<div class="row-fluid" id="screen">
        <div class="span12">
        
        <div class="row-fluid screen_header">
            <div class="span4 logo"></div>
<?php
	if (empty($header_view))
		$header_view = "headers/simple_view";
		
	$this->load->view($header_view)
?>

   </div>
</div>


<div class="row-fluid home_stage">
<div class="span9">


