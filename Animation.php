<!DOCTYPE html>
<html lang="en">
  <!-- Head Section -->
  <head>
    <meta charset="utf-8">
    <title>Animation</title>
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

  <body>
  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
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
      <a href="./Project1.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
        class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a>
      <a href="./Registration.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
          class="fa fa-envelope fa-fw w3-margin-right"></i>Registration</a>
      <a href="./Animation.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
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
      <a href="#"><img src="./Images/Pokemon/trainer.jpg" style="width:65px;"
          class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
          class="fa fa-bars"></i></span>
      <div class="w3-container">
        <h1><b>Animation</b></h1>
      </div>
    </header>

    <!-- Animation Section -->
    <div class="Character">
        <img class="Character_shadow pixelart" src="./Images/DemoRpgCharacterShadow.png" alt="Shadow" />
        <img class="Character_spritesheet pixelart face-down" src="./Images/DemoRpgCharacter_new.png" alt="Character" />  
    </div>

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
              <img src="./Images/Pokemon/delia_NoImage.jpg" alt="NoImage" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">My BOY!</span><br>
              <span>Mr. Mine and I are so proud of you! Come visit us soon!</span>
            </li>
            <li class="w3-padding-16">
              <img src="./Images/Pokemon/oak.png" alt="Oak" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">You still can't ride your bike inside!</span><br>
              <span>There's a time and place for everything, but not now!</span>
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