<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-ussd.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Ussd</a>

				<h1>Ussd</h1>
				<p>This table includes <?php echo counting("ussd", "id");?> ussd.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Session id</th>
			<th>License id</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$ussd = getAll("ussd");
				if($ussd) foreach ($ussd as $ussds):
					?>
					<tr>
		<td><?php echo $ussds['id']?></td>
		<td><?php echo $ussds['session_id']?></td>
		<td><?php echo $ussds['license_id']?></td>


						<td><a href="edit-ussd.php?act=edit&id=<?php echo $ussds['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $ussds['id']?>&cat=ussd" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				