<?php
class login{
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

     function login($data){
         $admin=$data['userName'];
        $password= $data['passWord'];
        if(strlen($admin)==0||strlen($password)<8)
            return "You should enter a Valid userName & your password must be atlest 8 char";
        $sql="SELECT * FROM `users` where userName='$admin' AND passWord='$password'";
        
        $result=array();
        $result=$this->getDataByJsonFormate($sql);
        $result=json_decode($result,true);
         
       if($result){
                session_start();
                $_SESSION['user']=$admin;
                $_SESSION['password']=$password;
                $_SESSION['type']=$result[0][type];
                $_SESSION['userId']=$result[0][id];

            if($result[0][type]=="seller")
                header('Location:./userDashboard.php');
            else if($result[0][type]=="admin")
                header('Location:./adminDashboard.php');
       }
       else
           return "Wong Email or Pssword !!!!!";  
       
     
    }
    function logout()
    {
        session_start();
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        unset($_SESSION['type']);
        unset($_SESSION['userId']);
        
         header('Location: ./sign_in.php');
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
function  __destruct(){
    
    
}
?>