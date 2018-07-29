    <?php
        require_once('functions/function.php');
       // echo  $_SESSION['type'];
    ?>

            <div class="row">
                <div class="col-2  ul_for_menu no_border">
                        <a href="?request=profile"><li>Profile</li></a>
                        <a href="?request=editPrifile"><li>Edit Profile</li></a>
                        <a href="?request=changPassword"><li>Change Password</li></a>
                        <a href="?request=createProduct"><li>Create Product</li></a>
                        <a href="?request=createAdmin"><li>Create Admin</li></a>
                        <a href="?request=manageUser"><li>Manage User</li></a>
                        <a href="?request=viewAll"><li>View all Products</li></a>
<!--                        <a href="?request=manageAdd"><li>Manage Add</li></a>
                        <a href="?request=createAdd"><li>Create Add</li></a>-->
                  
                </div>
                
                <?php
                if(isset($_GET["request"])){     
                    if($_GET["request"]=="profile")
                        get_dashBoardContent("profile.php");
                   else if($_GET["request"]=="editPrifile")
                        get_dashBoardContent("editProfile.php");
                   else if($_GET["request"]=="changPassword")
                        get_dashBoardContent("changPassword.php");
                   else if($_GET["request"]=="createProduct")
                        get_dashBoardContent("createProduct.php");
                   else if($_GET["request"]=="viewAll")
                        get_dashBoardContent("viewAllProducts.php");
                   else if($_GET["request"]=="createAdmin")
                        get_dashBoardContent("createAdmin.php");
                   else if($_GET["request"]=="manageUser")
                        get_dashBoardContent("manageUser.php");

                 //  else if($_GET["request"]=="edit")
                   //     get_dashBoardContent("viewAllProducts.php");
//                   else if($_GET["request"]=="editProduct")
//                       get_dashBoardContent("editProduct.php");
//                 
                       
                }     
                
                
                
                
                else if (!empty ($_GET['editProduct'])){
                    $GLOBALS['editProductId']=$_GET['editProduct'];
                         get_dashBoardContent("editProduct.php");
                         
                 
                    
                }
                else if (!empty ($_GET['deleteProduct'])){
                    $GLOBALS['deleteProduct']=$_GET['deleteProduct'];
                         get_dashBoardContent("viewAllProducts.php");
                    
                }
                else if (!empty ($_GET['sold'])){
                    $GLOBALS['soldProduct']=$_GET['sold'];
                   // $GLOBALS['soldId']=$_GET['soldId'];
                         get_dashBoardContent("viewAllProducts.php");
                    
                }
                else if (!empty ($_GET['deleteUser'])){
                    $GLOBALS['deleteUser']=$_GET['deleteUser'];
                   // $GLOBALS['soldId']=$_GET['soldId'];
                         get_dashBoardContent("manageUser.php");
                    
                }
                else if (!empty ($_GET['removeAdmin'])){
                    $GLOBALS['removeAdmin']=$_GET['removeAdmin'];
                   // $GLOBALS['soldId']=$_GET['soldId'];
                         get_dashBoardContent("manageUser.php");
                    
                }
                else if (!empty ($_GET['makeAdmin'])){
                    $GLOBALS['makeAdmin']=$_GET['makeAdmin'];
                   // $GLOBALS['soldId']=$_GET['soldId'];
                         get_dashBoardContent("manageUser.php");
                    
                }
                