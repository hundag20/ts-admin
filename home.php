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
    <header class="header header-sticky mb-4">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button"
                onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button><a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#full"></use>
                </svg></a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="header-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg></a></li>
            </ul>
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Account</div>
                        </div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                            </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                            </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Settings</div>
                        </div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg> Profile</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                            </svg> Settings</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                            </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                            </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg> Lock Account</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><a href="#">Components</a>
                    </li>
                    <li class="breadcrumb-item active"><span>Charts</span></li>
                </ol>
            </nav>
        </div>
    </header>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row row-cols-2">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Chart</strong><span class="small ms-1">Line</span>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab"
                                            href="#preview-219" role="tab">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play">
                                                </use>
                                            </svg>Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" href="http://www.chartjs.org/"
                                            target="_blank">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code">
                                                </use>
                                            </svg>Code</a></li>
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
                        <div class="card-header"><strong>Chart</strong><span class="small ms-1">Bar</span></div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab"
                                            href="#preview-477" role="tab">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play">
                                                </use>
                                            </svg>Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" href="http://www.chartjs.org/"
                                            target="_blank">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code">
                                                </use>
                                            </svg>Code</a></li>
                                </ul>
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-477">
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
                        <div class="card-header"><strong>Chart</strong><span class="small ms-1">Radar</span>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul id="donut-id" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab"
                                            href="#preview-799" role="tab">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play">
                                                </use>
                                            </svg>Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab"
                                            href="#preview-800" role="tab">
                                            <svg class="icon me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play">
                                                </use>
                                            </svg>Preview</a></li>
                                    </li>
                                </ul>
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-799">
                                        <div class="c-chart-wrapper">
                                            <canvas id="canvas-3"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 preview" role="tabpanel" id="preview-800">
                                        <div class="c-chart-wrapper">
                                            <canvas id="canvas-7"></canvas>
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
    <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> ©
            2022
            creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
    </footer>
</div>
<!-- CoreUI and necessary plugins-->
<script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="vendors/simplebar/js/simplebar.min.js"></script>
<script src="vendors/chart.js/js/chart.min.js"></script>
<script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<script src="js/charts.js"></script>
<script>
var donut_nav = document.getElementById("donut-id")
var donut_prev_1 = document.getElementById("preview-799")
var donut_prev_2 = document.getElementById("preview-800")

donut_nav.addEventListener("click", function(e) {
    has_class = donut_nav.querySelector(".active");
    console.log(e.target.href)
    if (e.target.href.includes('#preview-799')) {
        donut_prev_2.classList.remove("active");
        donut_prev_1.classList.add("active");
    } else if (e.target.href.includes('#preview-800')) {
        donut_prev_1.classList.remove("active");
        donut_prev_2.classList.add("active");
    }
});
</script>
<script>
</script>




<!-- <?php include "includes/footer.php";?> -->