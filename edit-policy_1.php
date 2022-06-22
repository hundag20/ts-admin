<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$policy_1 = getById("policy_1", $id);
				}
				?>

<form method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Policy_1</legend>
        <input name="cat" type="hidden" value="policy_1">
        <input name="id" type="hidden" value="<?=$id?>">
        <input name="act" type="hidden" value="<?=$act?>">

        <label>Level</label>
        <input class="form-control" type="number" name="level" value="<?=$policy_1['level']?>" /><br>

        <label>Points</label>
        <input class="form-control" type="number" name="points" value="<?=$policy_1['points']?>" /><br>

        <label>First time fee</label>
        <input class="form-control" type="number" name="first_time_fee" value="<?=$policy_1['first_time_fee']?>" /><br>

        <label>Non first time fee</label>
        <input class="form-control" type="number" name="non_first_time_fee"
            value="<?=$policy_1['non_first_time_fee']?>" /><br>
        <br>
        <input type="submit" value=" Save " class="btn btn-success">
</form>
<?php include "includes/footer.php";?>