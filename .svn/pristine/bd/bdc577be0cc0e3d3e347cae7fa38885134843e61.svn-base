<style type="text/css">
label {
	margin-top:-10px;
	margin-bottom: 10px;
	font-size: 12px;
	color: #005580;
}
</style>
<h1>Win a Spa Day</h1>
<h3>Register to enter to win one free Spa Day
<p>- Bi-Monthly Drawings</p></h3>



<div class="well well-small">
<h3>Spa Day Includes</h3>
-Facial<br>
-Relaxing Message<br>
-Hair Cut and Style<br>
-Make Up Application<br>
-Complimentary Cleanser and Skin Hydrator
</div>

<div class="well">
<h3>Complete this Form</h3>
* - is required
<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
<?=form_open('contact/win_a_spa_day_send');?>
<table width="100%" border="0">
  <tr>
    <td><input name="name" type="text" id="name" placeholder="Full Name" value="<?php echo set_value('name');?>"><label>Name*</label></td>
    <td><input name="email" type="text" id="email" placeholder="Valid Email Address" value="<?php echo set_value('email');?>"><label>Email*</label></td>
  </tr>
  <tr>
    <td><input name="phone" type="text" id="phone" placeholder="999-123-4567" value="<?php echo set_value('phone');?>"><label>Contact Number*</label></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><input name="address" type="text" class="input-xxlarge" id="address" placeholder="Address including Apt #'s" value="<?php echo set_value('address');?>"><label>Address*</label></td>
    </tr>
  <tr>
    <td><input name="city" type="text" id="city" value="<?php echo set_value('city');?>"><label>City*</label></td>
    <td>
    <select name="state">
    <option>Select a State</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
<label>State*</label>
    </td>
  </tr>
  <tr>
    <td><input name="zip" type="text" id="zip" placeholder="90909" value="<?php echo set_value('zip');?>"><label>Zip*</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Preffered Contact Method*</strong></td>
    <td>
    <p>
      <label class="checkbox inline">
        <input type="checkbox" name="preffered_contact[]" value="email" <?php echo set_checkbox('preffered_contact[]', 'email'); ?>>
        Email</label>
      
      <label class="checkbox inline">
        <input type="checkbox" name="preffered_contact[]" value="phone" <?php echo set_checkbox('preffered_contact[]', 'phone'); ?>>
        Phone</label>
      
       <label class="checkbox inline">
        <input type="checkbox" name="preffered_contact[]" value="letter" <?php echo set_checkbox('preffered_contact[]', 'letter'); ?>>
        Letter</label>
      
    </p></td>
  </tr>
  <tr>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top">
    <td><strong>Your Comments or Suggestions</strong></td>
    <td><textarea name="comments" rows="5" id="comments"><?php echo set_value('comments');?></textarea></td>
  </tr>
</table>

<input type="submit" class="btn btn-block btn-primary" value="Enter To Win">

</form>
</div>