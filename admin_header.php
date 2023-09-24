<?php
   if(isset($message)){
      foreach($message as $msg){
         echo '
         <div class="message">
            <span>'.$msg.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="dashboard.php" class="logo">Owner<span>Board</span></a>

      <nav class="navbar">
         <a href="dashboard.php">Home</a>
         <a href="products.php">Products</a>
         <a href="placed_orders.php">Orders</a>
         <a href="users_accounts.php">Users</a>
         <a href="messages.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
      <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute(['id']);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
        <p><?php echo $_SESSION ['admin_name'];?></p>
         <a href="update_profile.php" class="btn">Update Profile</a>
         <div class="flex-btn">
            <a href="admin_register.php" class="option-btn">Register</a>
            <a href="admin_login.php" class="option-btn">Login</a>
         </div>
         <a href="admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">Logout</a> 
      </div>

   </section>

</header>

