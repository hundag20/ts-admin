<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$payment = getById("payment", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Payment</legend>
						<input name="cat" type="hidden" value="payment">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Ticket id</label>
							<input class="form-control" type="text" name="ticket_id" value="<?=$payment['ticket_id']?>" /><br>
							
							<label>Amount</label>
							<input class="form-control" type="text" name="amount" value="<?=$payment['amount']?>" /><br>
							
							<label>Date</label>
							<input class="form-control" type="text" name="date" value="<?=$payment['date']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				