<?php
	require_once('functions/function.php');
        auth("seller");     
	get_header();
        //get_logoutButton();
	get_navbar();
	get_addvertise();
	get_DashBoardpart('userDashboardContent.php');
	get_footer();
?>




