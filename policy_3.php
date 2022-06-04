<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-policy_3.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Policy_3</a>

				<h1>Policy_3</h1>
				<p>This table includes <?php echo counting("policy_3", "id");?> policy_3.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Days overdue</th>
			<th>Percentage</th>
			<th>Points</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$policy_3 = getAll("policy_3");
				if($policy_3) foreach ($policy_3 as $policy_3s):
					?>
					<tr>
		<td><?php echo $policy_3s['id']?></td>
		<td><?php echo $policy_3s['days_overdue']?></td>
		<td><?php echo $policy_3s['percentage']?></td>
		<td><?php echo $policy_3s['points']?></td>


						<td><a href="edit-policy_3.php?act=edit&id=<?php echo $policy_3s['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $policy_3s['id']?>&cat=policy_3" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				