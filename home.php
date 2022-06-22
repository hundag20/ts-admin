<!--  --> <?php
		include "includes/header.php";
		?>
<!-- <table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr> -->

<!-- <tr>
					<td><a href="announcement.php">Announcement</a></td>
					<td>?=counting("announcement", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="fine.php">Fine</a></td>
					<td>?=counting("fine", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="payment.php">Payment</a></td>
					<td>?=counting("payment", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="policy.php">Policy</a></td>
					<td>?=counting("policy", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="policy_1.php">Policy_1</a></td>
					<td>?=counting("policy_1", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="policy_2.php">Policy_2</a></td>
					<td>?=counting("policy_2", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="policy_3.php">Policy_3</a></td>
					<td>?=counting("policy_3", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="report_subscriber.php">Report_subscriber</a></td>
					<td>?=counting("report_subscriber", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="user.php">User</a></td>
					<td>?=counting("user", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td>?=counting("users", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="ussd.php">Ussd</a></td>
					<td>?=counting("ussd", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="vehicle.php">Vehicle</a></td>
					<td>?=counting("vehicle", "id")?></td>
				</tr>
				</table> -->

<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.1.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->






<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row row-cols-2">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Tickets issued</strong>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab"
                                            href="#preview-800" role="tab">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play">
                                                </use>
                                            </svg>in the past month</a></li>
                                </ul>
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-219">
                                        <div class="c-chart-wrapper">
                                            <canvas id="canvas-1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Tickets issued</strong></div>
                        <div class="card-body">
                            <div class="example">
                                <ul id="bar-id" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab"
                                            href="#preview-799" role="tab">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play">
                                                </use>
                                            </svg>in the past week</a></li>

                                </ul>
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-799">
                                        <div class="c-chart-wrapper">
                                            <canvas id="canvas-2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header"><strong>status percentages from
                                all drivers</strong></div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab"
                                            href="#preview-1066" role="tab">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play">
                                                </use>
                                            </svg>Driver status stats</a></li>
                                </ul>
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1066">
                                        <div class="c-chart-wrapper">
                                            <canvas id="canvas-5"></canvas>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Total fines comparison in each offense level</strong>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul id="donut-id" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab"
                                            href="#preview-7991" role="tab">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play">
                                                </use>
                                            </svg>Ticket frequency | offense level</a></li>
                                    </li>
                                </ul>
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-7991">
                                        <div class="c-chart-wrapper">
                                            <canvas id="canvas-3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="vendors/simplebar/js/simplebar.min.js"></script>
<script src="vendors/chart.js/js/chart.min.js"></script>
<script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<script src="js/charts.js"></script>
<script>
// var bar_nav = document.getElementById("bar-id")
// var bar_prev_1 = document.getElementById("preview-799")
// var bar_prev_2 = document.getElementById("preview-800")

// bar_nav.addEventListener("click", function(e) {
//     has_class = bar_nav.querySelector(".active");
//     console.log(e.target.href)
//     if (e.target.href.includes('#preview-799')) {
//         bar_prev_2.classList.remove("active");
//         bar_prev_1.classList.add("active");
//     } else if (e.target.href.includes('#preview-800')) {
//         bar_prev_1.classList.remove("active");
//         bar_prev_2.classList.add("active");
//     }
// });
</script>
<script>
</script>



<?php include "includes/footer.php";?>