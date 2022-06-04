<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$ussd = getById("ussd", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Ussd</legend>
						<input name="cat" type="hidden" value="ussd">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Session id</label>
							<input class="form-control" type="text" name="session_id" value="<?=$ussd['session_id']?>" /><br>
							
							<label>License id</label>
							<input class="form-control" type="text" name="license_id" value="<?=$ussd['license_id']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				