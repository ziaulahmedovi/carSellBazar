  
 <?php 
    $message='';
    //require_once(. 'class/loginClass.php'));
//    require_once '../.././class/loginClass.php';

    require_once './class/loginClass.php';  
if (isset($_POST['btn'])){
       $login= new login();
       $message=$login->login($_POST);
   }
    ?>


              
              <div class="row">
               
                  <form action="" method="post" class="form col-12"  name="form">
                     <h1 class="text_center">Login Account</h1>
                     <h3 class="text_center"><?php echo $message ?></h3>
               
                        
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
                        
                        <label for="" class="col-3 text_right"></label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="submit" class="sunmit_btn" value="Sign In" name="btn"   onclick="return validation()">
                    </div>
                </form>
                
            </div>




<script type="text/javascript">
function  validation()
{
    
    flage =true;
    
     if(document.form.userName.value.length==0)
    {
     alert('Plz enter  a user names');
     flage=  false;   
    }
  
    else if(document.form.passWord.value.length<8 )
    {
     alert('Password Should be atlest 8 char');
     flage=  false;   
    
    }     
        
    
    return flage;
}

</script>