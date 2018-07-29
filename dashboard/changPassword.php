<?php $save_massage="";
    require_once 'class/user.php';
 if (isset($_POST['btn'])){
       $updatePassword= new user();
      $save_massage= $updatePassword->changePassword($_POST);
   }
?>

<div class="col-10   no_border">
    <form action="" method="post" class="form col-12 no_border" enctype="multipart/form-data" name="form">
                     <h1 class="text_center">Change Password</h1>
                     <h3 class="text_center"><?php echo $save_massage ?></h3>
                         
                    <div class="">
                        <label for="" class="col-3 text_right">Password: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="password" name="passWord">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['userId'];?>">
                    </div>
                    </div>
                        
                    <div class="">
                        <label for="" class="col-3 text_right">Confirm Password: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="password" name="confirmpassword">
                    </div>
                    </div>
                    <div class="">
                        <label class="col-4 no_border"></label>  
                    <div class="col-8">
                        <input type="submit" class="sunmit_btn" value="Change Password" name="btn" onclick="return validation()">
                    </div>
                    </div>
     </form>
    
    
</div>
                </div>
                
      
<script type="text/javascript">
function  validation()
{
      if(document.form.passWord.value.length<8 )
    {
     alert('Password Should be atlest 8 char');
     flage=  false;   
    
    }          
                
                
    else  if(document.form.passWord.value != document.form.confirmpassword.value)
        {
            alert('Password should be match');
                 flage=  false;   
            

        }
        
        
    
    return flage;
}

</script>