 <?php 
    $userId=$_SESSION['userId'];
    $save_massage='';
    require_once './class/product.php';
   if (isset($_POST['btn'])){
       $createProduct= new product();
      $save_massage= $createProduct->createProduct($_POST,$_FILES);
   }
    ?>



<div class="col-10 " >
    <form action="" method="post" class="form col-12 add_product_form" enctype="multipart/form-data" name="form">
                          <h1 class="text_center">Create Product</h1>
                          <h3 class="text_center"><?php echo $save_massage;?></h3>
                    <div class="">
                        <label for="" class="col-3 text_right">Brand: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8" >
                        <input type="text" name="brand" value="Lorem">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">model year: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="moderYear" value="2012">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">condition: </label>
                    <label for="" class="col-1 " > </label>
                    <div class="col-8">
                        <input type="text" name="condition" value="Lorem">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">transmission: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8" >
                        <input type="text" name="transmission" value="lorem">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">model name: </label>
                    <label for="" class="col-1 " > </label>
                    <div class="col-8">
                        <input type="text" name="modelName" value="Lorem ipsum dolor">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">body type: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="bodyType" value="lorem">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">fuel type: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="text" name="fuelType" value="lorem">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">mileage: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="number" name="mileage"  value="22222">
                    </div>
                    </div> 
                    <div class="">
                        <label for="" class="col-3 text_right">engine capacity: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="number" name="engineCapacity" value="1500">
                    </div>
                    </div>  
                    <div class="">
                        <label for="" class="col-3 text_right">Price: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="number" value="2000000" name="price">
                    </div>
                    </div>  
                    <div class="">
                        <label for="" class="col-3 text_right">Long Description: </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                       <textarea name="longDescription" id="" cols="55" rows="10" >
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.
                       </textarea>
                        
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
                        <label for="" class="col-3 text_right"> </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="submit" class="sunmit_btn" name="btn" onclick="return productValidation()">
                    </div>
                    </div>
                       <div class="">
                        <label for="" class="col-3 text_right"> </label>
                    <label for="" class="col-1 "> </label>
                    <div class="col-8">
                        <input type="hidden" name="sold" value="0">
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
                