<?php
				include "includes/header.php";
				?>


<h1>Fine</h1>
<p>This table includes <?php echo counting("fine", "id");?> fine.</p>

<table id="sorted" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Issued to</th>
            <th>Issued by</th>
            <th>Location</th>
            <th>Date</th>
            <th>Time</th>
            <th>Date time</th>
            <th>Offence level</th>
            <th>Offence code</th>
            <th>Plate num</th>
            <th>Remark</th>

            <th class="not">Edit</th>
            <th class="not">Delete</th>
        </tr>
    </thead>

    <?php
				$fine = getAll("fine");
				if($fine) foreach ($fine as $fines):
					?>
    <tr>
        <td><?php echo $fines['id']?></td>
        <td><?php echo $fines['issued_to']?></td>
        <td><?php echo $fines['issued_by']?></td>
        <td><?php echo $fines['location']?></td>
        <td><?php echo $fines['date']?></td>
        <td><?php echo $fines['time']?></td>
        <td><?php echo $fines['date_time']?></td>
        <td><?php echo $fines['offence_level']?></td>
        <td><?php echo $fines['offence_code']?></td>
        <td><?php echo $fines['plate_num']?></td>
        <td><?php echo $fines['remark']?></td>


        <td><i class="glyphicon glyphicon-edit"></i></a>
        </td>
        <td><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include "includes/footer.php";?>