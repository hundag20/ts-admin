<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-payment.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Payment</a>

				<h1>Payment</h1>
				<p>This table includes <?php echo counting("payment", "id");?> payment.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Ticket id</th>
			<th>Amount</th>
			<th>Date</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$payment = getAll("payment");
				if($payment) foreach ($payment as $payments):
					?>
					<tr>
		<td><?php echo $payments['id']?></td>
		<td><?php echo $payments['ticket_id']?></td>
		<td><?php echo $payments['amount']?></td>
		<td><?php echo $payments['date']?></td>


						<td><a href="edit-payment.php?act=edit&id=<?php echo $payments['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $payments['id']?>&cat=payment" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				