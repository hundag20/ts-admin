<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-fine.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Fine</a>

				<h1>Fine</h1>
				<p>This table includes <?php echo counting("fine", "id");?> fine.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Issued to</th>
			<th>Issued by</th>
			<th>Location</th>
			<th>Date</th>
			<th>Time</th>
			<th>Date time</th>
			<th>Offence level</th>
			<th>Offence code</th>
			<th>Plate num</th>
			<th>Remark</th>
			<th>Payment order num</th>
			<th>Signature pic</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$fine = getAll("fine");
				if($fine) foreach ($fine as $fines):
					?>
					<tr>
		<td><?php echo $fines['id']?></td>
		<td><?php echo $fines['issued_to']?></td>
		<td><?php echo $fines['issued_by']?></td>
		<td><?php echo $fines['location']?></td>
		<td><?php echo $fines['date']?></td>
		<td><?php echo $fines['time']?></td>
		<td><?php echo $fines['date_time']?></td>
		<td><?php echo $fines['offence_level']?></td>
		<td><?php echo $fines['offence_code']?></td>
		<td><?php echo $fines['plate_num']?></td>
		<td><?php echo $fines['remark']?></td>
		<td><?php echo $fines['payment_order_num']?></td>
		<td><?php echo $fines['signature_pic']?></td>


						<td><a href="edit-fine.php?act=edit&id=<?php echo $fines['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $fines['id']?>&cat=fine" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				