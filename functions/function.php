<?php
	function get_header(){
		require_once('./includes/header.php');
	}
	function get_navbar(){
		include_once('./includes/navbar.php');
	}
	function get_addvertise(){
		include_once('./includes/advertise.php');
	}
	function get_part($addpart){
		include_once('./includes/'.$addpart);	
	}
	function get_footer(){
		require_once('./includes/footer.php');	
	}
	function get_product_description_by_id($pid){
            $GLOBALS['productDescriptionId']=$pid;
		require_once('./includes/viewProductPescriptionById.php');	
	}
        
//        Dashboard fuction
        
        function auth($type){
            session_start();
            if($_SESSION['user']==NULL || $type!=$_SESSION['type'] )
            header('Location: ./sign_in.php'); 
            }
            
            
        function opossiteAuth(){
            session_start();
            //if($_SESSION['user']!=NULL )
            if(!empty($_SESSION['user']))
            {
                if($_SESSION['type']=="seller")
            header('Location: ./userDashboard.php');  
                if($_SESSION['type']=="admin")
            header('Location: ./adminDashboard.php');         
            
            }
        }

        
	function get_logoutButton(){
		require_once('./dashboard/logoutButton.php');	
	}
	
	function get_DashBoardpart($addpart){
		include_once('./dashboard/'.$addpart);	
	}
	
	function get_dashBoardContent($addpart){
		include_once('./dashboard/'.$addpart);	
	}
	
