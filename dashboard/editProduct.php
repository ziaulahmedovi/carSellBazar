
 <?php 
 $editId=$GLOBALS['editProductId'];
    $userId=$_SESSION['userId'];
    $save_massage='';
    require_once './class/product.php';
    require_once './DB/dataProvider.php';
   if (isset($_POST['btn'])){
       $update= new product();
      $save_massage= $update->updateProduct($_POST,$_FILES);
   }
            $data=new dataProvider();
            $products =$data->viewProductById($editId);
          
   
    ?>



<div class="col-10 " >
     <?php foreach ($products as  $product) { ?>
                    
    <form action="" method="post" class="form col-12 add_product_form" enctype="multipart/form-data" name="form">
                          <h1 class="text_center">Update Product</h1>
                          <h3 class="text_center"><?php echo $save_massage;?></h3>
                    <div class="">
                        <label for="" class="col-3 text_right">Brand: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8" >
                        <input type="text" name="brand" value="<?php echo $product['brand'];?>">
                        <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">model year: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="moderYear"  value="<?php echo $product['moderYear'];?>">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">condition: </label>
                    <label for="" class="col-1 " > </label>
                    <div class="col-8">
                        <input type="text" name="condition"   value="<?php echo $product['condition']?>">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">transmission: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8" >
                        <input type="text" name="transmission"  value="<?php echo $product['transmission']?>">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">model name: </label>
                    <label for="" class="col-1 " > </label>
                    <div class="col-8">
                        <input type="text" name="modelName"  value="<?php echo $product['modelName']?>">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">body type: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="bodyType"  value="<?php echo $product['bodyType']?>">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">fuel type: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="fuelType" value="<?php echo $product['fuelType']?>">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">mileage: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="number" name="mileage"  value="<?php echo $product['mileage']?>">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">engine capacity: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="number" name="engineCapacity"  value="<?php echo $product['engineCapacity']?>">
                    </div>
                    </div>  
                    <div class="">
                        <label for="" class="col-3 text_right">Price: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="number" name="price"  value="<?php echo $product['price']?>">
                    </div>
                    </div>  
                    <div class="">
                        <label for="" class="col-3 text_right">Long Description: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <textarea name="longDescription" id="" cols="55" rows="10" >
                            <?php echo $product['longDescription']?>
                        </textarea>
                      
                    </div>
                    </div>     
                       <div class="">
                        <label for="" class="col-3 text_right"> </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <img src="<?php echo "./".$product['imagePath']?>" width="300px" height="200px">
                        <input type="hidden" value="<?php echo$product['imagePath']?>" name="imagePath">
                    </div>
                    </div>  
                           
                       <div class="">
                        <label for="" class="col-3 text_right">Image: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="file" name="image" >
                    </div>
                    </div>  
                           
                    <div class="">
                        <label for="" class="col-3 text_right"> </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="submit" class="sunmit_btn" name="btn" value="Update" onclick="return productValidation()" >
                    </div>
                    </div>
                       <div class="" >
                        <label for="" class="col-3 text_right"> </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="hidden" name="sold" value="<?php $product['sold']?>">
                    </div>
                    </div>     
                       <div class="">
                        <label for="" class="col-3 text_right"> </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="hidden" name="userId" value="<?php echo $userId;?>">
                    </div>
                    </div>
                    
                </form>
                
     <?php }?>
  
  </div>
                </div>
                
                
                
                
                <script type="text/javascript">
                    function productValidation(){
                        flag=true;
                        if(document.form.brand.value.length==0){
                            alert('Band is empty');
                            flag=false;
                            
                        }
                        else if(document.form.moderYear.value.length==0){
                            alert('ModerYear is empty');
                            flag=false;
                            
                        }  else if(document.form.condition.value.length==0){
                            alert('condition is empty');
                            flag=false;
                            
                        }  else if(document.form.transmission.value.length==0){
                            alert('transmission is empty');
                            flag=false;
                            
                        }
                        else if(document.form.bodyType.value.length==0){
                            alert('BodyType is empty');
                            flag=false;
                            
                        }
                        else if(document.form.fuelType.value.length==0){
                            alert('FuelType is empty');
                            flag=false;
                            
                        }
                        else if(document.form.mileage.value.length==0){
                            alert('mileage is empty');
                            flag=false;
                            
                        }
                        else if(document.form.engineCapacity.value.length==0){
                            alert('engineCapacity is empty');
                            flag=false;
                            
                        }
                        else if(document.form.price.value.length==0){
                            alert('price is empty');
                            flag=false;
                            
                        }
                      
                        else if(document.form.longDescription.value.length==0){
                            alert('longDescription is empty');
                            flag=false;
                            
                        }
                      
                        
//                         else if(document.form.image.value.length==0)
//                         {
//                             flage=  false;  
//                            alert('Plz Selete car Image');
//                             
//                         } 
                        return flag;
                    }
                </script>
                