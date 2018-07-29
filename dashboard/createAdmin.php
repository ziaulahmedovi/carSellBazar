

 <?php 
    $save_massage='';
    require_once 'class/user.php';
   if (isset($_POST['btn'])){
       $signUp_info= new user();
      $save_massage= $signUp_info->saveSignUpfrom($_POST,$_FILES);
   }
    ?>

<div class="col-10 " >
            <div class="row">
               
                <form action="" method="post" class="form col-12" enctype="multipart/form-data" name="form">
                     <h1 class="text_center">Create Admin</h1>
                     <h3 class="text_center"><?php echo $save_massage ?></h3>
               
                    <div class="">
                        <label for="" class="col-3 text_right">First Name: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="firstname">
                    </div>
                    </div>
                        
                    <div class="">
                        <label for="" class="col-3 text_right">Last Name: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text"  name="lastname">
                    </div>
                    </div>
                        
                    <div class="">
                        <label for="" class="col-3 text_right" >Email: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="email" name="email">
                    </div>
                    </div>
                    <div class="">
                        <label for="" class="col-3 text_right" >Mobile Number: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="mobileNumber">
                    </div>
                    </div>
                        
                        
                        
                    <div class="">
                        <label for="" class="col-3 text_right">User Name: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="userName">
                    </div>
                    </div>
                    
                        
                    <div class="">
                        <label for="" class="col-3 text_right">Password: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="password" name="passWord">
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
                        <label for="" class="col-3 text_right">Image: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="file" name="image">
                    </div>
                    </div>
                    <div class="">
                        <label for="" class="col-3 text_right">Selete Catagory: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                <select name="type" id="" class="">
                    <!--<option value="seller"  >Seller</option>-->
                    <option value="admin">Admin</option>
                </select>
                    </div>
                    </div>
                    <div class="">
                        
                    <div class="col-8">
                        <input type="submit" class="sunmit_btn" value="Create Admin" name="btn" onclick="return validation()">
                    </div>
                    </div>
                </form>
                
            </div>
    
                  
  
  
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
    } else if(document.form.mobileNumber.value.length!=11)
    {
     alert('MobileNumber Should be in 11 char');
     flage=  false;   
    } 
    else if(document.form.passWord.value.length<8 )
    {
     alert('Password Should be atlest 8 char');
     flage=  false;   
    
    } else if(document.form.userName.value.length==0)
    {
     alert('Plz give set a user names');
     flage=  false;   
    }
    else if(document.form.image.value.length==0)
    {
     alert('Plz Selete your Image');
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

