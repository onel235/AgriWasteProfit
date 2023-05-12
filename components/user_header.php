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

<header class="header">

    <section class="flex">
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        <a href="home.php" class="logo"><span> Agri</span>WasteProfit🌾</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="orders.php">Orders</a>
            <a href="products.php">Product</a>
            <a href="contact.php">Contact</a>
        </nav>

        <div class="icons">
            <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
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
            <a href="Profile.php" class="btn">update profile</a>
            <div class="flex-btn">
                <a href="register.php" class="option-btn">register</a>
                <a href="login.php" class="option-btn" style=" background-color: var(--main-color);">login</a>
            </div>
            <a href="components/user_logout.php" class="delete-btn"
                onclick="return confirm('logout from the website?');">logout</a>
            <?php
            }else{
         ?>
            <p>Please Login or Register first!</p>
            <div class="flex-btn">
                <a href="login.php" class="option-btn" style=" background-color: var(--main-color);">login</a>
                <a href="register.php" class="option-btn">register</a>
            </div>
            <?php
            }
         ?>


        </div>

    </section>

</header>