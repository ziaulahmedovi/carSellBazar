<?php

class dataProvider {

    
    public function __construct() {
        $host='localhost';
        $user='root';
        $password='';
        $database='carSellsBazar';
        $this->connection= mysqli_connect($host, $user, $password, $database);
        if(!$this->connection)
            die('Database Not Connct'.mysqli_error($this->connection));       
    
    }
    
    public function viewAllproduct(){
         $sql="SELECT * FROM `products` ORDER BY `id` DESC";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
         
       if($result)   return $result;
        else            echo 'There is no post';
    }
    
    
    public function viewAllPublishproduct(){
         $sql="SELECT * FROM `products` where sold='0' ORDER BY `id` DESC";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
         
       if($result)   return $result;
        else            echo 'There is no post';
    }
    
   
    
       
    
    public function viewProductById($id){
         $sql="SELECT * FROM `products` where `id` =$id";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
         
       if($result)   return $result;
        else            echo 'There is no post';
    }
    
    
    public function viewProductSellerById($id){
         $sql="SELECT * FROM `users` where `id` =$id";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
       if($result)   return $result;
        else            echo 'There is no post';
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
