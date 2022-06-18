<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "announcement" || $cat_get == "announcement") {
					$announced_by = addslashes(htmlentities($_POST["announced_by"], ENT_QUOTES));
$date = addslashes(htmlentities($_POST["date"], ENT_QUOTES));
$roles = addslashes(htmlentities($_POST["roles"], ENT_QUOTES));
$message == "";
$message1 = addslashes(htmlentities($_POST["message1"], ENT_QUOTES));
$message2 = addslashes(htmlentities($_POST["message2"], ENT_QUOTES));
$message3 = addslashes(htmlentities($_POST["message3"], ENT_QUOTES));
if($roles == "officers"){
    $message = $message1;
}else if($roles == "drivers"){
	$message = $message2;
}else{
	$message = $message3;
}
				if($act == "add") {
					mysqli_query($link, "INSERT INTO `announcement` (  `announced_by` , `roles` , `message` ) VALUES ( '".$announced_by."' , '".$roles."' , '".$message."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `announcement` SET  `announced_by` =  '".$announced_by."' , `date` =  '".$date."' , `roles` =  '".$roles."' , `message` =  '".$message."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `announcement` WHERE id = '".$id_get."' ");
					}
					header("location:"."announcement.php");
				}
				
				if($cat == "fine" || $cat_get == "fine") {
					$issued_to = addslashes(htmlentities($_POST["issued_to"], ENT_QUOTES));
$issued_by = addslashes(htmlentities($_POST["issued_by"], ENT_QUOTES));
$location = addslashes(htmlentities($_POST["location"], ENT_QUOTES));
$date = addslashes(htmlentities($_POST["date"], ENT_QUOTES));
$time = addslashes(htmlentities($_POST["time"], ENT_QUOTES));
$date_time = addslashes(htmlentities($_POST["date_time"], ENT_QUOTES));
$offence_level = addslashes(htmlentities($_POST["offence_level"], ENT_QUOTES));
$offence_code = addslashes(htmlentities($_POST["offence_code"], ENT_QUOTES));
$plate_num = addslashes(htmlentities($_POST["plate_num"], ENT_QUOTES));
$remark = addslashes(htmlentities($_POST["remark"], ENT_QUOTES));
$payment_order_num = addslashes(htmlentities($_POST["payment_order_num"], ENT_QUOTES));
$signature_pic = addslashes(htmlentities($_POST["signature_pic"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `fine` (  `issued_to` , `issued_by` , `location` , `date` , `time` , `date_time` , `offence_level` , `offence_code` , `plate_num` , `remark` , `payment_order_num` , `signature_pic` ) VALUES ( '".$issued_to."' , '".$issued_by."' , '".$location."' , '".$date."' , '".$time."' , '".$date_time."' , '".$offence_level."' , '".$offence_code."' , '".$plate_num."' , '".$remark."' , '".$payment_order_num."' , '".$signature_pic."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `fine` SET  `issued_to` =  '".$issued_to."' , `issued_by` =  '".$issued_by."' , `location` =  '".$location."' , `date` =  '".$date."' , `time` =  '".$time."' , `date_time` =  '".$date_time."' , `offence_level` =  '".$offence_level."' , `offence_code` =  '".$offence_code."' , `plate_num` =  '".$plate_num."' , `remark` =  '".$remark."' , `payment_order_num` =  '".$payment_order_num."' , `signature_pic` =  '".$signature_pic."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `fine` WHERE id = '".$id_get."' ");
					}
					header("location:"."fine.php");
				}
				
				if($cat == "payment" || $cat_get == "payment") {
					$ticket_id = addslashes(htmlentities($_POST["ticket_id"], ENT_QUOTES));
$amount = addslashes(htmlentities($_POST["amount"], ENT_QUOTES));
$date = addslashes(htmlentities($_POST["date"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `payment` (  `ticket_id` , `amount` , `date` ) VALUES ( '".$ticket_id."' , '".$amount."' , '".$date."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `payment` SET  `ticket_id` =  '".$ticket_id."' , `amount` =  '".$amount."' , `date` =  '".$date."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `payment` WHERE id = '".$id_get."' ");
					}
					header("location:"."payment.php");
				}
				
				if($cat == "policy" || $cat_get == "policy") {
					$offense_code = addslashes(htmlentities($_POST["offense_code"], ENT_QUOTES));
$original_amount = addslashes(htmlentities($_POST["original_amount"], ENT_QUOTES));
$recurrence_fee = addslashes(htmlentities($_POST["recurrence_fee"], ENT_QUOTES));
$deadline_count = addslashes(htmlentities($_POST["deadline_count"], ENT_QUOTES));
$deadline_interest = addslashes(htmlentities($_POST["deadline_interest"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `policy` (  `offense_code` , `original_amount` , `recurrence_fee` , `deadline_count` , `deadline_interest` ) VALUES ( '".$offense_code."' , '".$original_amount."' , '".$recurrence_fee."' , '".$deadline_count."' , '".$deadline_interest."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `policy` SET  `offense_code` =  '".$offense_code."' , `original_amount` =  '".$original_amount."' , `recurrence_fee` =  '".$recurrence_fee."' , `deadline_count` =  '".$deadline_count."' , `deadline_interest` =  '".$deadline_interest."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `policy` WHERE id = '".$id_get."' ");
					}
					header("location:"."policy.php");
				}
				
				if($cat == "policy_1" || $cat_get == "policy_1") {
					$level = addslashes(htmlentities($_POST["level"], ENT_QUOTES));
$points = addslashes(htmlentities($_POST["points"], ENT_QUOTES));
$first_time_fee = addslashes(htmlentities($_POST["first_time_fee"], ENT_QUOTES));
$non_first_time_fee = addslashes(htmlentities($_POST["non_first_time_fee"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `policy_1` (  `level` , `points` , `first_time_fee` , `non_first_time_fee` ) VALUES ( '".$level."' , '".$points."' , '".$first_time_fee."' , '".$non_first_time_fee."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `policy_1` SET  `level` =  '".$level."' , `points` =  '".$points."' , `first_time_fee` =  '".$first_time_fee."' , `non_first_time_fee` =  '".$non_first_time_fee."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `policy_1` WHERE id = '".$id_get."' ");
					}
					header("location:"."policy_1.php");
				}
				
				if($cat == "policy_2" || $cat_get == "policy_2") {
					$level = addslashes(htmlentities($_POST["level"], ENT_QUOTES));
$months_suspended = addslashes(htmlentities($_POST["months_suspended"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `policy_2` (  `level` , `months_suspended` ) VALUES ( '".$level."' , '".$months_suspended."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `policy_2` SET  `level` =  '".$level."' , `months_suspended` =  '".$months_suspended."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `policy_2` WHERE id = '".$id_get."' ");
					}
					header("location:"."policy_2.php");
				}
				
				if($cat == "policy_3" || $cat_get == "policy_3") {
					$days_overdue = addslashes(htmlentities($_POST["days_overdue"], ENT_QUOTES));
$percentage = addslashes(htmlentities($_POST["percentage"], ENT_QUOTES));
$points = addslashes(htmlentities($_POST["points"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `policy_3` (  `days_overdue` , `percentage` , `points` ) VALUES ( '".$days_overdue."' , '".$percentage."' , '".$points."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `policy_3` SET  `days_overdue` =  '".$days_overdue."' , `percentage` =  '".$percentage."' , `points` =  '".$points."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `policy_3` WHERE id = '".$id_get."' ");
					}
					header("location:"."policy_3.php");
				}
				
				if($cat == "report_subscriber" || $cat_get == "report_subscriber") {
					$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$schedule = addslashes(htmlentities($_POST["schedule"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `report_subscriber` (  `email` , `schedule` ) VALUES ( '".$email."' , '".$schedule."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `report_subscriber` SET  `email` =  '".$email."' , `schedule` =  '".$schedule."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `report_subscriber` WHERE id = '".$id_get."' ");
					}
					header("location:"."report_subscriber.php");
				}
				
				if($cat == "user" || $cat_get == "user") {
					$username = addslashes(htmlentities($_POST["username"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
$suspended_for = addslashes(htmlentities($_POST["suspended_for"], ENT_QUOTES));
$points = addslashes(htmlentities($_POST["points"], ENT_QUOTES));
$first_time = addslashes(htmlentities($_POST["first_time"], ENT_QUOTES));
$first_name = addslashes(htmlentities($_POST["first_name"], ENT_QUOTES));
$middle_name = addslashes(htmlentities($_POST["middle_name"], ENT_QUOTES));
$last_name = addslashes(htmlentities($_POST["last_name"], ENT_QUOTES));
$phone_num = addslashes(htmlentities($_POST["phone_num"], ENT_QUOTES));
$sex = addslashes(htmlentities($_POST["sex"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$level = addslashes(htmlentities($_POST["level"], ENT_QUOTES));
$region = addslashes(htmlentities($_POST["region"], ENT_QUOTES));
$authority = addslashes(htmlentities($_POST["authority"], ENT_QUOTES));
$yob = addslashes(htmlentities($_POST["yob"], ENT_QUOTES));
$nationality = addslashes(htmlentities($_POST["nationality"], ENT_QUOTES));
$subcity = addslashes(htmlentities($_POST["subcity"], ENT_QUOTES));
$woreda = addslashes(htmlentities($_POST["woreda"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `user` (  `username` , `password` , `status` , `suspended_for` , `points` , `first_time` , `first_name` , `middle_name` , `last_name` , `phone_num` , `sex` , `role` , `email` , `level` , `region` , `authority` , `yob` , `nationality` , `subcity` , `woreda` ) VALUES ( '".$username."' , '".md5($password)."', '".$status."' , '".$suspended_for."' , '".$points."' , '".$first_time."' , '".$first_name."' , '".$middle_name."' , '".$last_name."' , '".$phone_num."' , '".$sex."' , '".$role."' , '".$email."' , '".$level."' , '".$region."' , '".$authority."' , '".$yob."' , '".$nationality."' , '".$subcity."' , '".$woreda."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `user` SET  `username` =  '".$username."' , `status` =  '".$status."' , `suspended_for` =  '".$suspended_for."' , `points` =  '".$points."' , `first_time` =  '".$first_time."' , `first_name` =  '".$first_name."' , `middle_name` =  '".$middle_name."' , `last_name` =  '".$last_name."' , `phone_num` =  '".$phone_num."' , `sex` =  '".$sex."' , `role` =  '".$role."' , `email` =  '".$email."' , `level` =  '".$level."' , `region` =  '".$region."' , `authority` =  '".$authority."' , `yob` =  '".$yob."' , `nationality` =  '".$nationality."' , `subcity` =  '".$subcity."' , `woreda` =  '".$woreda."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `user` WHERE id = '".$id_get."' ");
					}
					header("location:"."user.php");
				}
				
				if($cat == "users" || $cat_get == "users") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				
				if($cat == "ussd" || $cat_get == "ussd") {
					$session_id = addslashes(htmlentities($_POST["session_id"], ENT_QUOTES));
$license_id = addslashes(htmlentities($_POST["license_id"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `ussd` (  `session_id` , `license_id` ) VALUES ( '".$session_id."' , '".$license_id."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `ussd` SET  `session_id` =  '".$session_id."' , `license_id` =  '".$license_id."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `ussd` WHERE id = '".$id_get."' ");
					}
					header("location:"."ussd.php");
				}
				
				if($cat == "vehicle" || $cat_get == "vehicle") {
					$plate_num = addslashes(htmlentities($_POST["plate_num"], ENT_QUOTES));
$motor_type = addslashes(htmlentities($_POST["motor_type"], ENT_QUOTES));
$model_type = addslashes(htmlentities($_POST["model_type"], ENT_QUOTES));
$year_of_manuf = addslashes(htmlentities($_POST["year_of_manuf"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `vehicle` (  `plate_num` , `motor_type` , `model_type` , `year_of_manuf` ) VALUES ( '".$plate_num."' , '".$motor_type."' , '".$model_type."' , '".$year_of_manuf."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `vehicle` SET  `plate_num` =  '".$plate_num."' , `motor_type` =  '".$motor_type."' , `model_type` =  '".$model_type."' , `year_of_manuf` =  '".$year_of_manuf."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `vehicle` WHERE id = '".$id_get."' ");
					}
					header("location:"."vehicle.php");
				}
				?>