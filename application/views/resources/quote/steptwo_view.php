<h1>Get a Quote: Step 2</h1>

<div class="well well-small">
  <ul>
    <li>Step 1: Contact Information</li>
    <li><strong>Step 2: Upload Photo(s)</strong></li>
    <li>Step 3: Verify and Sumbit</li>

</div>

<div class="well">
	<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
	<?php if ($message_type == 'success') {
		echo '<div class="alert alert-success">'.$message.'</div>';
	} ?>
	<?php if ($message_type == 'error') {
		echo '<div class="alert alert-error">'.$message['error'].'</div>';
	} ?>


	<?php echo form_open_multipart('resources/do_upload');?>
<div style="width: 150px; margin: auto;">
        <input type="file" name="userfile" size="20" class="btn"/>
</div>

<hr>

<div class="span5 offset7 inline">
	<input type="submit" value="Upload Photo" class="btn btn-warning"/>
	<?php if(empty($uploaded_photos)) 
	{ 
		echo ' <a href="/resources/getaquote_verify" class="btn btn-primary">Skip >></a>';
	} else {
		echo ' <a href="/resources/getaquote_verify" class="btn btn-primary">Continue >></a>';
	}
	?>
</div>
	</form>
</div>

<?php if(!empty($uploaded_photos)) { 
	
 	echo '<div class="well well-small">';
 	echo '<h3>Uploaded Photos</h3>';
	foreach ($uploaded_photos as $photo) {
		echo '<div class="span2 text-center">';
		echo form_open('resources/remove_photo');
		echo '<img src="../uploads/'.$photo.'" width="100" height="100">';
		echo form_hidden('photo_name', $photo);
		echo form_submit('delete', 'Remove');
		echo '</form>';
		echo '</div>';
	}
	echo '<div style="clear:both"></div>';
	echo '</div>';	
} ?>