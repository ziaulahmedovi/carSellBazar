<?php
class user{
    
    protected $connection='';
    public function __construct() {
        $host='localhost';
        $user='root';
        $password='';
        $database='carSellsBazar';
        $this->connection= mysqli_connect($host, $user, $password, $database);
        if(!$this->connection)
            die('Database Not Connct'.mysqli_error($this->connection));       
    
    } 
    function saveSignUpfrom($data,$FILES){ 
            $flag='';
            $flag= $this->fullValidation($data);
            if($flag==''){
        if($FILES['image']['name']=="")
         $imagePath="";
        else $imagePath=$this->saveImage($FILES);
      // print_r($FILES);
        
        $sql="INSERT INTO `users` ( `firstname`, `lastname`, `email`,`mobileNumber`, `imagePath`, `type`, `userName`, `passWord`) ".
                "VALUES ( '$data[firstname]', '$data[lastname]', '$data[email]','$data[mobileNumber]', '$imagePath', '$data[type]', '$data[userName]', '$data[passWord]');";
        if( mysqli_query($this->connection, $sql))
           return "Succesfully Save";
        else die('Sql Pblm'.mysqli_error($this->connection));
            }
            
            
                     return $flag;
  
       
    }
    private function fullValidation($data){
    if($data['firstname']==''|| $data['lastname']==''|| $data['email']==''||$data['mobileNumber']==0
            ||  $data['type']==''|| $data['userName']==''|| $data['passWord']=='')
            return "Must have to fill All";
        
        else if(strlen($data['passWord'])<8)
            return "You should enter a Valid userName & your password must be atlest 8 char";
        else if($data['passWord']!=$data['confirmpassword'])
            return "Password doesn't match";
    }

    private function saveImage($FILES){
        $urlPath="assets/uploads/usersImage/";
        $imagePath="./assets/uploads/usersImage/";
        $tergetFile=$urlPath.basename($FILES["image"]["name"]);
        if(move_uploaded_file($FILES["image"]["tmp_name"],$tergetFile))
             $imgName=$urlPath.$FILES["image"]["name"];
        else {
            $imgName="";
            echo"Sorry, there was an error to upload file";
        }
        $abc=$imgName;
            return $imgName;
    }
    
    public function viewUserFullDetails($id){
         $sql="SELECT * FROM `users`  where `id`='$id'";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
         
       if($result)   return $result;
        else            echo 'There is no post';
    }
    
    
    public function viewAllUserFullDetails($id){
         $sql="SELECT * FROM `users`  where NOT `id`='$id' and NOT `type`='superAdmin'";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
         
       if($result)   return $result;
        else            echo 'There is no post';
    }
    
    
        function updateProfile($data,$FILES){ 
//        echo"<pre>";
//        print_r($data);
//        print_r($FILES);
            
             $flag='';
            $flag= $this->editUserValidation($data);
            if($flag==''){
        if($FILES['image']['name']=="")
         $imagePath=$data['imagePath'];
        else $imagePath=$this->updateImage($FILES,$data['imagePath']);
       
         $sql="UPDATE `users` SET `firstname`='$data[firstname]',`lastname`='$data[lastname]',"
                 . "`email`='$data[email]',`mobileNumber`='$data[mobileNumber]',`imagePath`='$imagePath',"
                 . "`type`='$data[type]',`userName`='$data[userName]' WHERE `id`='$data[id]'";
         if(mysqli_query($this->connection, $sql))
        {
                    return "Update Succesfully";
        }
        else {
            //echo $sql.'<br><br><br><br>';
            die('Sql pblm:::: '.$sql.mysqli_error($this->connection));
            }     
            
        } 
        return $flag;
       
    }
      private function editUserValidation($data){
        if($data['firstname']==''|| $data['lastname']==''|| $data['email']==''||$data['mobileNumber']==0
            ||  $data['type']==''|| $data['userName']=='')
            return "Must have to fill All";
      }
      
        public function updateImage($FILES,$filename){
         if (file_exists($filename)) 
            unlink($filename);
         return $this->saveImage($FILES);
    }

    public function changePassword($data){
        $flage= '';
        $flage= $this->passwordValidation($data);
        if($flage==''){
        
        $sql="UPDATE `users` SET `passWord`='$data[passWord]' WHERE `id`='$data[id]'";
         if(mysqli_query($this->connection, $sql))
        {
                    return "Update Succesfully";
        }
        else {
            //echo $sql.'<br><br><br><br>';
            die('Sql pblm:::: '.$sql.mysqli_error($this->connection));
        }   }
   return $flage;
    }
    
     private function passwordValidation($data){
             if(strlen($data['passWord'])<8)
            return "Password must be atlest 8 char";
        else if($data['passWord']!=$data['confirmpassword'])
            return "Password doesn't match";
    }

    public function makeAdmin($id){
        $sql="UPDATE `users` SET `type`= 'admin' WHERE `id`='$id'";
         if(mysqli_query($this->connection, $sql))
        {
                    return "Make Admin Succesfully";
        }
        else {
            //echo $sql.'<br><br><br><br>';
            die('Sql pblm:::: '.$sql.mysqli_error($this->connection));
        }   
    }

    public function removeAdmin($id){
        $sql="UPDATE `users` SET `type`= 'seller' WHERE `id`='$id'";
         if(mysqli_query($this->connection, $sql))
        {
                    return "Remove Admin Succesfully";
        }
        else {
            //echo $sql.'<br><br><br><br>';
            die('Sql pblm:::: '.$sql.mysqli_error($this->connection));
        }   
    }
    
    
     public function deleteUser($pid){
        $sql="DELETE FROM `users` WHERE `id`='$pid'";
        if(mysqli_query($this->connection, $sql))
                return "Delete Succesfully";
        else   die ("Mysql Pblm". mysqli_error($this->connection));
    }
    
    
    
            function getDataByJsonFormate($sql){
    
    $result = mysqli_query($this->connection, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
        
    }


    
}

?>
