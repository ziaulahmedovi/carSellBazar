<?php
	require_once('functions/function.php');
        auth("admin");
	get_header();
       // get_logoutButton();
	get_navbar();
	get_addvertise();
	get_DashBoardpart('adminDashboardContent.php');
	get_footer();
?>




