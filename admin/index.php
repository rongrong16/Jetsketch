<?php
require 'includes/conn.php';

session_start();

if(!isset($_SESSION['admin_email'])){
    echo "<script> location.href='/jetsketch/admin/login.php'; </script>";
    exit();
}

    $mail = '';
    if (isset($_SESSION['admin_email'])){
        $mail = $_SESSION["admin_email"];
    }
    $name= '';

    $query = 'SELECT * FROM admin';
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result)){
        if($row['email'] == $mail){
            $name = $row['name'];
        }
    }

?>
<?php require_once "includes/header.php" ?>

<div class="mainContainer">
    <?php require "includes/sidebar.php" ?>


   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/dashboard.css"></link>

    <div class="allContainer">
    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                <i class="fa-sharp fa-solid fa-users mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:#6B705C; font-weight:bold;">Total Users</h4>
                    <h5 style="color:#6B705C;">
                    <?php
                        $sql="SELECT * from users";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <i class="fa-solid fa-grip mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:#6B705C; font-weight:bold;">Total Categories</h4>
                    <h5 style="color:#6B705C;">
                    <?php
                       
                       $sql="SELECT * from categories";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="card">
                    <i class="fa-solid fa-boxes-stacked mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:#6B705C; font-weight:bold;">Total Products</h4>
                    <h5 style="color:#6B705C;">
                    <?php
                       
                       $sql="SELECT * from products";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="card">
                    <i class="fa-solid fa-cart-shopping mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:#6B705C; font-weight:bold;">Total Orders</h4>
                    <h5 style="color:#6B705C;">
                    <?php
                       
                       $sql="SELECT * from orders";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>

            
        </div>
        
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>