<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$announcement = getById("announcement", $id);
				}
				?>

<form method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Add New Announcement</legend>
        <input name="cat" type="hidden" value="announcement">
        <input name="id" type="hidden" value="<?=$id?>">
        <input name="act" type="hidden" value="<?=$act?>">

        <label>Announced by</label>
        <input class="form-control" type="text" name="announced_by" value="<?=$announcement['announced_by']?>" /><br>

        <div id="date-id" style="display:none">
            <label>Date</label>
            <input class="form-control" type="text" name="date" value="<?=$announcement['date']?>" /><br>
        </div>

        <label>Message</label>
        <div id="officers-message-field-id" style="display: none">
            <?php include "txt.php";?>
        </div>
        <textarea name="message2" cols="80" rows="5" style="display: none" id="drivers-message-field-id" maxlength="192"
            placeholder="(you can write a maximum of 172 charcters)"><?=$announcement['message']?></textarea><br>
        <textarea name="message3" cols="80" rows="5" style="display: none" id="allroles-message-field-id"
            maxlength="192"><?=$announcement['message']?></textarea><br>
        <label>Select the audience for this announcement</label>
        <select id="roleid" name="roles" onchange="myFunction()">
            <option value="drivers">Drivers</option>
            <option value="officers">Officers</option>
            <option value="all">All</option>
        </select>
        <br>
        <input onClick="myFunc()" type="submit" value=" Save " class="btn btn-success">
</form>
<script>
var val = '<?=$announcement['roles']?>';
if (val) document.getElementById('roleid').value = val;

var val2 = '<?=$act?>'
if (val2 == "edit") {
    document.getElementById('date-id').style.display = 'block';
} else {
    document.getElementById('date-id').style.display = 'none';
}

function myFunc() {
    document.getElementById('roleid').value
}

function myFunction() {
    if (document.getElementById('roleid').value == "officers") {
        document.getElementById('officers-message-field-id').style.display = 'block';
        document.getElementById('drivers-message-field-id').style.display = 'none';
        document.getElementById('allroles-message-field-id').style.display = 'none';

    } else if (document.getElementById('roleid').value == "drivers") {
        document.getElementById('officers-message-field-id').style.display = 'none';
        document.getElementById('drivers-message-field-id').style.display = 'block';
        document.getElementById('allroles-message-field-id').style.display = 'none';
    } else if (document.getElementById('roleid').value == "all") {
        document.getElementById('officers-message-field-id').style.display = 'none';
        document.getElementById('drivers-message-field-id').style.display = 'none';
        document.getElementById('allroles-message-field-id').style.display = 'block';
    }
}
myFunction();
</script>
<?php include "includes/footer.php";?>