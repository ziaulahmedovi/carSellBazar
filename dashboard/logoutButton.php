<?Php 
    if(isset($_GET['logoutbtn'])){
        require_once './class/loginClass.php';
        $logout= new login();
        $logout->logout();
    }
    ?>
    
            <div class="row">
                <div class="col-10"></div>
                <div class="col-2 ">
                    <button > <a href="?logoutbtn=logout">Log Out</a></button>
                </div>
            </div>