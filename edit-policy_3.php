<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$policy_3 = getById("policy_3", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Policy_3</legend>
						<input name="cat" type="hidden" value="policy_3">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Days overdue</label>
							<input class="form-control" type="text" name="days_overdue" value="<?=$policy_3['days_overdue']?>" /><br>
							
							<label>Percentage</label>
							<input class="form-control" type="text" name="percentage" value="<?=$policy_3['percentage']?>" /><br>
							
							<label>Points</label>
							<input class="form-control" type="text" name="points" value="<?=$policy_3['points']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				