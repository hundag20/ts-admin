<?php
include "includes/header.php";
$data = [];

$act = $_GET["act"];
if ($act == "edit") {
  $id = $_GET["id"];
  $user = getById("user", $id);
}
?>
<style>
.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}

.files input:focus {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    border: 1px solid #92b0b3;
}

.files {
    position: relative
}

.files:after {
    pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}

.color input {
    background-color: #f1f1f1;
}

.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;
    pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
</style>

<form method="post" action="savefromfile.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">Add file</legend>
        <input name="cat" type="hidden" value="user">
        <input name="id" type="hidden" value="<?= $id ?>">
        <input name="act" type="hidden" value="<?= $act ?>">

        <div class="form-group files">
            <label>Upload Your File </label>
            <input type="file" name="my_file" class="form-control" multiple="">
        </div>
        <label>choose the role of the users included in the file</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role" id="role-driver" value="driver" checked />
            <label class="form-check-label" for="role-driver">driver</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role" id="role-officer" value="officer" />
            <label class="form-check-label" for="role-officer">officer</label>
        </div>

        <br>
        <input type="submit" value=" Save " class="btn btn-success">
</form>
<script>
</script>
<?php include "includes/footer.php"; ?>