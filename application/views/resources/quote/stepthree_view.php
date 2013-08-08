<h1>Verify Quote Request</h1>

<div class="well well-small">
  <ul>
    <li>Step 1: Contact Information</li>
    <li>Step 2: Upload Photo(s)</li>
    <li><strong>Step 3: Verify and Sumbit</strong></li>

</div>
<div class="well">
	
	<table class="table table-striped table-bordered">
		<thead>
			<th class="text-warning">Contact Information</th>
		</thead>
		<thead>
			<th>Name</th>
		</thead>

		<tr>
			<td><?=$contact_information['name']?></td>
		</tr>

		<thead>
			<th>Email</th>
		</thead>

		<tr>
			<td><?=$contact_information['email']?></td>
		</tr>

		<thead>
			<th>Phone #</th>
		</thead>

		<tr>
			<td><?=$contact_information['phone']?></td>
		</tr>
	</table>

	<table class="table table-striped table-bordered">
		<thead>
			<th class="text-warning">Procedure Information</th>
		</thead>
		<thead>
			<th >Procedure</th>
			<th>Details</th>
		</thead>

		<tr>
			<td class="span4"><?=$contact_information['procedure']?></td>
			<td class="span8"><?=$contact_information['details']?></td>
		</tr>
	</table>

	<table class="table table-striped table-bordered">
		<thead>
			<th class="text-warning">Photos</th>
		</thead>

		<tr>
			<td>
				<?php foreach($photo_information as $photo) { ?>
					<img class="span4 text-center" src="../uploads/<?=$photo?>" width="200" height="200">
				<? } ?>
			</td>
		</tr>
	</table>

	<div class="text-right">
		<input type="submit" value="Request Quote" class="btn btn-primary">
	</div>

</div>