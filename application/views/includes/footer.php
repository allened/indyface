</div>

<div class="span3" id="right-side">
	
	
	
	<? if (!empty($right_view)) { ?>
    <div class="row-fluid">
            	<div class="span12">
                 <?=$this->load->view($right_view); ?>
                </div>
    </div>
    <? } ?>
    
    
    
    
       <div class="row-fluid well well-small">
            <div class="span12">
          		<div>
                <a class="btn btn-block link-1" href="/contact/ask_the_staff">ASK THE STAFF</a></div>
                <?=form_open('/contact/ask_the_staff_send');?>
                <br>
                	<input class="span12" name="name" type="text" id="name" placeholder="Name"><br>
                	<input class="span12" name="email" type="text" id="email" placeholder="Email"><br>
                    <input class="span12" name="phone" type="text" id="phone" placeholder="Phone"><br>
                    <select class="span12" name="procedure">
                      <option value="General Information">Select Procedure &gt;&gt;</option>
                      <option>Facelift/Mini-Lift</option>
                      <option>Upper/Lower Lid Lift</option>
                      <option>Rhinoplasty</option>
                      <option>Browlift</option>
                      <option>Neck Liposuction</option>
                      <option>Facial Implant</option>
                      <option>Temple Lift</option>
                      <option>Lip Lift</option>
                      <option>TCA Chemical Peel</option>
                      <option>Dermabrasion</option>
                      <option>Injectable Fillers</option>
                      <option>BOTOX &#174;</option>
                      <option>Other</option>
                  </select><br>
              <textarea class="span12" name="user_message" rows="5" id="user_message" placeholder="Type your question here"></textarea><br>
                    <input type="submit" class="btn btn-block" value="Submit Question">
                </form>
            </div>
        </div>
        
        
        
        
   		<div class="row-fluid text-center well well-small" style="border:5px solid #BDC074">
        	<div class="span12">
            	Click Here To<br>
                <h3><a href="/win_a_spa_day">Win A Spa Day</a></h3>
            </div>
        </div>
        <br>
        
        
        
        
        
        <div class="row-fluid well well-small" id="newsletter_signup">
        	<div class="span12">
                  <form name="ccoptin" action="http://visitor.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;">
                  <span style="background-color: #006699; float:right;margin-right:5;margin-top:3">
                  	<img src="http://img.constantcontact.com/ui/images1/visitor/email1_trans.gif" alt="Email Newsletter icon" border="0">
                  </span>
                <font style="font-weight: bold; font-family:Arial; font-size:16px; color:#006699;">
                Sign up for our<br>
                Email Newsletter<br>
                </font>
                <input type="text" name="ea" value="" style="font-family:Verdana,Geneva,Arial,Helvetica,sans-serif; font-size:10px; border:1px solid #999999;" class="span12">
                <input type="submit" name="go" value="GO" class="btn btn-block" style="font-family:Verdana,Arial,Helvetica,sans-serif; font-size:10px;">
                <input type="hidden" name="m" value="1101152618335">
                <input type="hidden" name="p" value="oi">
                </form>
            </div>
        </div>
       
       
       
  <!----  PATIENT SURVERY NOT WORKING   
        
      <div class="row-fluid">
             <div class="span12 text-center"> <a href="http://www.patientexperience.net/startsurvey.asp?sid=256&" target="new"><img src="../../../images/badges/btn-survey-170x172-malachite.png" alt="Patient Survey" width="200"/></a> 
           </div>
         </div>
         --->
           
        
      
            <div class="row-fluid">
            	<div class="span12">
                	<? if (!empty($footer_view)) { $this->load->view($footer_view); } ?>
                </div>
            </div>
      
        
    </div><!-- Fluid -->

</div> <!-- END 3 -->


</div>


</div><!-- END 8 -->
    

<div class="span2">
</div>

</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41554334-1', 'indyface.com');
  ga('send', 'pageview');

</script>



        
        	