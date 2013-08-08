<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>ALL IN ONE BANNER - JQUERY BANNER ROTATOR - RESPONSIVE - Classic Skin</title>

<style>
html,body { 
	margin:0;
	padding:0;
	overflow-x: hidden; 
}

#bannerBg{
	background:url(preview_images/responsive/opportuneResponsive.jpg) center top no-repeat;
}
#containingDiv {
	width:960px;margin:0 auto; padding:140px 0 0 0;	
}
#bottomText {
	width:100%; font:18px 'Lato', sans-serif; color:#333333; border-top:1px solid #cccccc; padding:10px 0 0 0; margin-top:100px; text-align:center;
}

@media screen and (min-width:1200px){
#bannerBg{
	background:url(preview_images/responsive/opportuneResponsive.jpg) center top no-repeat;
}
#containingDiv {
	width:960px;margin:0 auto; padding:140px 0 0 0;	
}
#bottomText {
	width:100%; font:18px 'Lato', sans-serif; color:#333333; border-top:1px solid #cccccc; padding:10px 0 0 0; margin-top:100px; text-align:center;
}
}

@media screen and (max-width:767px){
#bannerBg {
	background:url(preview_images/responsive/opportuneResponsive767.jpg) center top no-repeat;
}
#containingDiv {
	width:100%;margin:0 auto;padding:60px 0 0 0;	
}	
#bottomText {
	width:100%;font:14px 'Lato', sans-serif; color:#333333; border-top:1px solid #cccccc; padding:10px 0 0 0; margin-top:50px; text-align:center;
}
}

</style>

<!-- must have -->
<link href="css/allinone_thumbnailsBanner.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script src="js/rotator/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="js/rotator/allinone_thumbnailsBanner.js" type="text/javascript"></script>
<script src="js/rotator/reflection.js" type="text/javascript"></script>
<!-- must have -->




	<script>
		jQuery(function() {

			jQuery('#allinone_thumbnailsBanner_cool').allinone_thumbnailsBanner({
				skin: 'cool',
				numberOfThumbsPerScreen:7,
				width: 960,
				height: 384,
				thumbsReflection:0,
				responsive:true,
				origthumbsHolderWrapperH:121,
				thumbsWrapperMarginTop:0
			});		
			
			
		});
	</script>
    
    
</head>

<body bgcolor="#FFFFFF">

<div id="bannerBg">

