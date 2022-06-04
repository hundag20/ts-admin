<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$announcement = getById("announcement", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Announcement</legend>
						<input name="cat" type="hidden" value="announcement">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Announced by</label>
							<input class="form-control" type="text" name="announced_by" value="<?=$announcement['announced_by']?>" /><br>
							
							<label>Date</label>
							<input class="form-control" type="text" name="date" value="<?=$announcement['date']?>" /><br>
							
							<label>Roles</label>
							<input class="form-control" type="text" name="roles" value="<?=$announcement['roles']?>" /><br>
							
							<label>Message</label>
							<input class="form-control" type="text" name="message" value="<?=$announcement['message']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				