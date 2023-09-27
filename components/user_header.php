<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header" style="margin-top:17px;">

   <section class="flex"style="padding-top: 0px; padding-bottom: 6px;">
   <a href="home.php"><img src="https://see.fontimg.com/api/renderfont4/lg2J5/eyJyIjoiZnMiLCJoIjo0OSwidyI6MTAwMCwiZnMiOjQ5LCJmZ2MiOiIjNTMwNjU5IiwiYmdjIjoiIzBEMEQwRCIsInQiOjF9/U1IgR2FtaW5n/war-elite-grunge-demo.png" alt="War fonts" style="    width: 127px;height: 19px;margin-top: 4px;"></a>
      <!-- <a href="home.php" class="logo">SR Gaming</a> -->
      <div class="navbar">
      <a class="active" href="home.php">Home</a>
        <div class="dropdown">
    <button class="dropbtn">Games
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Game.php">Download</a>
      <a href="shop.php">Buy</a>
      <a href="#">Play( comming soon )</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Blog
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Blogs.php">game blog</a>
      <a href="News.php">News</a>
    </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn">Tournament
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="Tournament.php">Matches</a>
<!--     <a href="Stream.php">Stream</a> -->
    </div>
    </div>
	</div>
      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search_page.php"><i class="fas fa-search"></i></a>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>

</header>
