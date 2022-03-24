<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'Already added to cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Product added to cart!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="/images/logo2.ico" type="image/x-icon">
   <title>Online Book Delivery</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <section class="home">
      <div class="content">
         <h3>Hand Picked Book to your door.</h3>
         <p>Online Book Delivery System.</p>
         <a href="about.php" class="white-btn">discover more</a>
      </div>

      <div class="swiper mySwiper">
         <div class="swiper-wrapper">
            <a href="#" class="swiper-slide"><img src="images/Bela-Furabar-Age.jpg" alt=""></a>
            <a href="#" class="swiper-slide"><img src="images/ঘরে বসে spoken english.jpg" alt=""></a>
            <a href="#" class="swiper-slide"><img src="images/Three Tragedies.jpg" alt=""></a>
            <a href="#" class="swiper-slide"><img src="images/একাত্তরের দিন গুলি.jfif" alt=""></a>
            <a href="#" class="swiper-slide"><img src="images/THE ART OF SHAKESPARE'S SONNETS.jpg" alt=""></a>
            <a href="#" class="swiper-slide"><img src="images/টুনাটুনির বই.jpg" alt=""></a>
         </div>
         <div class="swiper-pagination"></div>
      </div>

   </section>


   <section class="icons-container">

      <div class="icons">
         <i class="fas fa-shipping-fast"></i>
         <div class="content">
            <h3>Free Shipping</h3>
            <p>Order Over ৳ 599</p>
         </div>
      </div>

      <div class="icons">
         <i class="fas fa-lock"></i>
         <div class="content">
            <h3>Secure Payment</h3>
            <p>100% Secure Payment</p>
         </div>
      </div>

      <div class="icons">
         <i class="fas fa-redo-alt"></i>
         <div class="content">
            <h3>Easy Returns</h3>
            <p>10 Days Returns</p>
         </div>
      </div>

      <div class="icons">
         <i class="fas fa-headset"></i>
         <div class="content">
            <h3>24/7 Support</h3>
            <p>Call Us Anytime</p>
         </div>
      </div>

   </section>

   <section class="products">

      <h1 class="hading"><span>latest products</span></h1>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 8") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
         ?>
               <form action="" method="post" class="box">
                  <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                  <div class="name"><?php echo $fetch_products['name']; ?></div>
                  <div class="price">৳<?php echo $fetch_products['price']; ?>/-</div>
                  <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty"> -->
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="add to cart" name="add_to_cart" class="btn">
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">No products added yet!</p>';
         }
         ?>
      </div>

      <div class="load-more" style="margin-top: 2rem; text-align:center">
         <a href="shop.php" class="option-btn">load more</a>
      </div>

   </section>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/about1.svg" alt="">
         </div>

         <div class="content">
            <h1 class="hading"><span>about us</span></h1>
            <p>This is an online bookstore with a mission to financially support local, independent bookstores.</p>
            <p>We believe that bookstores are essential to a healthy culture. They’re where authors can connect with readers, where we discover new writers, where children get hooked on the thrill of reading that can last a lifetime. They’re also anchors for our downtowns and communities.
            </p>
            <a href="about.php" class="btn">read more</a>
         </div>

      </div>

   </section>

   <section class="home-contact">

      <div class="content">
         <h3>have any questions?</h3>
         <p>If you have any of Question....</p>
         <a href="contact.php" class="white-btn">contact us</a>
      </div>

   </section>





   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
   <script src="js/script.js"></script>

</body>

</html>