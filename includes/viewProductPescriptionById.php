<?php
    $pid=$GLOBALS['productDescriptionId'];
     require_once './DB/dataProvider.php';
            $data=new dataProvider();
            $products =$data->viewProductById($pid);
            $selller =$data->viewProductSellerById($products[0]['userId']);
           //echo"<pre>";
         // print_r($selller);
           // echo"</pre>";
            
            
?>




            <div class="row">
                <div class="col-8 no_border  " >
                     <?php foreach ($products as  $product) { ?>
                         
                    <img src="<?php echo "./".$product['imagePath']; ?>" width="600px" height="300px"/>
                    <p class="text_justify">
                        <?php echo $product['longDescription'];?>
                    </p>
                </div>
                <div class="col-4 " >
                    
                   
                    <b>Price    ::</b><?php echo $product['price'];?><br>
                    <b>Brand    ::</b><?php echo $product['brand'];?><br>
                    <b>ModerYear::</b><?php echo $product['moderYear'];?><br>
                    <b>Condition::</b><?php echo $product['condition'];?><br>
                    <b>Transmission::</b><?php echo $product['transmission'];?><br>
                    <b>ModelName::</b><?php echo $product['modelName'];?><br>
                    <b>BodyType::</b><?php echo $product['bodyType'];?><br>
                    <b>FuelType::</b><?php echo $product['fuelType'];?><br>
                    <b>FuelType::</b><?php echo $product['fuelType'];?><br>
                    <b>Mileage::</b><?php echo $product['mileage'];?><br>
                    <b>EngineCapacity::</b><?php echo $product['engineCapacity'];?><br><br><br><br><br><br>
                    <h3>Seller Information</h3>
                    <img src="<?php echo "./".$selller[0]['imagePath']; ?>" width="200px" height="200px"/><br>
                    <b>Name ::</b><?php echo $selller[0]['firstname']." ".$selller[0]['lastname'];?><br>
                    <b>Email ::</b><?php echo $selller[0]['email'];?><br>
                    <b> MobileNumber ::</b><?php echo $selller[0]['mobileNumber'];?><br>
                        
                 
                    
                    <?php }?>
                  
                </div>
            </div>