<div id="containingDiv">


            <div id="allinone_thumbnailsBanner_cool" style="display:none;">
            	<ul class="allinone_thumbnailsBanner_list">
                <!-- IMAGES -->
                    <li data-bottom-thumb="images/cool/thumbs/01_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText1"><img src="images/cool/01_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/02_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText2" data-link="http://codecanyon.net/user/LambertGroup" data-target="_blank"><img src="images/cool/02_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/03_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText3"><img src="images/cool/03_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/04_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText4"><img src="images/cool/04_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/05_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText5"><img src="images/cool/05_cool.jpg" alt="" /></li>

                    <li data-bottom-thumb="images/cool/thumbs/01_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText1"><img src="images/cool/01_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/02_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText2"><img src="images/cool/02_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/03_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText3"><img src="images/cool/03_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/04_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText4"><img src="images/cool/04_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/05_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText5"><img src="images/cool/05_cool.jpg" alt="" /></li>
                    
                    <li data-bottom-thumb="images/cool/thumbs/01_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText1"><img src="images/cool/01_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/02_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText2"><img src="images/cool/02_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/03_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText3"><img src="images/cool/03_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/04_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText4"><img src="images/cool/04_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/05_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText5"><img src="images/cool/05_cool.jpg" alt="" /></li>
                    
                    <li data-bottom-thumb="images/cool/thumbs/01_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText1"><img src="images/cool/01_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/02_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText2"><img src="images/cool/02_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/03_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText3"><img src="images/cool/03_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/04_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText4"><img src="images/cool/04_cool.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/cool/thumbs/05_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText5"><img src="images/cool/05_cool.jpg" alt="" /></li>
					<li data-bottom-thumb="images/cool/thumbs/02_cool.jpg" data-text-id="#allinone_thumbnailsBanner_photoText2"><img src="images/cool/02_cool.jpg" alt="" /></li>                    
                    
                                    </ul>
                
                
                
                                                        
                
                
                
                <!-- TEXTS -->
              <div id="allinone_thumbnailsBanner_photoText1" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement11_cool_responsive" data-initial-left="50" data-initial-top="10" data-final-left="50" data-final-top="40" data-duration="0.5" data-fade-start="0" data-delay="0">Up to 5 types of banners</div>
                    <div class="allinone_thumbnailsBanner_text_line textElement12_cool_responsive" data-initial-left="50" data-initial-top="10" data-final-left="50" data-final-top="70" data-duration="0.5" data-fade-start="0" data-delay="0.3">Each with <a href="http://codecanyon.net/user/LambertGroup" target="_blank">multiple</a> SKINS</div>
               </div>       
               
               <div id="allinone_thumbnailsBanner_photoText2" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement21_cool_responsive" data-initial-left="460" data-initial-top="60" data-final-left="460" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">16 transition effects<br /> for images</div>
                    <div class="allinone_thumbnailsBanner_text_line textElement22_cool_responsive" data-initial-left="460" data-initial-top="145" data-final-left="460" data-final-top="145" data-duration="0.5" data-fade-start="0" data-delay="0.3">optional can set the transition<br /> for each image</div>
               </div>  
               
                <div id="allinone_thumbnailsBanner_photoText3" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement31_cool_responsive" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Animated text from any direction</div>
                    <div class="allinone_thumbnailsBanner_text_line textElement32_cool_responsive" data-initial-left="0" data-initial-top="85" data-final-left="50" data-final-top="85" data-duration="0.5" data-fade-start="0" data-delay="0.3">top, bottom, left and right</div>
                    <div class="allinone_thumbnailsBanner_text_line textElement33_cool_responsive" data-initial-left="50" data-initial-top="250" data-final-left="50" data-final-top="123" data-duration="1" data-fade-start="0" data-delay="0.5">Any color, CSS and HTML formated</div>               
               </div>  
               
               <div id="allinone_thumbnailsBanner_photoText4" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement41_cool_responsive" data-initial-left="50" data-initial-top="0" data-final-left="50" data-final-top="260" data-duration="0.5" data-fade-start="0" data-delay="0">Line One is here</div>
                    <div class="allinone_thumbnailsBanner_text_line textElement42_cool_responsive" data-initial-left="53" data-initial-top="384" data-final-left="53" data-final-top="240" data-duration="0.5" data-fade-start="0" data-delay="0.3">Line Two over there</div>
               </div>
               
              <div id="allinone_thumbnailsBanner_photoText5" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement51_cool_responsive" data-initial-left="130" data-initial-top="52" data-final-left="430" data-final-top="52" data-duration="0.5" data-fade-start="0" data-delay="0"><a href="http://codecanyon.net/user/LambertGroup" target="_blank">Cool Title Right Here</a></div>
                    <div class="allinone_thumbnailsBanner_text_line textElement52_cool_responsive" data-initial-left="430" data-initial-top="300" data-final-left="430" data-final-top="95" data-duration="0.5" data-fade-start="0" data-delay="0.3">Lorem ipsum dolor sit amet, <a href="http://codecanyon.net/user/LambertGroup" target="_blank">consectetur</a> adipisicing elit, sed do eiusmod tempor incididunt. </div>
                    
               </div> <!--       -->                                                       
                           
           </div>
  
  


</div>  
  
<div id="bottomText" style="margin-top:140px;">Just resize the Browser or open the link in a mobile device to see the responsive behaviour</div>  
</div>
  

</body>
</html>