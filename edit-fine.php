<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$fine = getById("fine", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Fine</legend>
						<input name="cat" type="hidden" value="fine">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Issued to</label>
							<input class="form-control" type="text" name="issued_to" value="<?=$fine['issued_to']?>" /><br>
							
							<label>Issued by</label>
							<input class="form-control" type="text" name="issued_by" value="<?=$fine['issued_by']?>" /><br>
							
							<label>Location</label>
							<input class="form-control" type="text" name="location" value="<?=$fine['location']?>" /><br>
							
							<label>Date</label>
							<input class="form-control" type="text" name="date" value="<?=$fine['date']?>" /><br>
							
							<label>Time</label>
							<input class="form-control" type="text" name="time" value="<?=$fine['time']?>" /><br>
							
							<label>Date time</label>
							<input class="form-control" type="text" name="date_time" value="<?=$fine['date_time']?>" /><br>
							
							<label>Offence level</label>
							<input class="form-control" type="text" name="offence_level" value="<?=$fine['offence_level']?>" /><br>
							
							<label>Offence code</label>
							<input class="form-control" type="text" name="offence_code" value="<?=$fine['offence_code']?>" /><br>
							
							<label>Plate num</label>
							<input class="form-control" type="text" name="plate_num" value="<?=$fine['plate_num']?>" /><br>
							
							<label>Remark</label>
							<input class="form-control" type="text" name="remark" value="<?=$fine['remark']?>" /><br>
							
							<label>Payment order num</label>
							<input class="form-control" type="text" name="payment_order_num" value="<?=$fine['payment_order_num']?>" /><br>
							
							<label>Signature pic</label>
							<input class="form-control" type="text" name="signature_pic" value="<?=$fine['signature_pic']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				