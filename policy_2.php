<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-policy_2.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Policy_2</a>

				<h1>Policy_2</h1>
				<p>This table includes <?php echo counting("policy_2", "id");?> policy_2.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Level</th>
			<th>Months suspended</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$policy_2 = getAll("policy_2");
				if($policy_2) foreach ($policy_2 as $policy_2s):
					?>
					<tr>
		<td><?php echo $policy_2s['id']?></td>
		<td><?php echo $policy_2s['level']?></td>
		<td><?php echo $policy_2s['months_suspended']?></td>


						<td><a href="edit-policy_2.php?act=edit&id=<?php echo $policy_2s['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $policy_2s['id']?>&cat=policy_2" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				