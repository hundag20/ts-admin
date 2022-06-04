<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="announcement.php">Announcement</a></td>
					<td><?=counting("announcement", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="fine.php">Fine</a></td>
					<td><?=counting("fine", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="payment.php">Payment</a></td>
					<td><?=counting("payment", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="policy.php">Policy</a></td>
					<td><?=counting("policy", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="policy_1.php">Policy_1</a></td>
					<td><?=counting("policy_1", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="policy_2.php">Policy_2</a></td>
					<td><?=counting("policy_2", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="policy_3.php">Policy_3</a></td>
					<td><?=counting("policy_3", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="user.php">User</a></td>
					<td><?=counting("user", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="ussd.php">Ussd</a></td>
					<td><?=counting("ussd", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="vehicle.php">Vehicle</a></td>
					<td><?=counting("vehicle", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			