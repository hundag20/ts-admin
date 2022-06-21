<?php 
		$link = mysqli_connect("127.0.0.1", "etmilestonecom_ts_user", "ts_password");
		mysqli_select_db($link, "etmilestonecom_trvtps");
		mysqli_query($link, "SET CHARACTER SET utf8");
		?>

<!--php
		$link = mysqli_connect("127.0.0.1", "root", "root",);
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			exit();
		  }
		mysqli_select_db($link, "trvtps");
		mysqli_query($link, "SET CHARACTER SET utf8");
		?>

<-- TODO:
DONE: 1. get html, css, js template
DONE: 2. do login php
DONE: 2.1 do logout php
DONE: 3. do search php
DONE: 4. do update php
DONE: 5. do delete php


DONE: 6. do file upload php

DONE: 9. do add, subscribers
DONE: 10. do update subscribers
DONE: 11. do delete subscribers
 type of report: 
- generic/scheduled -> 1 report file with all types of reports. TITLE/file name: comprehensive report for DATE-RANGE [weekly(july x  mon 2022 - july y sunday 2022) daily(july 2 2022) monthly() annual()]
: includes: total(crash, activated users, fine) subcity(crash, fine)
- custom/@php/@chart -> --customizable chart--

*1. node.js send report (pdf- tables)
- DONE: do send email
*2. customizable [and downloadable] chart
//pie
//DONE: 1. percentage of activated users (piechart)
//DONE: 1. addpercentage of suspended and fined users (piechart)
//DONE: 13. do create announcement
//DONE: 1. fix search
//DONE: 2. fix id display and rank
//DONE: 2. (barchart) total number of fines issued in each day/week/month/(comparisons bar chart)
//DONE: 5. (dognut) total number of tickets issued in each violation level (comparisons dognut)
//DONE: 2. add forgot password for officer
//DONE: 3. add forgot password for admin

TODO:1. do pdf formatted report

TODO:2. remove pwd from returned data

TODO:3. do validations at save.php

TODO:4. do error handling/viewing

TODO:5. add progress animation for add file

TODO:6. fix ui {input fields, coloring}

TODO:7. download the images button for charts 
TODO:8. fix add new user 

NOTE: handle all server side input/data validation @ save.php
NOTE: handle all sql errors like duplicate entry @ save.php
NOTE: create a method of showing alerts for all errors 
REMINDER: 4. check if sql_injection handled || say 'addslashes(htmlentities' is enough instead of parametrizing || test with injections

-->