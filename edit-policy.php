<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$policy = getById("policy", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Policy</legend>
						<input name="cat" type="hidden" value="policy">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Offense code</label>
							<input class="form-control" type="text" name="offense_code" value="<?=$policy['offense_code']?>" /><br>
							
							<label>Original amount</label>
							<input class="form-control" type="text" name="original_amount" value="<?=$policy['original_amount']?>" /><br>
							
							<label>Recurrence fee</label>
							<input class="form-control" type="text" name="recurrence_fee" value="<?=$policy['recurrence_fee']?>" /><br>
							
							<label>Deadline count</label>
							<input class="form-control" type="text" name="deadline_count" value="<?=$policy['deadline_count']?>" /><br>
							
							<label>Deadline interest</label>
							<input class="form-control" type="text" name="deadline_interest" value="<?=$policy['deadline_interest']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				