<!-- <ul id="main-menu" class="">
			
    <li class="active opened active"><a href="index.php"><i class="entypo-gauge"></i><span>Dashboard</span></a></li>
                
	<li><a href="new_entry.php"><i class="entypo-user-add"></i><span>New Registration</span></a>                
				
	<li><a href="payments.php"><i class="entypo-star"></i><span>Payments</span></a></li>

	<li><a href="category.php"><i class="entypo-users"></i><span>Members</span></a>
		<ul>
			<li class="active">
				<a href="view_mem.php"><span>View Members</span></a></li>

			<li><a href="table_view.php"><span>View / Enter Schedule</span></a></li>
		</ul>
	</li>

	<li><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> 	

		<li><a href="#"><i class="entypo-quote"></i><span>Plan</span></a>

		<ul>
			<li class="active">
				<a href="new_plan.php"><span>New Plan</span></a></li>

			<li><a href="change_values.php"><span>Edit Subsciption Details</span></a></li>
		</ul>

	<li><a href="new_plan.php"><i class="entypo-box"></i><span>Overview</span></a>

		<ul>
			<li class="active">
				<a href="over_members_month.php"><span>Members per Month</span></a>
			</li>

			<li>
				<a href="over_members_year.php"><span>Members per Year</span></a>
			</li>

			<li>
				<a href="revenue_month.php"><span>Income per Month</span></a>
			</li>			

		</ul>

	<li><a href="new_plan.php"><i class="entypo-alert"></i><span>Alerts</span></a>

		<ul>
			<li class="active">
				<a href="unpaid.php"><span>Unpaid Members</span></a>
			</li>

			<li>
				<a href="sub_end.php"><span>Ending Membership</span></a>
			</li>

		</ul>

	</li>

	<li><a href="more-userprofile.php"><i class="entypo-folder"></i><span>Profile</span></a></li>

	<li><a href="logout.php"><i class="entypo-logout"></i><span>Logout</span></a></li> 

</ul>	-->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon">
			<img src="../../img/bg.png" alt="" width="70" />
		</div>
		<div class="sidebar-brand-text mx-2">Admin</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="index.php">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Trang Ch???</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<li class="nav-item">
		<a class="nav-link" href="new_entry.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Th??m th??nh vi??n</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="payments.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Thanh To??n</span></a>
	</li>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Th??nh Vi??n</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="view_mem.php">Xem Th??nh Vi??n</a>
				<a class="collapse-item" href="table_view.php">Xem / ?????t l???ch</a>
			</div>
		</div>
	</li>

	<!-- <li class="nav-item">
		<a class="nav-link" href="new_health_status.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>T??nh tr???ng s???c kh???e</span></a>
	</li> -->

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsettsk" aria-expanded="true" aria-controls="collapsettsk">
			<i class="fas fa-fw fa-cog"></i>
			<span>T??nh tr???ng s???c kh???e</span>
		</a>
		<div id="collapsettsk" class="collapse" aria-labelledby="headingttsk" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="new_health_status.php">Th??m T??nh tr???ng</a>
				<a class="collapse-item" href="view_health.php">Xem danh s??ch</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>G??i t???p</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="new_plan.php">Th??m g??i t???p</a>
				<a class="collapse-item" href="change_values.php">S???a th??ng tin</a>
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_ove" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>T???ng Quan</span>
		</a>
		<div id="collapseUtilities_ove" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="over_members_month.php">Th??nh vi??n theo th??ng</a>
				<a class="collapse-item" href="over_members_year.php">Th??nh vi??n theo n??m</a>
				<!-- <a class="collapse-item" href="revenue_month.php">Income per Month ??</a> -->
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_al" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Th??ng b??o</span>
		</a>
		<div id="collapseUtilities_al" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="unpaid.php">Ch??a thanh to??n</a>
				<a class="collapse-item" href="sub_end.php">Gia h???n</a>
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="more-userprofile.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Profile</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="/baitap/baitap.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>B??i t???p</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="logout.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Logout</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>