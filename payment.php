<?php
				include "includes/header.php";
				?>

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


        <td><i class="glyphicon glyphicon-edit"></i></a></td>
        <td><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include "includes/footer.php";?>