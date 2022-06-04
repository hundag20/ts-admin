<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-policy.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Policy</a>

				<h1>Policy</h1>
				<p>This table includes <?php echo counting("policy", "id");?> policy.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Offense code</th>
			<th>Original amount</th>
			<th>Recurrence fee</th>
			<th>Deadline count</th>
			<th>Deadline interest</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$policy = getAll("policy");
				if($policy) foreach ($policy as $policys):
					?>
					<tr>
		<td><?php echo $policys['offense_code']?></td>
		<td><?php echo $policys['original_amount']?></td>
		<td><?php echo $policys['recurrence_fee']?></td>
		<td><?php echo $policys['deadline_count']?></td>
		<td><?php echo $policys['deadline_interest']?></td>


						<td><a href="edit-policy.php?act=edit&id=<?php echo $policys['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $policys['id']?>&cat=policy" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				