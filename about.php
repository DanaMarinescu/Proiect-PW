<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/eu.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Although we are part of an extensive category on the market, our books are at the lowest price. In addition, we have the most discounts during the year.</p>
         <p>We are open to any recommendation, so we are waiting for your message at any time! Enjoy!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/girl.jpg" alt="">
         <p>I found here the lowest price for my favorite series of books!</p>
         <div class="stars">
         <span class="fas fa-star checked"></span>
         <span class="fas fa-star checked"></span>
         <span class="fas fa-star checked"></span>
         <span class="fas fa-star checked"></span>
         <span class="fas fa-star checked"></span>
         </div>
         <h3>Anna Dincheaina</h3>
      </div>

      <div class="box">
         <img src="images/nene.jfif" alt="">
         <p>The products and the website are great. The problem was at the carrier.</p>
         <div class="stars">
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star "></span>
            
         </div>
         <h3>Albert Terra</h3>
      </div>

      <div class="box">
         <img src="images/tanti.jfif" alt="">
         <p>Very pleased with both the books and the communication with the administrator because I wanted a book that was not in stock.</p>
         <div class="stars">
         <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
            <span class="fas fa-star checked"></span>
         </div>
         <h3>Maria Desdemona</h3>
      </div>
      
   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/dan.jfif" alt="">
         <div class="share">
            <a href="https://ro-ro.facebook.com/danielgoleman/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/danielgolemanei" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/daniel_goleman_/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/danielgoleman/recent-activity/posts/" class="fab fa-linkedin"></a>
         </div>
         <h3>Daniel Goleman</h3>
      </div>


      <div class="box">
         <img src="images/collen.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Colleen Hoover</h3>
      </div>
      
      <div class="box">
         <img src="images/james.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>James Clear</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>