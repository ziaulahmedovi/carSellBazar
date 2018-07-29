<?php

//echo "<pre>";
//print_r($usr);
//echo "</pre>";
   
  $massage="";
       require_once './class/user.php';

   $data= new user();

 //require_once './DB/dataProvider.php';
if(isset($_GET['deleteUser']))
{
    $massage=$data->deleteUser($_GET['deleteUser']);
  //echo $_GET['deleteUser'];
 }
if(isset($_GET['removeAdmin']))
{
    $massage=$data->removeAdmin($_GET['removeAdmin']);
  //echo $_GET['deleteUser'];
 }
if(isset($_GET['makeAdmin']))
{
    $massage=$data->makeAdmin($_GET['makeAdmin']);
 // echo $_GET['makeAdmin'];
 }
 
$usr=$data->viewAllUserFullDetails( $_SESSION['userId']);

?>



<div class="col-10 ">
    
    
        <h1 class="text_center"><?php echo $massage?></h1>

    
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
        <tr>
            <td>
                <?php $usertype="adminDashboard"?>
                <a href="<?php echo $usertype;?>.php?deleteUser=<?php echo $profile['id']?>"
                   onclick="return confirm('Are you sure to delete the User?')"><button>Delete</button></a>  &nbsp;&nbsp;&nbsp;
                <?php if($profile['type']=='admin'){?>
                <a href="<?php echo $usertype;?>.php?removeAdmin=<?php echo $profile['id']?>"
                   onclick="return confirm('Are you sure to remove the Admin?')"><button>Remove Admin</button> </a><?php }else { ?> 
                <a href="<?php echo $usertype;?>.php?makeAdmin=<?php echo $profile['id']?>"
                   onclick="return confirm('Are you sure to Make the user into Admin?')"><button>Make Admin</button> </a> <?php }?>
                
                
            </td>
            <td></td>
        </tr>
        <tr><td colspan="3" >
                          <div class="col-12 after_each_product"> </div>
           
        
        </tr>
        
        <?php }?>
        
    </table>
  
  </div>
                </div>