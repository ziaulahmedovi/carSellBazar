<?php
require_once './DB/dataProvider.php';
$data= new dataProvider();
$products=$data->viewAllPublishproduct();
//echo"<pre>";
//print_r($products);
?>
            <div class="row">
                <?php foreach ($products as $product){?>
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
                    <a href="viewProductById.php?pid=<?php echo $product['id']?>">Details</a>
                </div>
                                          <div class="col-12 after_each_product"> </div>

                <?php }?>
            </div>
    
        
        
