<!DOCTYPE html>
<?php
  include 'connectionInfo.php';
?>
<html lang="en">
  <!-- Head Section -->
  <head>
    <meta charset="utf-8">
    <title>Confirmation</title>
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
      <a href="#"><img src="./Images/Pokemon/trainer.jpg" style="width:65px;"
          class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
          class="fa fa-bars"></i></span>
      <div class="w3-container">
        <h1 class="confirmation-title"><b>Confirmation Page</b></h1>
      </div>
    </header>

    <!-- Confirmation Section -->
    <?php 
        include 'selectUserData.php';
    ?>

    <div class="badgeBox">
      <div class="badge-box-1">
      <img src="./Images/Pokemon/badge1.png" alt="NoImage" class="w3-left w3-margin-right" style="width:100px">
      <img src="./Images/Pokemon/badge2.png" alt="NoImage" class="w3-left w3-margin-right" style="width:100px">
      <img src="./Images/Pokemon/badge3.png" alt="NoImage" class="w3-left w3-margin-right" style="width:100px">
      <img src="./Images/Pokemon/badge4.png" alt="NoImage" class="w3-left w3-margin-right" style="width:100px">
      </div>
        <div class="confirmationBox">
      <form name="registrationform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="registrationForm" novalidate>
            <div class="w3-section">
              <label for="userName">User Name</label>
              <input class="w3-input w3-border" type="text" name="userName" id="userName" min="6" max="50" value="<?php echo $inputName ?>" disabled>
            </div>
            <div class="w3-section">
              <label for="password">Password</label>
              <input class="w3-input w3-border" type="password" name="userPassword" id="userPassword" min="8" max="50" value="<?php echo $userPassword ?>" disabled>
            </div>
            <div class="w3-section">
              <label for="firstName">First Name</label>
              <input class="w3-input w3-border" type="text" name="firstName" id="firstName" max="50" value="<?php echo $firstName ?>" disabled>
            </div>
            <div class="w3-section">
              <label for="lastName">Last Name</label>
              <input class="w3-input w3-border" type="text" name="lastName" id="lastName" max="50" value="<?php echo $lastName ?>" disabled>
            </div>
            <div class="w3-section">
              <label for="addr1">Address Line 1</label>
              <input class="w3-input w3-border" type="text" name="addr1" id="addr1" max="100" value="<?php echo $address1 ?>" disabled>
            </div>
            <div class="w3-section">
              <label for="addr2">Address Line 2</label>
              <input class="w3-input w3-border" type="text" name="addr2" id="addr2"  placeholder="Optional" max="100" value="<?php echo $address2 ?>" disabled>
            </div>
            <div class="w3-section">
              <label for="city">City</label>
              <input class="w3-input w3-border" type="text" name="city" id="city" max="50" value="<?php echo $city ?>" disabled>
            </div>
            <div class="w3-section">
              <label for="state">State</label>
              <input class="w3-input w3-border" type="text" name="state" id="state" value="<?php echo $state ?>" disabled>
            </div>
            <div class="w3-section">
              <label for="zipcode">ZipCode</label>
              <input class="w3-input w3-border" type="text" name="zipcode" id="zipcode"  placeholder="######" min="5" max="10" value="<?php echo $zipCode?>" disabled>
            </div>
            <div class="w3-section">
              <label for="phoneNumber">Phone Number</label>
              <input class="w3-input w3-border" type="text" name="phoneNumber" id="phoneNumber"  placeholder="(###-###-####)" max="12" value="<?php echo $phone?>" disabled>
            </div>
            <div class="w3-section">
              <label for="email">Email</label>
              <input class="w3-input w3-border" type="email" name="email" id="email"  placeholder="123@abc.com" value="<?php echo $email?>" disabled>
            </div>
            <div class="w3-section">GENDER: <br/>
                  <label for="gender">Male</label>
                  <input class="w3-input w3-border" type="radio" name="gender" id="gender1" <?php if($gender == "Male") {echo "checked";}?> value="Male" disabled>
                  <label for="gender">Female</label>
                  <input class="w3-input w3-border" type="radio" name="gender" id="gender2" <?php if($gender == "Female") {echo "checked";}?> value="Female" disabled>
                  <label for="gender">Other</label>
                  <input class="w3-input w3-border" type="radio" name="gender" id="gender3" <?php if($gender == "Other") {echo "checked";}?> value="Other" disabled>
                </div>
            <div class="w3-section">Maritial Status: <br/>
              <label for="mStatus">Married</label>
              <input class="w3-input w3-border" type="radio" name="mStatus" id="mStatus1" <?php if($mStatus=="Married") {echo "checked";}?> value="Married" disabled>
              <label for="mStatus">Divorced</label>
              <input class="w3-input w3-border" type="radio" name="mStatus" id="mStatus2" <?php if($mStatus=="Divorced") {echo "checked";}?> value="Divorced" disabled>
              <label for="mStatus">Lucky</label>
              <input class="w3-input w3-border" type="radio" name="mStatus" id="mStatus3" <?php if($mStatus=="Lucky") {echo "checked";}?> value="Lucky" disabled>
            </div>
            <div class="w3-section">
              <label for="dob">Date of Birth</label>
              <input class="w3-input w3-border" type="date" name="dob" id="dob" value="<?php echo $dob ?>" disabled>
            </div>
          </form>
        </div>
      <div class="badge-box-2">
      <img src="./Images/Pokemon/badge5.png" alt="NoImage" class="w3-left w3-margin-right" style="width:100px">
      <img src="./Images/Pokemon/badge6.png" alt="NoImage" class="w3-left w3-margin-right" style="width:100px">
      <img src="./Images/Pokemon/badge7.png" alt="NoImage" class="w3-left w3-margin-right" style="width:100px">
      <img src="./Images/Pokemon/badge8.png" alt="NoImage" class="w3-left w3-margin-right" style="width:100px">        
      </div>
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
              <img src="./Images/Pokemon/delia.jpg" alt="NoImage" class="w3-left w3-margin-right" style="width:50px">
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