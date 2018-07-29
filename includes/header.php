<!DOCTYPE html>
<?php
$type="WellCome TO Our Website";
if(!empty($_SESSION['type']))
    $type=$_SESSION['type'];
                       
?>


<?Php 
    if(isset($_GET['logoutbtn'])){
        require_once './class/loginClass.php';
        $logout= new login();
        $logout->logout();
    }
    ?>
<html xmlns>

    
<head>
<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
   <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
<link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="assets/css/style.css">
<link type="text/css" rel="stylesheet" href="assets/css/responsive.css">

<title>Index</title>
</head>

<body>


        <div class="wrapper">
            <div class="row">
                <div class="col-3 header_top_height text_center"><strong><a href="./index.php">CarSellBazar.Com</a></strong></div>
                <div class="col-7 header_top_height text_center text_capital"><b><?php echo $type;?></b></div>
                <div class="col-2 header_top_height text_center"><?php if(empty($_SESSION)){?>
                <a href="sign_in.php">Sign in</a>&nbsp;<strong>OR</strong>&nbsp;<a href="sign_up.php">Sign up</a>
                
                <?php }  else {?>
                <button > <a href="?logoutbtn=logout">Log Out</a></button><?php }?>

                </div>
            </div>