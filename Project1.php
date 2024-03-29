<!DOCTYPE html>
<html>

  <!-- Head Section -->
<head>
  <title>Kyle's Project</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./Project1.css">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Raleway", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
        title="close menu">
        <i class="fa fa-remove"></i>
      </a>
      <img src="./Images/Pokemon/trainer.jpg" style="width:45%;" class="w3-round"><br><br>
      <h4><b>Welcome to Project 1</b></h4>
      <p class="w3-text-grey">Made by Kyle Peniston</p>
    </div>
    <div class="w3-bar-block">
      <a href="./Project1.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
        class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a>
      <a href="./Registration.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
          class="fa fa-envelope fa-fw w3-margin-right"></i>Registration</a>
      <a href="./Animation.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
          class="fa fa-envelope fa-fw w3-margin-right"></i>Animation</a>
  </div>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
    title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">

    <!-- Header -->
    <header id="home">
      <a href="#"><img src="./Images/Pokemon/trainer.jpg" alt="My Logo" style="width:65px;"
          class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
          class="fa fa-bars"></i></span>
      <div class="w3-container seven">
        <h1><b>Home</b></h1>
        <h1 class="home-header-title">HALL OF FAME</h1>
      </div>
    </header>

    <!-- First Photo Grid-->
    <div class="hall-of-fame">
      <div class="w3-row-padding home-pokemon-background">
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="./Images/Pokemon/pikachu.png" alt="Pokemon 1" style="width:100%" class="hover-image">
        <hr>
        <div class="w3-container w3-white">
          <p><b>Pikachu</b></p>
          <p>Pikachu is yellow with brown stripes on its back, black-tipped ears, red electrical pouches on its cheeks,
             and has a lightning-bolt-shaped tail.</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="./Images/Pokemon/lucario.png" alt="Pokemon 2" style="width:100%" class="hover-image">
        <hr>
        <div class="w3-container w3-white">
          <p><b>Lucario</b></p>
          <p>Lucario, the Aura Pokémon. Lucario has the power to detect their opponent's thoughts and actions by reading their aura.
             Lucario, the Aura Pokémon and the evolved form of Riolu. Lucario reads the thoughts of others and anticipates
              their movements by sensing their auras.</p>
        </div>
      </div>
      <div class="w3-third w3-container">
        <img src="./Images/Pokemon/draco.png" alt="Pokemon 3" style="width:100%" class="hover-image">
        <hr>
        <div class="w3-container w3-white">
          <p><b>Dracovich</b></p>
          <p>Its mighty legs are capable of running at speeds exceeding 40 mph, but this Pokémon can't breathe unless it's underwater.
             Powerful legs and jaws made it the apex predator of its time. Its own overhunting of its prey was what drove it to extinction.</p>
        </div>
      </div>
    </div>

    <!-- Line Break -->
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

    <!-- Second Photo Grid-->
    <div class="w3-row-padding home-pokemon-background">
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="./Images/Pokemon/gengar.png" alt="Pokemon 4" style="width:100%" class="hover-image">
          <hr>
          <div class="w3-container w3-white">
            <p><b>Gengar</b></p>
            <p>Gengar is a dark purple, bipedal Pokémon with a roundish body. It has red eyes, a wide mouth that is 
              usually curled into a sinister grin, and pointed ears.</p>
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="./Images/Pokemon/dragonite.png" alt="Pokemon 5" style="width:100%" class="hover-image">
          <hr>
          <div class="w3-container w3-white">
            <p><b>Dragonite</b></p>
            <p>It is a kindhearted Pokémon that leads lost and foundering ships in a storm to the safety of land.
              It can circle the globe in just 16 hours. It is a kindhearted Pokémon that leads lost and foundering ships
                in a storm to the safety of land. It can fly in spite of its big and bulky physique.</p>
          </div>
        </div>
        <div class="w3-third w3-container">
          <img src="./Images/Pokemon/sirf.png" alt="Pokemon 6" style="width:100%" class="hover-image">
          <hr>
          <div class="w3-container w3-white">
            <p><b>Sirfetch'd</b></p>
            <p>Sirfetch'd is an avian Pokémon that resembles a white duck, standing no taller than its pre-evolved form Farfetch'd and retaining its yellow beak,
              legs, webbed feet, brown eyes, black eyebrow-like marking, and its stubby tail. It has a crest on its head,
                consisting of three feathers standing upright.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Line Break -->
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

    <div class="w3-container w3-padding-large" style="margin-bottom:32px">
      <h4><b>About Me</b></h4>
      <p>Ash is a young man who travels with various companions, aiming to fulfill his dream
         to become a Pokémon Master and the greatest Pokémon Trainer in the world. As a ten-year-old hailing from Pallet Town in the Kanto region,
         which according to Pokémon trainer registration bylaws allowed him to become a full-fledged Pokémon trainer and obtain a starter Pokémon.
         After receiving Pikachu and a Pokédex, Ash left Pallet Town to start his journey. Since then Ash has traveled the world of Pokémon and has competed in many challenges
          including winning the Pokemon World championship.</p>
      <hr>

          <!-- Images of Me -->
    <div class="w3-row-padding w3-padding-16" id="about">
      <div class="w3-col m6">
        <img src="./Images/Pokemon/ash1.png" alt="Ash1" style="width:100%; max-height: 500px">
      </div>
      <div class="w3-col m6">
        <img src="./Images/Pokemon/ash2.png" alt="Ash2" style="width:100%; max-height: 500px; background-color: #f7f7f7;">
      </div>
    </div>
    <hr>

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-dark-grey">
      <div class="w3-row-padding">
        <div class="w3-third">
          <h3>FOOTER</h3>
          <p>I wanna be the very best! Like no one ever was!<br/>
            To catch them is my real test, to train them is my cause!
          </p>
          <p>Powered by Friendship</a></p>
        </div>

        <div class="w3-third">
          <h3>BLOG POSTS</h3>
          <ul class="w3-ul w3-hoverable">
            <li class="w3-padding-16">
              <img src="./Images/Pokemon/misty.png" alt="SomeText1" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">CONGRATS ASH!!</span><br>
              <span>I knew you could do it! Now you can afford to buy me a new bike!</span>
            </li>
            <li class="w3-padding-16">
              <img src="./Images/Pokemon/brock.jpg" alt="SomeText2" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">Way to go!</span><br>
              <span>I still can't believe your Pikachu beat my Onix!</span>
            </li>
          </ul>
        </div>

        <div class="w3-third">
          <h3>External Links</h3>
          <div class="w3-panel w3-large">
            <a href="https://www.facebook.com/Pokemon/" class="icon-block" target="_blank" style="font-size: 40px">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
            </a>
            <a href="https://www.linkedin.com/in/kyle-peniston-614628158/" class="icon-block" target="_blank" style="font-size: 40px">
              <i class="fa fa-linkedin w3-hover-opacity"></i>
            </a>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="icon-block" target="_blank" style="font-size: 40px">
              <i class="fa fa-youtube w3-hover-opacity"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>

    <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp"
        title="W3.CSS" target="_blank" class="w3-hover-opacity">Sweat and Tears</a></div>

    <!-- End page content -->
  </div>

  <script>
    // Script to open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>

</body>

<>