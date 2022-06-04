<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$vehicle = getById("vehicle", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Vehicle</legend>
						<input name="cat" type="hidden" value="vehicle">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Plate num</label>
							<input class="form-control" type="text" name="plate_num" value="<?=$vehicle['plate_num']?>" /><br>
							
							<label>Motor type</label>
							<input class="form-control" type="text" name="motor_type" value="<?=$vehicle['motor_type']?>" /><br>
							
							<label>Model type</label>
							<input class="form-control" type="text" name="model_type" value="<?=$vehicle['model_type']?>" /><br>
							
							<label>Year of manuf</label>
							<input class="form-control" type="text" name="year_of_manuf" value="<?=$vehicle['year_of_manuf']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				