<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-announcement.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Announcement</a>

				<h1>Announcement</h1>
				<p>This table includes <?php echo counting("announcement", "id");?> announcement.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Announced by</th>
			<th>Date</th>
			<th>Roles</th>
			<th>Message</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$announcement = getAll("announcement");
				if($announcement) foreach ($announcement as $announcements):
					?>
					<tr>
		<td><?php echo $announcements['id']?></td>
		<td><?php echo $announcements['announced_by']?></td>
		<td><?php echo $announcements['date']?></td>
		<td><?php echo $announcements['roles']?></td>
		<td><?php echo $announcements['message']?></td>


						<td><a href="edit-announcement.php?act=edit&id=<?php echo $announcements['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $announcements['id']?>&cat=announcement" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				