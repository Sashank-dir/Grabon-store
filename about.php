<?php

@include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/whyus.jpg" alt="">
         <h3>Why choose US?</h3>
         <p>All of our products are 99.9% pure and organic. We directly purchase our product from the farmers and we bring them to your doorstep and all this happens with just one click on your mobile phone. Adding to that we provide best service at a very low price and with high quality.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>What do we provide?</h3>
         <p>All organic food products under one roof. We provide organic fruits and vegeatbles and not only that we also provide good quality meat and sea food as well. The freshness of the meat is the best thing we promise to you.</p>
         <a href="shop.php" class="btn">Our Shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/joey.jpg" alt="">
         <p>Could it(Grabon) be anymore amazingggggg....</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Joey Tribbiani</h3>
      </div>

      <div class="box">
         <img src="images/rachel.jpg" alt="">
         <p>Well Grabon is a high standard website for purchasing organic farm fresh products that helped me maintain my beauty.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rachel Green</h3>
      </div>

      <div class="box">
         <img src="images/monica.jpg" alt="">
         <p>Since I like cooking, I like also experimenting with many dishes and for that i always go grabon for the amazing fresh and quality meat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Monica Geller</h3>
      </div>

      <div class="box">
         <img src="images/chandler.jpg" alt="">
         <p>Grabon couldn't be more better than my jokes but it reached up to the mark.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chandler Bing</h3>
      </div>

      <div class="box">
         <img src="images/phoebe.jpg" alt="">
         <p>OH MY GOD! OH MY GOD! Grabon has taken away my heart. OH MY GOD! The quality and freshness is amazing.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Phoebe Buffay</h3>
      </div>

      <div class="box">
         <img src="images/ross.jpg" alt="">
         <p>When I was on a break I had been on Grabon and now I cannot break up with Grabon.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ross Geller</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>