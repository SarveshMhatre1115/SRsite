<!DOCTYPE html>
<html>
<head>
	<title>Stream</title>
	<link rel="stylesheet" type="text/css" href="news.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
.box {
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%,-30%);
	width: 400px;
	background: #fff;
	padding: 40px;
	box-sizing: border-box;
	border: 1px solid rgba(0,0,0,.1);

	box-shadow: 0 5px 10px rgba(0,0,0,.2);
}
</style>

<?php
    			    include 'connects.php';
        			session_start();
					?>



<?php
			// if($_SESSION["user"]!="Abdullah-Bin-Nasser")
			{
				?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){


  var par = $("#button1");
  $(par).hide();
  var par1 = $("#tager");
  $(par1).hide();
  
 
});



</script>
<?php  
			}
			?>

<body onload="func2()" id="top">
<video id="background-video" autoplay loop muted poster="Pexels Videos 2715412.mp4">
		<source src="img\background video.mp4" type="video/mp4">
		</video>
		<?php
            //include 'connect.php';
        	//session_start();
			//echo "Welcome ".$_SESSION["user"];
		?>
<!--	<label style="color: #ADEFD1FF; font-size: 45px; font-family: Times New Roman, Times, serif";>	Stream</label>-->
<header style=" margin-top: 17px;    height: 52px;">
<div class="navbar">
<a href="home.php"><img src="https://see.fontimg.com/api/renderfont4/lg2J5/eyJyIjoiZnMiLCJoIjo0OSwidyI6MTAwMCwiZnMiOjQ5LCJmZ2MiOiIjNTMwNjU5IiwiYmdjIjoiIzBEMEQwRCIsInQiOjF9/U1IgR2FtaW5n/war-elite-grunge-demo.png" alt="War fonts" style="    width: 127px;height: 19px;margin-top: 4px;"></a>
	<!-- <a href="home.php" class="logo">SR Gaming</a> -->

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
    <a href="Stream.php">Stream</a>
    </div>
    </div>
     
	  </header>
	<h1 style="font-size:250%;">

	
				
    			<div class="box" style="background-color: #051525" align="centre">

    				
    			<iframe  id="myIframe"  width="330" height="320"  frameborder="0" allowfullscreen></iframe>

    			
    			<div>
    			<form id="button1" action="" method="POST">
    	
    			<label  style="color: #ADEFD1FF; font-size: 30px; font-family: Times New Roman, Times, serif";>Enter URL:</label>	
  				<input style="color: #28334AFF" type="text" id="number" name="number"/><br/>  
				<input type="submit" name='number1' value="submit" onclick="func()"/> 
				</form>
				</div>
				</div>
    			<?php
					$qry = "SELECT link FROM links WHERE id=(SELECT MAX(id) FROM links);";
        			$res = $con->query($qry);
        			if ($res->num_rows > 0) {
  					// output data of each row
  						while($row = $res->fetch_assoc()) {
    					$g=$row["link"];
    					$d=strval($g);
			 			 }
					} 
					else 
					{
  						echo "0 results";
					}
							

        			?>
    	<script>
			
    		function func2(){ 
    		let myIframe = document.getElementById("myIframe");

            
			var x = "<?php echo $d ?>";
	
			//alert(x);
			//alert(abc);
            let url_string = String(x);
            let width = "728";
            let height = "790";
            let geo = "uk";
    
            let adsURL = url_string+"?geo="+geo+"&size="+width+"x"+height;
            console.log(adsURL);
            myIframe.src = adsURL;
			}

    		function func(){
    			
            let myIframe = document.getElementById("myIframe");

            var x = "<?php echo $d ?>";
			 
            let url_string = String(x);
            let width = "728";
            let height = "790";
            let geo = "uk";
    
            let adsURL = url_string+"?geo="+geo+"&size="+width+"x"+height;
            console.log(adsURL);
            myIframe.src = adsURL;
    		}
        
        </script>
        <br>
    				
     
     </h1>



     
</body>
</html>
<?php

if(isset($_POST['number1']))
{
	
	$number=$_POST['number'];
	$query="INSERT INTO `links`(`link`) values ('$number')";
	$query_run=mysqli_query($con,$query);

	if($query_run){
		
		echo '<script type="text/javasript"> alert("Data Saved") </script>';
	}
	else
	{
	
		echo '<script type="text/javasript"> alert("Data Not Saved") </script>';
	}

}

?>