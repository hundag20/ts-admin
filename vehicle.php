<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-vehicle.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Vehicle</a>

				<h1>Vehicle</h1>
				<p>This table includes <?php echo counting("vehicle", "id");?> vehicle.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Plate num</th>
			<th>Motor type</th>
			<th>Model type</th>
			<th>Year of manuf</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$vehicle = getAll("vehicle");
				if($vehicle) foreach ($vehicle as $vehicles):
					?>
					<tr>
		<td><?php echo $vehicles['plate_num']?></td>
		<td><?php echo $vehicles['motor_type']?></td>
		<td><?php echo $vehicles['model_type']?></td>
		<td><?php echo $vehicles['year_of_manuf']?></td>


						<td><a href="edit-vehicle.php?act=edit&id=<?php echo $vehicles['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $vehicles['id']?>&cat=vehicle" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				