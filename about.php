<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <div class="heading">
      <h3>about us</h3>
      <p> <a href="index.php">Home</a> / About </p>
   </div>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/discount.svg" alt="">
         </div>

         <div class="content">
            <h1 class="hading"><span>why choose us?</span></h3>
               <p>This webside are free!</p>
               <p>This pages allow you to buy books and earn 30% of the cover price without worrying about inventory, fulfillment, shipping, returns, or customer service.</p>
               <a href="contact.php" class="btn">contact us</a>
         </div>

      </div>

   </section>

   <section class="authors">

      <h1 class="hading"><span>Popular Author</span></h1>

      <div class="box-container">

         <div class="box">
            <img src="images/munzerin..jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Munzereen Shahid</h3>
         </div>

         <div class="box">
            <img src="#" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Arif Azad</h3>
         </div>

         <div class="box">
            <img src="images/humayen..jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Humayun Ahmed</h3>
         </div>

         <div class="box">
            <img src="images/shakespeare..jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Shakespeare</h3>
         </div>

      </div>

   </section>







   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>