<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SR Game Shop</title>
   <link rel="icon" href="images\logo3.ico">
   <link href="js/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/thumbnail-slider.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="2g.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Work+Sans:wght@600&display=swap"
    rel="stylesheet">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>
 <video id="background-video" autoplay loop muted poster="Pexels Videos 2715412.mp4">
		<source src="img\background video.mp4" type="video/mp4">
		</video>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div style="padding:120px 0;">
        <div id="thumbnail-slider">
            <div class="inner">
                <ul>
                    <li>
                        <a class="thumb" href="img/1.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/7.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/3.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/4.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/5.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/8.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/9.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/10.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/11.jpg"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>
<div>
	<br>
	<br>
	
	</div>
<video src="hero_video_1574377417.mp4" id="video" style="height: 467px;" controls=“true”  autoplay onplaying="this.controls=false"></video>

<section class="category" style="color: #bcbcb9; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;">

   <h1 class="heading"> BUY GAMES</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=Car" class="swiper-slide slide">
      <img src="images\icon-1.png" alt="">
      <h3>Car Game</h3>
   </a>

   <a href="category.php?category=War" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>War game</h3>
   </a>

   <a href="category.php?category=Bike" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>Bike games</h3>
   </a>

   <a href="category.php?category=Shooting" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>Shooting game</h3>
   </a>

   <a href="category.php?category=Boxing" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>Boxing game</h3>
   </a>

   <a href="category.php?category=Multiplayer" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>Multiplayer game</h3>
   </a>

   <a href="category.php?category=Snake" class="swiper-slide slide">
      <img src="images/icon-7.png" alt="">
      <h3>Snake game</h3>
   </a>

   <a href="category.php?category=Football" class="swiper-slide slide">
      <img src="images/icon-8.png" alt="">
      <h3>Football game</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products" style="color: #fff; font-size: 10px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;">

   <h1 class="heading" style="color: #fff; font-size: 50px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>
	
<div align="center">
		<?php
            if (isset($_GET["Message"])) {
                echo $_GET["Message"];
            }
        ?>
	</div>
  
	
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<div class="about-section">
  <h1  style="color: #fff; font-size: 50px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;";>TOP Rated</h1>

</div>
<!-- We will make a simple accordian with hover effects 
The markup will have a list with images and the titles-->
<div class="accordian" style="color: #fff; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;">
	<ul>
		<li>
			<div class="image_title">
				<a href="https://dyinglightgame.com/"style="height: 98px;">dying light 2 </a>
			</div>
			<a href="#">
				<img src="img\topgame1.jpg" style="width: 639px;height: 371px;"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="https://arcadespot.com/game/toy-story-2-n64/">Toy Story 2</a>
			</div>
			<a href="#">
				<img src="img\topgame2.jpg"style="width: 639px;height: 371px;"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="https://playbreakout.com/en"style="height:98px;">Warface Breakout</a>
			</div>
			<a href="#">
				<img src="img\topgame3.jpg"style="width: 639px;height: 371px"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="https://www.marvelsnap.com/"style="height:98px;">Marvel Snap</a>
			</div>
			<a href="#">
				<img src="img\topgame4.jpg"style="width: 639px;height: 371px"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="https://arcadespot.com/game/cars-2/">Cars 2</a>
			</div>
			<a href="#">
				<img src="img\topgame5.jpg"style="width: 639px;height: 371px"/>
			</a>
		</li>
    <li>
			<div class="image_title">
				<a href="https://www.play-games.com/deadpool-games.html" style="height: 88px;">Marvel's Midnight Deadpool</a>
			</div>
			<a href="#">
				<img src="img\topgame6.jpg"style="width: 639px;height: 371px"/>
			</a>
		</li>
    <li>
			<div class="image_title">
				<a href="https://www.ea.com/games/battlefield/battlefield-2042/news/battlefield-briefing-battle-of-nordvik-event"style="height: 88px;">bf 2042 battle of narvik</a>
			</div>
			<a href="#">
				<img src="img\topgame7.jpg"style="width: 639px;height: 371px"/>
			</a>
		</li>
    <li>
			<div class="image_title">
				<a href="https://store.steampowered.com/app/1656330/Destiny_2_The_Witch_Queen/"style="height: 88px;">Destiny 2 The Witch Queen</a>
			</div>
			<a href="#">
				<img src="img\topgame8.jpg"style="width: 639px;height: 371px"/>
			</a>
		</li>
    <li>
			<div class="image_title">
				<a href="https://www.divineknockout.com/"style="height: 88px;">Divine Knockout</a>
			</div>
			<a href="#">
				<img src="img\topgame9.jpg"style="width: 639px;height: 371px"/>
			</a>
		</li>
    <li>
			<div class="image_title">
				<a href="https://www.syncedthegame.com/en/"style="height: 88px;">Synced Gaming</a>
			</div>
			<a href="#">
				<img src="img\topgame10.jpg"style="width: 639px;height: 371px"/>
			</a>
		</li>
	</ul>
</div>



<div class="row">
  <div class="column">
    <div class="card">
      <img src="i.jpg" alt="Jane" style="width: 96%;height: 148px;">
      <div class="container">
        <a href="https://www.epicgames.com/fortnite/en-US/home"style="color: #fff; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family:  'Oxanium', cursive;";>The Witcher</a>
        <p class="title" style="color: #fff; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family:  'Oxanium', cursive;";>By : Wild Hunt</p>
        </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="w.jpg" alt="Mike" style="width: 96%; height: 148px;" >
      <div class="container">
        <a href="https://www.epicgames.com/fortnite/en-US/home" style="color: #fff; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;"; >Fortnight</a>
        <p  class="title" style="color: #fff; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family:  'Oxanium', cursive;";>BY : EPic Games</p>
        
      </div>
    </div>
  </div>
  

  <div class="column">
    <div class="card">
      <img src="q.jpg" alt="Mike" style="width: 96%; height: 148px;">
      <div class="container">
        <a href="https://www.epicgames.com/fortnite/en-US/home" style="color: #fff; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family:  'Oxanium', cursive;"; >GTA V</a>
        <p  class="title" style="color: #fff; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;">BY : EPic Games</p>
        
      </div>
    </div>
  </div>
 
</div>


<hr>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
