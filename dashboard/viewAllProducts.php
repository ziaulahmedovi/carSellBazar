    
    <?php
 $massage="";
     require_once './class/product.php';

//require_once './DB/dataProvider.php';
if(isset($_GET['sold']))
{
    $temp=new product();
   $massage= $temp->publish($_GET['sold']);
  // echo"<h1>hbjnkml".$sold."/h1>";
}
if(isset($_GET['deleteProduct']))
{
    $temp=new Product();
   $massage= $temp->deleteProduct($_GET['deleteProduct']);
}


$data= new product();
$products=$data->viewAllproduct();
//echo"<pre>";
//print_r($products);


?>

<div class="col-10 ">
    <h1 class="text_center"><?php echo $massage?></h1>
            <div class="row">
                
                <?php foreach ($products as $product){
                     $epid= $product['id'];
                     ?>
                <div class="col-3 post_content_height ">
                    <img src="<?php echo "./".$product['imagePath']; ?>" width="100%" height="100%">
                </div>
                <div class="col-7 post_content_height">
            
                <pre>
                    
                <b>Price          : </b><?php echo $product['price'] ?><br>
                <b>Brand          : </b><?php echo $product['brand'] ?><br>
                <b>Model Year     : </b><?php echo $product['moderYear'] ?><br>
                <b>Condition      : </b><?php echo $product['condition'] ?><br>
                <b>Engine Capacity: </b><?php echo $product['engineCapacity'] ?><br>
                </pre>
                </div>
                <div class="col-2 post_content_height text_center ">
                    <?php  $usertype=$_SESSION['type'];
                            if($usertype=="seller") $usertype="userDashboard";
                            if($usertype=="admin") $usertype="adminDashboard";
                            ?>
                    <a href="viewProductById.php?pid=<?php echo $product['id']?>">Details</a><br>
                   <?php if($_SESSION['userId']==$product['userId']) {?>

               <a href="<?php echo $usertype;?>.php?editProduct=<?php echo $product['id']?>">Edit</a><br><?php }?>
                
                <a href="<?php echo $usertype;?>.php?deleteProduct=<?php echo $product['id']?>"
                   onclick="return confirm('Are you sure to delete the product?')">Delete</a><br>
              <?php if($_SESSION['userId']==$product['userId']) {?>
                   <a href="<?php echo $usertype;?>.php?sold=<?php echo $product['id']?>"  >
                <?php if ($product['sold']==0) echo 'Sold';
                else    {      $sold=0;   echo 'Publish';}
                ?>
                
                </a><br>
              <?php }
              if($_SESSION['userId']==$product['userId']) echo "<b> Your Product</b>";?>

                   </div>
                                   <div class="col-12 after_each_product"> </div>

                <?php 
              
                }
                
                ?>
            </div>
    
    
</div>
                </div>
                