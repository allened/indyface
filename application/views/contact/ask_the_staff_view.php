<h1>Ask the Staff</h1>

<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
<div class="well">
<?=form_open('contact/ask_the_staff_send');?>

<table width="100%" border="0">
  <tr>
    <td class="span3"><label>Full Name</label></td>
    <td><input name="name" 
                    type="text" 
                    id="name" 
                    placeholder="Name" 
                    style="width:100%;" 
                    value="<?php echo set_value('name'); ?>"><br></td>
  </tr>
  <tr>
    <td><label>Email Address</label></td>
    <td><input name="email" 
                    type="text" 
                    id="email" 
                    placeholder="Email" 
                    style="width:100%;"
                    value="<?php echo set_value('email'); ?>"><br></td>
  </tr>
  <tr>
    <td><label>Phone Number</label></td>
    <td><input name="phone" 
                    type="text" 
                    id="phone" 
                    placeholder="Phone 317-999-1234" 
                    style="width:100%;"
                    value="<?php echo set_value('phone'); ?>"><br></td>
  </tr>
  <tr>
    <td><label>Procedure</label></td>
    <td>
    <? $procedure_value = set_value('procedure');?>
    <select class="span12" name="procedure">
      <option value="General Information">Select Procedure &gt;&gt;</option>
      <option <? if ($procedure_value == 'Facelift/Mini-Lift') { ?>selected="selected"<? } ?>>Facelift/Mini-Lift</option>
      <option <? if ($procedure_value == 'Upper/Lower Lid Lift') { ?>selected="selected"<? } ?>>Upper/Lower Lid Lift</option>
      <option <? if ($procedure_value == 'Rhinoplasty') { ?>selected="selected"<? } ?>>Rhinoplasty</option>
      <option <? if ($procedure_value == 'Browlift') { ?>selected="selected"<? } ?>>Browlift</option>
      <option <? if ($procedure_value == 'Neck Liposuction') { ?>selected="selected"<? } ?>>Neck Liposuction</option>
      <option <? if ($procedure_value == 'Facial Implant') { ?>selected="selected"<? } ?>>Facial Implant</option>
      <option <? if ($procedure_value == 'Temple Lift') { ?>selected="selected"<? } ?>>Temple Lift</option>
      <option <? if ($procedure_value == 'Lip Lift') { ?>selected="selected"<? } ?>>Lip Lift</option>
      <option <? if ($procedure_value == 'TCA Chemical Peel') { ?>selected="selected"<? } ?>>TCA Chemical Peel</option>
      <option <? if ($procedure_value == 'Dermabrasion') { ?>selected="selected"<? } ?>>Dermabrasion</option>
      <option <? if ($procedure_value == 'Injectable Fillers') { ?>selected="selected"<? } ?>>Injectable Fillers</option>
      <option <? if ($procedure_value == "BOTOX&#174;") { ?>selected="selected"<? } ?>>BOTOX&#174;</option>
      <option <? if ($procedure_value == 'Other') { ?>selected="selected"<? } ?>>Other</option>
    </select><br></td>
  </tr>
  <tr>
    <td><label>Your Question</label></td>
    <td><textarea name="user_message" 
                    rows="5" 
                    id="user_message" 
                    placeholder="Type your question here" 
                    style="width:100%;"><?php echo set_value('user_message'); ?></textarea><br></td>
  </tr>
</table>
  
                    
                    <input type="submit" class="btn btn-block btn-primary" value="Submit Question">
                </form>
</div>