<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="mainpage.css" />
    <title>ChickFlix</title>
  </head>
  <body>
    <!-- Navigation Bar-->
    <div class="nav" id="nav">
      <h1 class="nav_logo_name">CHICKFLIX</h1>
      <h2>Hello, <?php echo $_SESSION['full_name']; ?></h2>
      <li class="nav-text">
        <li><a href="#home">Home</a></li>
        <li><a href="#originals">Originals</a></li>
        <li><a href="#trending">Trending Now</a></li>
        <li><a href="#tv-shows">TV Shows</a></li>
        <li><a href="#genres">Genres</a></li>
        <li><a href="logout.php">Log Out</a></li>
        <li><img src="images/netflix-avatar.png" alt="" class="nav_avatar" /></li>
      </ul>
    </div>

    <!-- Header -->
    <div class="banner">
      <div class="banner_contents" id="home">
        <h1 class="banner_title">Money Heist</h1>
        <div class="banner_buttons">
          <button class="banner_button">Play</button>
          <button class="banner_button">My List</button>
        </div>
        <div class="banner_description">
          To carry out the biggest heist in history, a mysterious man called The
          Professor recruits a band of eight robbers who have a single
          characteristics: n...
        </div>
      </div>
      <div class="banner-fadeBottom"></div>
    </div>
    <!-- ChickFlix Originals -->
    <div class="row">
      <h2 id="originals">CHICKFLIX ORIGINALS</h2>
      <div class="row_posters">
        <img
          src="images/large-movie1-kfp.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie2-epl.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie3-10tihay.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie4-bp.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie5-13go30"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie6-us.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie7-mi.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie8-s2.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie9-btt.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie10-mg.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie11-hmc.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie12-luca.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie4.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie5.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie6.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie7.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie8.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
        <img
          src="images/large-movie9.jpg"
          alt=""
          class="row_poster row_PosterLarge"
        />
      </div>
    </div>

    <!-- Trending Now -->
    <div class="row">
      <h2 id="trending">Trending Now</h2>
      <div class="row_posters">
        <img src="images/trending-movie1.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie2.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie3.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie4.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie5.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie6.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie7.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie8.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie3.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie6.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie1.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie4.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie8.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie5.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie2.jpeg" alt="" class="row_poster" />
        <img src="images/trending-movie7.jpeg" alt="" class="row_poster" />
      </div>
    </div>

    <!-- TV Shows -->
    <div class="row">
      <h2 id="tv-shows">TV Shows</h2>
      <div class="row_posters">
        <img src="images/small-tvshow1.jpg" alt="" class="row_poster" />
        <img src="images/small-tvshow2.jfif" alt="" class="row_poster" />
        <img src="images/small-tvshow3.jpg" alt="" class="row_poster" />
        <img src="images/small-tvshow4.jpg" alt="" class="row_poster" />
        <img src="images/small-tvshow5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
        <img src="images/small-tvshow1.jpg" alt="" class="row_poster" />
        <img src="images/small-tvshow2.jfif" alt="" class="row_poster" />
        <img src="images/small-tvshow3.jpg" alt="" class="row_poster" />
        <img src="images/small-tvshow4.jpg" alt="" class="row_poster" />
        <img src="images/small-tvshow5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
      </div>
    </div>

    <!-- Action Movies -->
    <div class="row">
      <h2 id="genres">Action Movies</h2>
      <div class="row_posters">
        <img src="images/small-movie1.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie2.jpg" alt="" class="row_poster" />
        <img src="images/small-movie5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
        <img src="images/small-movie3.jpg" alt="" class="row_poster" />
        <img src="images/small-movie4.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie1.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie2.jpg" alt="" class="row_poster" />
        <img src="images/small-movie5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
        <img src="images/small-movie3.jpg" alt="" class="row_poster" />
        <img src="images/small-movie4.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
      </div>
    </div>

    <!-- Comedy Movies -->
    <div class="row">
      <h2>Comedy Movies</h2>
      <div class="row_posters">
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie4.jpg" alt="" class="row_poster" />
        <img src="images/small-movie3.jpg" alt="" class="row_poster" />
        <img src="images/small-movie2.jpg" alt="" class="row_poster" />
        <img src="images/small-movie1.jpg" alt="" class="row_poster" />
        <img src="images/small-movie1.jpg" alt="" class="row_poster" />
        <img src="images/small-movie2.jpg" alt="" class="row_poster" />
        <img src="images/small-movie3.jpg" alt="" class="row_poster" />
        <img src="images/small-movie4.jpg" alt="" class="row_poster" />
        <img src="images/small-movie5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
      </div>
    </div>

    <!-- Horror Movies -->
    <div class="row">
      <h2>Horror Movies</h2>
      <div class="row_posters">
        <img src="images/small-movie1.jpg" alt="" class="row_poster" />
        <img src="images/small-movie2.jpg" alt="" class="row_poster" />
        <img src="images/small-movie3.jpg" alt="" class="row_poster" />
        <img src="images/small-movie4.jpg" alt="" class="row_poster" />
        <img src="images/small-movie5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
        <img src="images/small-movie1.jpg" alt="" class="row_poster" />
        <img src="images/small-movie2.jpg" alt="" class="row_poster" />
        <img src="images/small-movie3.jpg" alt="" class="row_poster" />
        <img src="images/small-movie4.jpg" alt="" class="row_poster" />
        <img src="images/small-movie5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
      </div>
    </div>

    <!-- Romantic Movies -->
    <div class="row">
      <h2>Romantic Movies</h2>
      <div class="row_posters">
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie3.jpg" alt="" class="row_poster" />
        <img src="images/small-movie1.jpg" alt="" class="row_poster" />
        <img src="images/small-movie2.jpg" alt="" class="row_poster" />
        <img src="images/small-movie4.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
        <img src="images/small-movie7.jpg" alt="" class="row_poster" />
        <img src="images/small-movie5.jpg" alt="" class="row_poster" />
        <img src="images/small-movie3.jpg" alt="" class="row_poster" />
        <img src="images/small-movie1.jpg" alt="" class="row_poster" />
        <img src="images/small-movie2.jpg" alt="" class="row_poster" />
        <img src="images/small-movie4.jpg" alt="" class="row_poster" />
        <img src="images/small-movie6.jpg" alt="" class="row_poster" />
        <img src="images/small-movie8.jpg" alt="" class="row_poster" />
      </div>
    </div>
    <script>
      const nav = document.getElementById("nav");
      window.addEventListener("scroll", () => {
        if (window.scrollY >= 100) {
          nav.classList.add("nav_black");
        } else {
          nav.classList.remove("nav_black");
        }
      });
    </script>
  </body>
</html>
