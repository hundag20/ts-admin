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

- TODO: do pdf formatted report

//barchart
//TODO: 2. total number of fines issued in each day/week/month/(comparisons bar chart)

//dognut
//TODO: 5. total number of tickets issued in each violation level (comparisons dognut)
}
(if charts not downloadable then go back to node.js and save all daily,weekly,monthly, annual reports and put download last(day's, week's, month's, year's) report @ web)



TODO:8. add forgot password

TODO:1. fix search
TODO:2. fix id display and rank
TODO:3. remove pwd from returned data

TODO:5. do validations at save.php

TODO:6. do error handling/viewing

TODO:7. add progress animation for add file.

TODO:8. fix ui {input fields, coloring}

NOTE: handle all server side input/data validation @ save.php
NOTE: handle all sql errors like duplicate entry @ save.php
NOTE: create a method of showing alerts for all errors 
REMINDER: 4. check if sql_injection handled || say 'addslashes(htmlentities' is enough instead of parametrizing || test with injections

-->