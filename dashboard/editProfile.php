 <?php 
    $save_massage='';
    require_once 'class/user.php';
    $data= new user();
   if (isset($_POST['btn'])){
       //$data= new user();
      $save_massage= $data->updateProfile($_POST,$_FILES);
   }

$usr=$data->viewUserFullDetails( $_SESSION['userId']);
    ?>  


<div class="col-10 ">
          <?php foreach ($usr as $profile){?>

  
    <form action="" method="post" class="form col-12 no_border" enctype="multipart/form-data" name="form">
                     <h1 class="text_center">Update profile</h1>
                     <h3 class="text_center"><?php echo $save_massage ?></h3>
               
                    <div class="">
                        <label for="" class="col-3 text_right">First Name: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="firstname" value="<?php echo $profile['firstname'];?> ">
                    </div>
                    </div>
                        
                    <div class="">
                        <label for="" class="col-3 text_right">Last Name: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text"  name="lastname" value="<?php echo $profile['lastname'];?> " >
                        <input type="hidden"  name="id" value="<?php echo $profile['id'];?> " >
                        <input type="hidden"  name="imagePath" value="<?php echo $profile['imagePath'];?> " >
                        
                    </div>
                    </div>
                        
                    <div class="">
                        <label for="" class="col-3 text_right" >Email: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="email" name="email" value="<?php echo $profile['email'];?> " >
                    </div>
                    </div>
                    <div class="">
                        <label for="" class="col-3 text_right" >Mobile Number: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="mobileNumber" value="<?php echo $profile['mobileNumber'];?> " >
                    </div>
                    </div>
                        
                        
                        
                    <div class="">
                        <label for="" class="col-3 text_right">User Name: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="userName" value="<?php echo $profile['userName'];?> " >
                    </div>
                    </div>
                    
                        
                    <div class="">
                        <label for="" class="col-3 text_right"> </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <img src="<?php echo "./".$profile['imagePath'];?>  " width="300px" height="300px">
                    </div>
                    </div>
                            
                    <div class="">
                        <div for="" class="col-3 text_right">Image: </div>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="file" name="image">
                    </div>
                    </div>
                    <div class="">
                        <label for="" class="col-3 text_right">Selete Catagory: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
<!--                <select name="type" id="" class="">
                    <option value="seller" t >Seller</option>
                    <option value="admin">Admin</option>
                </select>-->
                        <input type="hidden" value="<?php echo $profile['type'] ?>" name="type">
                    </div>
                    </div>
                    <div class="">
                        
                    <div class="col-8">
                        <input type="submit" class="sunmit_btn" value="Update" name="btn" onclick="return validation()">
                    </div>
                    </div>
                </form>
          <?php }?>
  </div>
                </div>
                
                

<script type="text/javascript">
function  validation()
{
    
    flage =true;
    
    if(document.form.firstname.value.length==0)
    {
     alert('Plz fill your name');
     flage= false;   
    }
    else if(document.form.lastname.value.length==0)
    {
     alert('Plz fill your name');
     flage=  false;   
    } else if(document.form.email.value.length==0)
    {
     alert('Plz fill your Email');
     flage=  false;   
    }
//    else if(document.form.mobileNumber.value.length!=11)
//    {
//     alert('MobileNumber Should be in 11 char');
//     flage=  false;   
//     
    else if(document.form.userName.value.length==0)
    {
     alert('Plz give set a user names');
     flage=  false;   
    }
    
        
    
    return flage;
}

</script>
