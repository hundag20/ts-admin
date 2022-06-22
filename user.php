<?php
				include "includes/header.php";
				?>

<a class="btn btn-primary" href="edit-user.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New User</a>
<a class="btn btn-primary" href="edit-multi-user.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add
    multiple users from a file</a>

<h1>User</h1>
<p>This table includes <?php echo counting("user", "id");?> user.</p>

<table id="sorted" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First name</th>
            <th>Middle name</th>
            <th>Last name</th>
            <th>Phone num</th>
            <th>Sex</th>
            <th>Role</th>
            <th>Email</th>
            <th>Level</th>
            <th>Region</th>
            <th>Yob</th>
            <th>Nationality</th>
            <th>Subcity</th>
            <th>Woreda</th>

            <th class="not">Edit</th>
            <th class="not">Delete</th>
        </tr>
    </thead>

    <?php
				$user = getAll("user");
				if($user) foreach ($user as $users):
					?>
    <tr>
        <td><?php echo $users['ID']?></td>
        <td><?php echo $users['username']?></td>
        <td><?php echo $users['first_name']?></td>
        <td><?php echo $users['middle_name']?></td>
        <td><?php echo $users['last_name']?></td>
        <td><?php echo $users['phone_num']?></td>
        <td><?php echo $users['sex']?></td>
        <td><?php echo $users['role']?></td>
        <td><?php echo $users['email']?></td>
        <td><?php echo $users['level']?></td>
        <td><?php echo $users['region']?></td>
        <td><?php echo $users['yob']?></td>
        <td><?php echo $users['nationality']?></td>
        <td><?php echo $users['subcity']?></td>
        <td><?php echo $users['woreda']?></td>


        <td><a href="edit-user.php?act=edit&id=<?php echo $users['id']?>"><i class="glyphicon glyphicon-edit"></i></a>
        </td>
        <td><a href="save.php?act=delete&id=<?php echo $users['id']?>&cat=user"
                onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include "includes/footer.php";?>