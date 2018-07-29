<?php

class product {
        
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
    
    function createProduct($data,$FILES){ 
//        echo"<pre>";
//        print_r($data);
//        print_r($FILES);
        $flage='';
        $flage= $this->productValidation($data);
        if($flage==''){
        if($FILES['image']['name']=="")
         $imagePath="";
        else $imagePath=$this->saveImage($FILES);
       
        $sql="INSERT INTO `products` ( `brand`, `moderYear`, `condition`, `transmission`,`modelName`, `bodyType`, ".
                "`fuelType`, `mileage`, `engineCapacity`, `imagePath`,`price`,`longDescription`, `sold`, `userId`)".
                " VALUES ('$data[brand]', '$data[moderYear]', '$data[condition]', ".
                "'$data[transmission]', '$data[modelName]', '$data[bodyType]', '$data[fuelType]',".
                " '$data[mileage]', '$data[engineCapacity]', '$imagePath', '$data[price]', '$data[longDescription]', '$data[sold]', '$data[userId]');";
        if( mysqli_query($this->connection, $sql))
           return "Succesfully Save";
        else die('Sql Pblm'.mysqli_error($this->connection));
        }
        return $flage;
       
    }
    private function productValidation($data){
        if($data['brand']==''|| $data['moderYear']==''||$data['condition']==''||$data['transmission']<0||
                $data['modelName']==''||$data['bodyType']==''||$data['fuelType']==''||$data['mileage']<0||
                $data['engineCapacity']<0||$data['price']<0||$data['longDescription']='')
            return "You must have to fill all";
        
        
    }
            function updateProduct($data,$FILES){ 
//        echo"<pre>";
//        print_r($data);
//        print_r($FILES);
                
                $flage='';
        $flage= $this->productValidation($data);
        if($flage==''){
        if($FILES['image']['name']=="")
         $imagePath=$data['imagePath'];
        else $imagePath=$this->updateImage($FILES,$data['imagePath']);
       
         $sql="UPDATE `products` SET `brand`='$data[brand]',`moderYear`='$data[moderYear]',`condition`='$data[condition]',".
           "`transmission`='$data[transmission]',`modelName`='$data[modelName]',`bodyType`='$data[bodyType]',`fuelType`='$data[fuelType]',".
           "`mileage`='$data[mileage]',`engineCapacity`='$data[engineCapacity]',`imagePath`='$imagePath',`price`='$data[price]',".
              "`longDescription`='$data[longDescription]',`sold`='$data[sold]',`userId`='$data[userId]' WHERE `id`='$data[id]'";
       
         if(mysqli_query($this->connection, $sql))
        {
                    return "Update Succesfully";
        }
        else {
            //echo $sql.'<br><br><br><br>';
            die('Sql pblm'.mysqli_error($this->connection));
        }      
        }
        return $flage;
    }
    
        public function viewAllproduct(){
            $usrId=$_SESSION['userId'];
           if($_SESSION['type']=='admin')
         $sql="SELECT * FROM `products` ORDER BY `id` DESC";
           
           else if($_SESSION['type']!='admin')
         $sql="SELECT * FROM `products` where `userId` = '$usrId' ORDER BY `id` DESC";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
         
       if($result)   return $result;
        else            echo 'There is no post';
    } 
    
    public function viewAllproductByUserId($id){
         $sql="SELECT * FROM `products`  where `userId`='$id' ORDER BY `id` DESC";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
         
       if($result)   return $result;
        else            echo 'There is no post';
    }
    function publish($id){ 
        
     $sql="UPDATE `products` SET `sold`=NOT `sold` WHERE `id`='$id'";
       
         if(mysqli_query($this->connection, $sql))
        {
                    return "Update Succesfully";
        }
        else {
            //echo $sql.'<br><br><br><br>';
            die('Sql pblm'.mysqli_error($this->connection));
        }      
       
    }
    public function saveImage($FILES){
        $urlPath="assets/uploads/productsImage/";
        $imagePath="./assets/uploads/productsImage/";
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
    public function updateImage($FILES,$filename){
         if (file_exists($filename)) 
            unlink($filename);
         return $this->saveImage($FILES);
    }

    public function deleteProduct($pid){
        $sql="DELETE FROM `products` WHERE `id`='$pid'";
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
