<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$user = getById("user", $id);
				}
				?>

<form id="signupForm" method="post" action="save.php" enctype='multipart/form-data'>
    <fieldset>
        <legend class="hidden-first">User</legend>
        <input name="cat" type="hidden" value="user">
        <input name="id" type="hidden" value="<?=$id?>">
        <input name="act" type="hidden" value="<?=$act?>">

        <label>Role</label>
        <select class="form-control" type="text" id="role" name="role">
            <option value="driver">Driver</option>
            <option value="officer">Officer</option>
        </select><br>

        <label>Username</label>
        <input class="form-control" type="number" id="username" name="username" value="<?=$user['username']?>"
            required /><br>

        <label>First name</label>
        <input class="form-control" type="text" id="first_name" name="first_name" value="<?=$user['first_name']?>"
            required /><br>

        <label>Middle name</label>
        <input class="form-control" type="text" id="middle_name" name="middle_name" value="<?=$user['middle_name']?>"
            required /><br>

        <label>Last name</label>
        <input class="form-control" type="text" id="last_name" name="last_name" value="<?=$user['last_name']?>"
            required /><br>

        <label>Phone num</label>
        <input class="form-control" type="text" id="phone_num" name="phone_num" value="<?=$user['phone_num']?>"
            required /><br>

        <label>Sex</label>
        <select class="form-control" type="text" id="sex" name="sex">
            <option value="male">Male
            </option>
            <option value="Female">Female
            </option>
        </select><br>

        <label>Email</label>
        <input class="form-control" type="text" id="email" name="email" value="<?=$user['email']?>" /><br>

        <label>Level</label>
        <input class="form-control" type="text" id="level" name="level" value="<?=$user['level']?>" required /><br>

        <label>Region</label>
        <input class="form-control" type="text" id="region" name="region" value="<?=$user['region']?>" required /><br>

        <label>Yob</label>
        <input class="form-control" type="number" id="yob" name="yob" value="<?=$user['yob']?>" required /><br>

        <label>Nationality</label>
        <input class="form-control" type="text" id="nationality" name="nationality" value="<?=$user['nationality']?>"
            required /><br>

        <label>Subcity</label>
        <input class="form-control" type="text" id="subcity" name="subcity" value="<?=$user['subcity']?>"
            required /><br>

        <label>Woreda</label>
        <input class="form-control" type="text" id="woreda" name="woreda" value="<?=$user['woreda']?>" required /><br>
        <br>
        <input type="submit" id="subm" value=" Save " onClick="validateSignupForm()" class="btn btn-success">
</form>
<?php include "includes/footer.php";?>
<script>
function phonenumber(inputtxt) {
    var phoneno = /^\d{10}$/;
    if (inputtxt.match(phoneno)) {
        return true;
    } else {
        return false;
    }
}

function validateEmail(mail) {
    console.log('mail', mail);

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(String(mail))) {

        console.log('true');
        return (true)
    }
    return (false)
}

var username = document.getElementById("username"),
    role = document.getElementById("role"),
    first_name = document.getElementById("first_name"),
    middle_name = document.getElementById("middle_name"),
    last_name = document.getElementById("last_name"),
    phone_num = document.getElementById("phone_num"),
    sex = document.getElementById("sex"),
    email = document.getElementById("email"),
    region = document.getElementById("region"),
    yob = document.getElementById("yob"),
    nationality = document.getElementById("nationality"),
    subcity = document.getElementById("subcity"),
    woreda = document.getElementById("woreda"),
    subm = document.getElementById("subm");
var form = document.getElementById('signupForm');


// enableSubmitButton();
function setAllValidtyEmpty() {
    woreda.setCustomValidity("");
    username.setCustomValidity("");
    first_name.setCustomValidity("");
    middle_name.setCustomValidity("");
    last_name.setCustomValidity("");
    phone_num.setCustomValidity("");
    email.setCustomValidity("");
    region.setCustomValidity("");
    yob.setCustomValidity("");
    nationality.setCustomValidity("");
    subcity.setCustomValidity("");
}

function validateForm() {
    if (role.value === "officer" && (isNaN(username.value) || username.value.length != 5)) {
        setAllValidtyEmpty();
        username.setCustomValidity("Invalid username");
        return false;
    } else if (role.value === "driver" && (isNaN(username.value) || username.value.length != 6)) {
        setAllValidtyEmpty();
        username.setCustomValidity("Invalid username");
        return false;
    } else if (first_name.value.search(/[^A-Za-z\s]/) != -1) {
        setAllValidtyEmpty();
        first_name.setCustomValidity("Invalid name");
        return false;
    } else if (middle_name.value.search(/[^A-Za-z\s]/) != -1) {
        setAllValidtyEmpty();
        middle_name.setCustomValidity("Invalid name");
        return false;
    } else if (last_name.value.search(/[^A-Za-z\s]/) != -1) {
        setAllValidtyEmpty();
        last_name.setCustomValidity("Invalid name");
        return false;
    } else if (!phonenumber(phone_num.value)) {
        setAllValidtyEmpty();
        phone_num.setCustomValidity("Invalid phone number");
        return false;
    } else if (role.value === "officer" && !validateEmail(email.value)) {
        setAllValidtyEmpty();
        email.setCustomValidity("Invalid email");
        return false;
    } else if (region.value.search(/[^A-Za-z\s]/) != -1) {
        setAllValidtyEmpty();
        region.setCustomValidity("Invalid input");
        return false;
    } else if (isNaN(yob.value)) {
        setAllValidtyEmpty();
        yob.setCustomValidity(
            "invalid input");
        return false;
    } else if (nationality.value.search(/[^A-Za-z\s]/) != -1) {
        setAllValidtyEmpty();
        nationality.setCustomValidity("Invalid input");
        return false;
    } else if (subcity.value.search(/[^A-Za-z\s]/) != -1) {
        setAllValidtyEmpty();
        subcity.setCustomValidity("Invalid input");
        return false;
    } else if (woreda.value.search(/[^A-Za-z\s]/) != -1) {
        setAllValidtyEmpty();
        woreda.setCustomValidity("Invalid input");
        return false;
    } else {
        setAllValidtyEmpty();
        return true;
    }
}

function validateSignupForm() {
    var form = document.getElementById('signupForm');

    for (var i = 0; i < form.elements.length; i++) {
        if (form.elements[i].value === '' && form.elements[i].hasAttribute('required')) {
            console.log('There are some required fields!');
            return false;
        }
    }

    if (!validateForm()) {
        return false;
    }
    return true;

}
form.addEventListener('submit', function(e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate forms
    let isFormValid = validateSignupForm();

    // submit to the server if the form is valid
    if (isFormValid) {
        form.submit();
    }
});
</script>