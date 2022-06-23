<?php
$role = $_POST["role"];
function die_func2($msg){
	echo '<script type="text/javascript">',
	'alert("'.$msg.'");',
	'history.back()',
	'</script>'
	;
}
// error_reporting(E_ERROR | E_PARSE);
try{
if ($_FILES["my_file"]["name"] != "") {
  // Where the file is going to be stored
  $target_dir = "temp/";
  $file = $_FILES["my_file"]["name"];
  $path = pathinfo($file);
  $filename = $path["filename"];
  $ext = $path["extension"];
  $temp_name = $_FILES["my_file"]["tmp_name"];
  $path_filename_ext = $target_dir . $filename . "." . $ext;

  // Check file format
  if ($ext != "csv") {
    throw new Exception("File type not allowed");
  } else {
    move_uploaded_file($temp_name, $path_filename_ext);

    $row = 1;
    $columns = [];
    $column_count = 0;
    $driver_column_count = 12;
    $officer_column_count = 13;
    $driver_columns = [
      "username",
      "first_name",
      "middle_name",
      "last_name",
      "phone_num",
      "sex",
      "level",
      "region",
      "yob",
      "nationality",
      "subcity",
      "woreda",
    ];
    $officer_columns = [
      "username",
      "first_name",
      "middle_name",
      "last_name",
      "phone_num",
      "sex",
      "email",
      "level",
      "region",
      "yob",
      "nationality",
      "subcity",
      "woreda",
    ];

    if ($role == "driver") {
      $column_count = $driver_column_count;
      $columns = $driver_columns;
    } elseif ($role == "officer") {
      $column_count = $officer_column_count;
      $columns = $officer_columns;
    }

    if (($handle = fopen($path_filename_ext, "r")) !== false) {
      while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $num = count($data);

        if ($row == 1) {
          if ($num != $column_count) {
            fclose($handle);
            throw new Exception("invalid number of fields in the file");
            $data = false;
            return;
          }
          for ($c = 0; $c < $num; $c++) {
            if ($data[$c] != $columns[$c]) {
              fclose($handle);
              throw new Exception("invalid field(".$data[$c].") in the file");
              $data = false;
              return;
            }
          }
        }
        
        if($row != 1){
            for ($c = 0; $c < $num; $c++) {   
            $_POST[$columns[$c]] = $data[$c]; 
            }
            $_POST['role'] = $role;
            include 'save.php';
        }
        $row++;
      }
      fclose($handle);
    }
  }
}
}catch(Exception $e) {
  die_func2($e->getMessage());
  }
?>