<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-report_subscriber.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Report_subscriber</a>

				<h1>Report_subscriber</h1>
				<p>This table includes <?php echo counting("report_subscriber", "id");?> report_subscriber.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Email</th>
			<th>Schedule</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$report_subscriber = getAll("report_subscriber");
				if($report_subscriber) foreach ($report_subscriber as $report_subscribers):
					?>
					<tr>
		<td><?php echo $report_subscribers['id']?></td>
		<td><?php echo $report_subscribers['email']?></td>
		<td><?php echo $report_subscribers['schedule']?></td>


						<td><a href="edit-report_subscriber.php?act=edit&id=<?php echo $report_subscribers['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $report_subscribers['id']?>&cat=report_subscriber" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				