<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}
else{
    $user_id='';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UX-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--custom css link-->
    <link rel="stylesheet" href="user_style.css">

</head>
<body>
    
<?php include 'user_header.php'; ?>

<!--order section starts-->

<section class="orders">

   <h1 class="heading">Placed Orders</h1>

   <div class="box-container">

   <?php
      if($user_id == ''){
         echo '<p class="empty">Please login to see your orders</p>';
      }else{
         $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
         $select_orders->execute([$user_id]);
         if($select_orders->rowCount() > 0){
            while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p>Placed on : <span><?= $fetch_orders['placed_on']; ?></span></p>
      <p>Name : <span><?= $fetch_orders['name']; ?></span></p>
      <p>Email : <span><?= $fetch_orders['email']; ?></span></p>
      <p>Number : <span><?= $fetch_orders['number']; ?></span></p>
      <p>Address : <span><?= $fetch_orders['address']; ?></span></p>
      <p>Payment method : <span><?= $fetch_orders['method']; ?></span></p>
      <p>Your orders : <span><?= $fetch_orders['total_products']; ?></span></p>
      <p>Total price : <span>$<?= $fetch_orders['total_price']; ?>/-</span></p>
      <p> Payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">No orders placed yet!</p>';
      }
      }
   ?>

   </div>

</section>

<!--order section ends-->














<?php include 'footer.php'; ?>
<!--custom js link-->
<script src="script.js">

</body>
</html>