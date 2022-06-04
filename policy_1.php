<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-policy_1.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Policy_1</a>

				<h1>Policy_1</h1>
				<p>This table includes <?php echo counting("policy_1", "id");?> policy_1.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Level</th>
			<th>Points</th>
			<th>First time fee</th>
			<th>Non first time fee</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$policy_1 = getAll("policy_1");
				if($policy_1) foreach ($policy_1 as $policy_1s):
					?>
					<tr>
		<td><?php echo $policy_1s['id']?></td>
		<td><?php echo $policy_1s['level']?></td>
		<td><?php echo $policy_1s['points']?></td>
		<td><?php echo $policy_1s['first_time_fee']?></td>
		<td><?php echo $policy_1s['non_first_time_fee']?></td>


						<td><a href="edit-policy_1.php?act=edit&id=<?php echo $policy_1s['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $policy_1s['id']?>&cat=policy_1" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				