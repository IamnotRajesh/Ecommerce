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
    <title>About</title>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--custom css link-->
    <link rel="stylesheet" href="user_style.css">

</head>
<body>
    
<?php include 'user_header.php'; ?>

<!--about section starts-->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Welcome to SmartTouch, where sophistication finds its virtual abode. Our meticulously curated collection unveils a world of timeless elegance, a haven for those who seek distinction beyond trends. With an unwavering commitment to quality, each item gracing our selection is a testament to craftsmanship.
            We don't just offer products; we offer an experience. Our team is dedicated to guiding you towards selections that mirror your tastes and aspirations, ensuring that every choice echoes your individuality. Beyond the act of shopping, we stand for an ethos – a seamless journey where refinement takes center stage.
            Join us in redefining online commerce, where elegance meets functionality and each interaction becomes a brushstroke on the canvas of sophistication.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<!--about section ends-->

<!--reviews section starts-->

<section class="reviews">
   
   <h1 class="heading">Client's Reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>"I've finally found my haven for all things stylish. SmartTouch isn't just a marketplace; it's an immersion into sophistication. From their seamless interface to the quality of products, every aspect speaks of excellence."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lucerian D. Steelwaters</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>"A remarkable experience with SmartTouch. Every purchase feels like investing in art. The curated selection exudes elegance, and their personalized assistance is a testament to their commitment to refinement."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophie Juliette</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>"SmartTouch has raised the bar for online shopping. It's not just about the products; it's about the experience. The team's guidance has led me to discover pieces that resonate with my style, and I can't imagine shopping elsewhere."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sam Malrovich</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>"Navigating SmartTouch is like strolling through a gallery of taste. The range of products is exquisite, and their dedication to assisting clients in finding their unique gems truly sets them apart."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Katie Poppins</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>"My journey with SmartTouch has been a revelation. Their collection is a tribute to artistry, and their customer service feels like a partnership. It's refreshing to find a platform that understands and celebrates refined taste."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>George Orwel</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>"I've always believed in surrounding myself with things that reflect my personality. SmartTouch has made this a reality. Each piece I've ordered is a statement of elegance, and their commitment to excellence is evident in every interaction."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cheng Xuwan</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<!--reviews section ends-->















<?php include 'footer.php'; ?>
<!--custom js link-->
<script src="script.js">

</body>
</html>