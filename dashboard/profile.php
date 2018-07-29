<?php
     require_once './class/user.php';

$data= new user();
$usr=$data->viewUserFullDetails( $_SESSION['userId']);
//echo "<pre>";
//print_r($usr);
//echo "</pre>";
?>



<div class="col-10 content_height">
    
    
    
    
    <table border="0" width="100%">
        <?php foreach ($usr as $profile){?>
        <tr>
            <td width="30%">
                <img src="<?php echo "./".$profile['imagePath']; ?>" width="100%" height=auto>
            </td>
            <td>
                <table border="0" width="100%">
                    <tr>
                        <td width="30%"> firstname</td>
                        <td width="40%"> <?php echo $profile['firstname']; ?></td>
                    </tr>
                    <tr>
                        <td width="30%"> lastname</td>
                        <td width="40%"> <?php echo $profile['lastname']; ?></td>
                    </tr>
                    <tr>
                        <td width="30%"> email</td>
                        <td width="40%"> <?php echo $profile['email']; ?></td>
                    </tr>
                    <tr>
                        <td width="30%"> mobileNumber</td>
                        <td width="40%"> <?php echo $profile['mobileNumber']; ?></td>
                    </tr>
                    <tr>
                        <td width="30%"> type</td>
                        <td width="40%"> <?php echo $profile['type']; ?></td>
                    </tr>
                    <tr>
                        <td width="30%"> userName</td>
                        <td width="40%"> <?php echo $profile['userName']; ?></td>
                    </tr>
                                        
                </table>
            </td>
        </tr>
        <?php }?>
        
    </table>
  
  </div>
                </div>