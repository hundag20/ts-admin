<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$user = getById("user", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New User</legend>
						<input name="cat" type="hidden" value="user">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Username</label>
							<input class="form-control" type="text" name="username" value="<?=$user['username']?>" /><br>
							
							<label>Password</label>
							<input class="form-control" type="text" name="password" value="<?=$user['password']?>" /><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$user['status']?>" /><br>
							
							<label>Suspended for</label>
							<input class="form-control" type="text" name="suspended_for" value="<?=$user['suspended_for']?>" /><br>
							
							<label>Points</label>
							<input class="form-control" type="text" name="points" value="<?=$user['points']?>" /><br>
							
							<label>First time</label>
							<input class="form-control" type="text" name="first_time" value="<?=$user['first_time']?>" /><br>
							
							<label>First name</label>
							<input class="form-control" type="text" name="first_name" value="<?=$user['first_name']?>" /><br>
							
							<label>Middle name</label>
							<input class="form-control" type="text" name="middle_name" value="<?=$user['middle_name']?>" /><br>
							
							<label>Last name</label>
							<input class="form-control" type="text" name="last_name" value="<?=$user['last_name']?>" /><br>
							
							<label>Phone num</label>
							<input class="form-control" type="text" name="phone_num" value="<?=$user['phone_num']?>" /><br>
							
							<label>Sex</label>
							<input class="form-control" type="text" name="sex" value="<?=$user['sex']?>" /><br>
							
							<label>Role</label>
							<input class="form-control" type="text" name="role" value="<?=$user['role']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$user['email']?>" /><br>
							
							<label>Level</label>
							<input class="form-control" type="text" name="level" value="<?=$user['level']?>" /><br>
							
							<label>Region</label>
							<input class="form-control" type="text" name="region" value="<?=$user['region']?>" /><br>
							
							<label>Authority</label>
							<input class="form-control" type="text" name="authority" value="<?=$user['authority']?>" /><br>
							
							<label>Yob</label>
							<input class="form-control" type="text" name="yob" value="<?=$user['yob']?>" /><br>
							
							<label>Nationality</label>
							<input class="form-control" type="text" name="nationality" value="<?=$user['nationality']?>" /><br>
							
							<label>Subcity</label>
							<input class="form-control" type="text" name="subcity" value="<?=$user['subcity']?>" /><br>
							
							<label>Woreda</label>
							<input class="form-control" type="text" name="woreda" value="<?=$user['woreda']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				