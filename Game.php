<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="news.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
		   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Work+Sans:wght@600&display=swap"
    rel="stylesheet">

</head>
<body id="top" >
		<?php
            include 'connects.php';
        	session_start();
		?>
		<video id="background-video" autoplay loop muted poster="Pexels Videos 2715412.mp4">
		<source src="img\background video.mp4" type="video/mp4">
		</video>
	<header style=" margin-top: 17px; height: 52px;">
		<div class="navbar">
		<a href="home.php"><img src="https://see.fontimg.com/api/renderfont4/1GMVL/eyJyIjoiZnMiLCJoIjo0MCwidyI6MTAwMCwiZnMiOjQwLCJmZ2MiOiIjQ0IxNEYwIiwiYmdjIjoiIzFFMUUxRSIsInQiOjF9/U1IgR0FNRSBTSE9Q/game-of-squids.png" alt="Squid fonts" style="    width: 127px;height: 19px;margin-top: 4px;"></a>

		<!-- <a href="home.php" class="logo" style="color: white;">SR Gaming</a> -->

      	<a class="active" href="home.php"style="margin-left: 360px;">Home</a>
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
     
	  </header>
	<?php
		$qry = "SELECT * FROM  games";
        $res = $con->query($qry);
        while ($row = $res->fetch_assoc()) 
        {
        	$r_name= $row['Gname'];
        	echo "<br>";
        	$ry = "SELECT pic FROM  game_pics where Gname = '".$r_name."'";
        	$re = $con->query($ry);
        	$ro = $re->fetch_assoc();
    		
    		?>

    		<div class="profile-card">
				<div class="image-container">
					<?php echo "<img src='games_pics/".$ro["pic"].".jpg' style='    width: 50%;margin-left: 336px;'"; ?>
				</div>
				<div>
					<h2 style="margin-left:330px;color: #fff; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;"> &thinsp; <?php echo $r_name; ?></h2>
				</div>
				<div class="main-cotainer"style="margin-left:335px;color: #fff; font-size: 16px; text-shadow: 2px 2px #AA1111; font-family: 'Oxanium', cursive;"" >
					<p> &thinsp; <i class="fa fa-gamepad info"></i> Game</p>
					<p> &thinsp; <i class="fa fa-language info"></i> <?php echo "Language : " .$row['Language']; ?></p>
					<p> &thinsp; <i class="fa fa-laptop info"></i> <?php echo "System : " .$row['system']; ?></p>
					<p> &thinsp; <i class="fa fa-microchip info"></i> <?php echo "CPU : " .$row['cpu']; ?></p>
					<p> &thinsp; <i class="fa fa-tv info"></i> <?php echo "Graphic : " .$row['vcard']; ?></p>
					<p> &thinsp;&thinsp; <i class="fas fa-hdd info"></i> <?php echo "Size : " .$row['size']; ?></p>
					<p> &thinsp; <i class="fa fa-memory info"></i> <?php echo "Memory : " .$row['ram']; ?></p>
					<a  href="<?php echo $row['link']; ?>" ><i class="fa fa-memory info"></i>Download</a>
					<hr >
					<br>
					<hr>
				</div>
			</div>
    	<?php
        }
	?>

	


	<div align="center">
		<?php
            if (isset($_GET["Message"])) {
                echo $_GET["Message"];
            }
        ?>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){


  var par = $("#a");
  $(par).hide();
  

  $("#button").click(function(){
    $("#a").toggle();
  });
});
</script>


<?php
			// if($_SESSION["user"]!="Abdullah-Bin-Nasser")
			{
				?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){


  var par = $("#button");
  $(par).hide();
  var par1 = $("#tager");
  $(par1).hide();
 
 
});



</script>
<?php  
			}
			?>

<form id="a" action="" method="POST">

  <label for="gname">Game Name:</label><br>
  <input type="text" id="gname" name="gname" value=""><br>
  
  <label for="lang">Language:</label><br>
  <input type="text" id="lang" name="lang" value=""><br>
  
  <label for="size">Size:</label><br>
  <input type="number" id="size" name="size" value=""><br>

  <label for="ram1">Ram1:</label><br>
  <input type="number" id="ram1" name="ram1" value=""><br>
  
  <label for="system">System:</label><br>
  <input type="text" id="system1" name="system1" value=""><br>
  
  <label for="CPU">CPU:</label><br>
  <input type="text" id="cpu" name="cpu" value=""><br>
  
  <label for="Vcard">Vcard:</label><br>
  <input type="text" id="vcard" name="vcard" value=""><br>
  

  <label for="Link">Link:</label><br>
  <input type="text" id="link1" name="link1" value=""><br>
	
  	  


  <input type="submit" name="submit" value="Submit">
</form>

<input id="button" type="image" height="50" width="50" name="imgbtn" src="b.jpg"  alt="Tool Tip"></button>



<?php

if(isset($_POST['submit']))
{
	
	$gname=$_POST['gname'];
	$lang=$_POST['lang'];
	$size=$_POST['size'];
	$ram=$_POST['ram1'];
	$system=$_POST['system1'];
	$cpu=$_POST['cpu'];
	$vcard=$_POST['vcard'];
	$link=$_POST['link1'];

	$query="INSERT INTO `games` values ('$gname','$lang','$size',$ram,'$system','$cpu','$vcard','$link');";
	$query_run=mysqli_query($con,$query);

	if($query_run){
		
		echo "YES";
	}
	else
	{
	
		echo "No";
	}

}

?>

<hr>
<footer class="footer">

<section class="grid">

   <div class="box">
	  <h3>quick links</h3>
	  <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
	  <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
	  <a href="shop.php"> <i class="fas fa-angle-right"></i> shop</a>
	  <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
   </div>

   <div class="box">
	  <h3>extra links</h3>
	  <a href="user_login.php"> <i class="fas fa-angle-right"></i> login</a>
	  <a href="user_register.php"> <i class="fas fa-angle-right"></i> register</a>
	  <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
	  <a href="orders.php"> <i class="fas fa-angle-right"></i> orders</a>
   </div>

   <div class="box">
	  <h3>contact us</h3>
	  <a href="tel:1234567890"><i class="fas fa-phone"></i> +123 456 7899</a>
	  <a href="tel:11122233333"><i class="fas fa-phone"></i> +111 222 3333</a>
	  <a href="mailto:mail@gmail.com"><i class="fas fa-envelope"></i> SRGaming@gmail.com</a>
	  <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> Thane, india - 400612 </a>
   </div>

   <div class="box">
	  <h3>follow us</h3>
	  <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
	  <a href="#"><i class="fab fa-twitter"></i>twitter</a>
	  <a href="#"><i class="fab fa-instagram"></i>instagram</a>
	  <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
   </div>

</section>


</footer>


</body>
</html>
