<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$report_subscriber = getById("report_subscriber", $id);
				}
				?>

<form method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Add New Report_subscriber</legend>
        <input name="cat" type="hidden" value="report_subscriber">
        <input name="id" type="hidden" value="<?=$id?>">
        <input name="act" type="hidden" value="<?=$act?>">

        <label>Email</label>
        <input class="form-control" type="text" name="email" value="<?=$report_subscriber['email']?>" /><br>

        <label>Schedule</label>
        <select id="scheduleid" name="schedule">
            <option value="daily">daily</option>
            <option value="weekly">weekly</option>
            <option value="monthly">monthly</option>
            <option value="annual">annual</option>
        </select>
        <br>
        <input type="submit" value=" Save " class="btn btn-success">
</form>
<script>
var val = '<?=$report_subscriber['schedule']?>';
if (val) document.getElementById('scheduleid').value = val;
</script>
<?php include "includes/footer.php";?>