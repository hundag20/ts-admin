<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$policy_2 = getById("policy_2", $id);
				}
				?>

<form method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Policy_2</legend>
        <input name="cat" type="hidden" value="policy_2">
        <input name="id" type="hidden" value="<?=$id?>">
        <input name="act" type="hidden" value="<?=$act?>">

        <label>Level</label>
        <input class="form-control" type="number" name="level" value="<?=$policy_2['level']?>" /><br>

        <label>Months suspended</label>
        <input class="form-control" type="number" name="months_suspended"
            value="<?=$policy_2['months_suspended']?>" /><br>
        <br>
        <input type="submit" value=" Save " class="btn btn-success">
</form>
<?php include "includes/footer.php";?>