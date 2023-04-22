<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Work+Sans:wght@600&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="news.css">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header style=" margin-top: 17px;height: 52px;" >
    
    <div class="navbar">
    <a href="home.php"><img src="https://see.fontimg.com/api/renderfont4/lg2J5/eyJyIjoiZnMiLCJoIjo0OSwidyI6MTAwMCwiZnMiOjQ5LCJmZ2MiOiIjNTMwNjU5IiwiYmdjIjoiIzBEMEQwRCIsInQiOjF9/U1IgR2FtaW5n/war-elite-grunge-demo.png" alt="War fonts" style="    width: 127px;height: 19px;margin-top: 4px;"></a>

    <!-- <a href="home.php" class="logo">SR Gaming</a> -->

      <a class="active" href="home.php" style="margin-left: 360px;">Home</a>
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
      
    <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>
 
  </div>
  </header>





  <main style="color: #fff; font-size: 10px; text-shadow: 2px 0px #AA1111; font-family: 'Oxanium', cursive;">
    <article>

      <!-- 
        - #UPCOMING
      -->

      <section class="section upcoming" aria-labelledby="upcoming-label" id="tournament">
        <div class="container">

          <p class="section-subtitle" id="upcoming-label" data-reveal="bottom">
            Upcoming Matches
          </p>

          <h2 class="h2 section-title" data-reveal="bottom">
            Battles Extreme <br> Masters <span class="span">Tournament</span>
          </h2>

          <p class="section-text" data-reveal="bottom">
            Our success in creating business solutions is due in large part to our talented and highly committed team.
          </p>

          <ol class="upcoming-list">

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="images\team-logo-1.png" width="86" height="81" loading="lazy"
                  alt="Purple Death Cadets" class="card-banner">

                <h3 class="h3 card-title">Purple Death Cadets</h3>

                <div class="card-meta">Group 04 | Match 06th</div>

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="10:00">10:00</time>

                <time class="date" datetime="2022-05-25">25TH May 2024</time>

                <div class="social-wrapper">
                  <a href="#" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div>
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="images\team-logo-2.png" width="86" height="81" loading="lazy"
                  alt="Trigger Brain Squad" class="card-banner">

                <h3 class="h3 card-title">Trigger Brain Squad</h3>

                <div class="card-meta">Group 04 | Match 06th</div>

              </div>

            </li>

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="images\team-logo-3.png" width="86" height="81" loading="lazy"
                  alt="The Black Hat Hackers" class="card-banner">

                <h3 class="h3 card-title">The Black Hat Hackers</h3>

                <div class="card-meta">Group 05 | Match 02nd</div>

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="12:30">12:30</time>

                <time class="date" datetime="2024-01-10">10TH Jan 2024</time>

                <div class="social-wrapper">
                  <a href="#" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div>
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="images\team-logo-4.png" width="86" height="81" loading="lazy"
                  alt="Your Worst Nightmare" class="card-banner">

                <h3 class="h3 card-title">Your Worst Nightmare</h3>

                <div class="card-meta">Group 05 | Match 02nd</div>

              </div>

            </li>

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="images\team-logo-5.png" width="86" height="81" loading="lazy"
                  alt="Witches And Quizards" class="card-banner">

                <h3 class="h3 card-title">Witches And Quizards</h3>

                <div class="card-meta">Group 02 | Match 03rd</div>

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="04:20">04:20</time>

                <time class="date" datetime="2024-12-15">15th Dec 2024</time>

                <div class="social-wrapper">
                  <a href="#" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div>
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="images\team-logo-6.png" width="86" height="81" loading="lazy"
                  alt="Resting Bitch Faces" class="card-banner">

                <h3 class="h3 card-title">Resting Bitch Faces</h3>

                <div class="card-meta">Group 02 | Match 03rd</div>

              </div>

            </li>

          </ol>

        </div>
      </section>




  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - #CUSTOM CURSOR
  -->

  <div class="cursor" data-cursor></div>





  <!-- 
    - custom js link
  -->
  <script src="js\news.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <video id="background-video" autoplay loop muted poster="Pexels Videos 2715412.mp4">
		<source src="img\background video.mp4" type="video/mp4">
		</video>
</body>

</html>
