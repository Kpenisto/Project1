<!DOCTYPE html>
<?php
  include 'connectionInfo.php';
?>
<html lang="en">
  <?php 
      $userNameErr = $passwordErr = $repPasswordErr = $firstNameErr = $lastNameErr = $addrErr = $cityErr = $zipErr = $phoneErr = $emailErr = $genderErr = $mStatusErr = $dobErr = "";
      $inputName = $userPassword = $repPassword = $firstName = $lastName = $addr = $addr2 = $state = $city = $zip = $phoneNumber = $email = $gender = $mStatus = $dob = "";
      $isValid = false;

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;
        $stmt;
        
        $inputName = $_POST["inputName"];
        if (empty($inputName)) {
          $userNameErr = "Name is required";
          $isValid = false;
        } else {
          //check length requirements
          if(strlen($inputName) > 50 || strlen($inputName) < 6) {
            $userNameErr = "Username does not meet the length requirements";
            $isValid = false;
          }
        }

        $userPassword = $_POST["userPassword"];
        if (empty($userPassword)) {
          $passwordErr = "Password is required";
          $isValid = false;
        } else {
          //check password requirements
          if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{4,}$/", $userPassword)) {
            $passwordErr = "Password does not meet the complexity requirements";
            $isValid = false;
          }        
        }

        $repPassword = $_POST["repPassword"];
        if (empty($repPassword)) {
          $repPasswordErr = "Password is required";
          $isValid = false;
        } else {
          //compare passwords
          if($userPassword != $repPassword) {
            $repPasswordErr = "Passwords do not match";
            $isValid = false;
          }        

        }

        $firstName = $_POST["firstName"];
        if (empty($firstName)) {
          $firstNameErr = "First name is required";
          $isValid = false;
        } else {
            //check length requirements
            if(strlen($firstName) > 50 || strlen($firstName) == 0) {
              $firstNameErr = "First Name does not meet the length requirements";
              $isValid = false;
            }          
        }

        $lastName = $_POST["lastName"];
        if (empty($lastName)) {
          $lastNameErr = "Last name is required";
          $isValid = false;
        } else {
            //check length requirements
            if(strlen($lastName) > 50 || strlen($lastName) == 0) {
              $lastNameErr = "Last Name does not meet the length requirements";
              $isValid = false;
            }          
        }

        $addr = $_POST["addr1"];
        $addr2 = $_POST["addr2"];
        if (empty($addr)) {
          $addrErr = "Address is required";
          $isValid = false;
        } else {
            //check length requirements
            if(strlen($addr) > 100 || strlen($addr) == 0) {
              $addrErr = "Last Name does not meet the length requirements";
              $isValid = false;
            }   
        }

        $city = $_POST["city"];
        if (empty($city)) {
          $cityErr = "City is required";
          $isValid = false;
        } else {
            //check length requirements
            if(strlen($city) > 50 || strlen($city) == 0) {
              $cityErr = "City does not meet the length requirements";
              $isValid = false;
            }   
        }

        $state = $_POST["state"];

        $zipcode = $_POST["zipcode"];
        if (empty($zipcode)) {
          $zipErr = "Zipcode is required";
          $isValid = false;
        } else {
          if(strlen($zipcode) != 5 && strlen($zipcode) != 9) {
            $zipErr = "Zipcode does not meet the length requirements";
            $isValid = false;
          }  
        }

        $phoneNumber = $_POST["phoneNumber"];
        if (empty($phoneNumber)) {
          $phoneErr = "Phone Number is required";
          $isValid = false;
        } else {
            //check length requirements
            if(strlen($phoneNumber) < 7 ) {
              $phoneErr = "Phone Number does not meet the length requirements";
              $isValid = false;
            }  
        }

        $email = $_POST["email"];
        if (empty($email)) {
          $emailErr = "Email is required";
          $isValid = false;
        } else {
          //check length requirements
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $isValid = false;
          } 
        }

        if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
          $isValid = false;
        } else {
          $gender = $_POST["gender"];
        }

        if (empty($_POST["mStatus"])) {
          $mStatusErr = "Maritial Status is required";
          $isValid = false;
        } else {
          $mStatus = $_POST["mStatus"];
        }

        if (empty($_POST["dob"])) {
          $dobErr = "Date of Birth is required";
          $isValid = false;
        } else {
          $dob = $_POST["dob"];
        }
      }
  ?>

  <!-- Head Section -->
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
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
      <a href="./Registration.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
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
        <h1><b>Registration</b></h1>
        <h1 class="home-header-title">Sign Up To Battle The Champion</h1>
      </div>
    </header>

    <!-- Contact Section -->
<div class="w3-container w3-padding-large w3-grey" style="background-color: #fdf5e6!important;">
    <h4 id="register"><b>Registration</b></h4>
    <hr class="w3-opacity">
    <form name="registrationform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="registrationForm" novalidate>
      <div class="w3-section">
        <label for="inputName">User Name</label>
        <input class="w3-input w3-border" type="text" name="inputName" id="inputName" min="6" max="50" value="<?php echo isset($_POST['inputName']) ? $_POST['inputName'] : '' ?>">
        <span id="errUserName" class="hide errMessageBox">User Name must be between 6 and 50 characters.</span>
        <span class="errMessageText">* <?php echo $userNameErr;?></span>
      </div>
      <div class="w3-section">
        <label for="password">Password</label>
        <input class="w3-input w3-border" type="password" name="userPassword" id="userPassword" min="8" max="50" value="<?php echo isset($_POST['userPassword']) ? $_POST['userPassword'] : '' ?>">
        <span id="errPassword" class="hide errMessageBox">Password must be between 8 and 50 characters.</span>
        <span class="errMessageText">* <?php echo $passwordErr;?></span>
      </div>
      <div class="w3-section">
        <label for="repPassword">Repeat Password</label>
        <input class="w3-input w3-border" type="password" name="repPassword" id="repPassword" min="8" max="50" value="<?php echo isset($_POST['repPassword']) ? $_POST['repPassword'] : '' ?>">
        <span id="errRepPassword" class="hide errMessageBox">Passwords do not match</span>
        <span class="errMessageText">* <?php echo $repPasswordErr;?></span>
      </div>
      <div class="w3-section">
        <label for="firstName">First Name</label>
        <input class="w3-input w3-border" type="text" name="firstName" id="firstName" max="50" value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
        <span id="errFirstName" class="hide errMessageBox">First Name is  and must be less than 50 characters.</span>
        <span class="errMessageText">* <?php echo $firstNameErr;?></span>
      </div>
      <div class="w3-section">
        <label for="lastName">Last Name</label>
        <input class="w3-input w3-border" type="text" name="lastName" id="lastName" max="50" value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
        <span id="errLastName" class="hide errMessageBox">Last Name is  and must be less than 50 characters.</span>
        <span class="errMessageText">* <?php echo $lastNameErr;?></span>
      </div>
      <div class="w3-section">
        <label for="addr1">Address Line 1</label>
        <input class="w3-input w3-border" type="text" name="addr1" id="addr1" max="100" value="<?php echo isset($_POST['addr1']) ? $_POST['addr1'] : '' ?>">
        <span id="errAddr1" class="hide errMessageBox">Address is  and must be less than 100 characters.</span>
        <span class="errMessageText">* <?php echo $addrErr;?></span>
      </div>
      <div class="w3-section">
        <label for="addr2">Address Line 2</label>
        <input class="w3-input w3-border" type="text" name="addr2" id="addr2"  placeholder="Optional" max="100" value="<?php echo isset($_POST['addr2']) ? $_POST['addr2'] : '' ?>">
        <span id="errAddr2" class="hide errMessageBox">Address 2 must be less than 100 characters.</span>
      </div>
      <div class="w3-section">
        <label for="city">City</label>
        <input class="w3-input w3-border" type="text" name="city" id="city" max="50" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>">
        <span id="errCity" class="hide errMessageBox">City is  and must be less than 50 characters.</span>
        <span class="errMessageText">* <?php echo $cityErr;?></span>
      </div>
      <div class="w3-section">
        <label for="state">State</label>
        <select name="state" id="state" >
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
      </div>
      <div class="w3-section">
        <label for="zipcode">ZipCode</label>
        <input class="w3-input w3-border" type="text" name="zipcode" id="zipcode"  placeholder="######" min="5" max="10" value="<?php echo isset($_POST['zipcode']) ? $_POST['zipcode'] : '' ?>">
        <span id="errZipcode" class="hide errMessageBox">Zipcode must be between 5 or 9 characters</span>
        <span class="errMessageText">* <?php echo $zipErr;?></span>
      </div>
      <div class="w3-section">
        <label for="phoneNumber">Phone Number</label>
        <input class="w3-input w3-border" type="text" name="phoneNumber" id="phoneNumber"  placeholder="(###-###-####)" max="12" value="<?php echo isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>">
        <span id="errPhoneNumber" class="hide errMessageBox">Phone Number must be less than 12 characters</span>
        <span class="errMessageText">* <?php echo $phoneErr;?></span>      
      </div>
      <div class="w3-section">
        <label for="email">Email</label>
        <input class="w3-input w3-border" type="email" name="email" id="email"  placeholder="123@abc.com" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
        <span id="errEmail" class="hide errMessageBox">Email must match format "123@abc.com"</span>      
        <span class="errMessageText">* <?php echo $emailErr;?></span>
      </div>
      <div class="w3-section">GENDER: <br/>
            <label for="gender">Male</label>
            <input class="w3-input w3-border" type="radio" name="gender" id="gender1" <?php if($gender == "Male") {echo "checked";}?> value="Male" >
            <label for="gender">Female</label>
            <input class="w3-input w3-border" type="radio" name="gender" id="gender2" <?php if($gender == "Female") {echo "checked";}?> value="Female">
            <label for="gender">Other</label>
            <input class="w3-input w3-border" type="radio" name="gender" id="gender3" <?php if($gender == "Other") {echo "checked";}?> value="Other">
            <span class="errMessageText">* <?php echo $genderErr;?></span>
          </div>
      <div class="w3-section">Maritial Status: <br/>
        <label for="mStatus">Married</label>
        <input class="w3-input w3-border" type="radio" name="mStatus" id="mStatus1" <?php if($mStatus=="Married") {echo "checked";}?> value="Married" >
        <label for="mStatus">Divorced</label>
        <input class="w3-input w3-border" type="radio" name="mStatus" id="mStatus2" <?php if($mStatus=="Divorced") {echo "checked";}?> value="Divorced">
        <label for="mStatus">Lucky</label>
        <input class="w3-input w3-border" type="radio" name="mStatus" id="mStatus3" <?php if($mStatus=="Lucky") {echo "checked";}?> value="Lucky">
        <span class="errMessageText">* <?php echo $mStatusErr;?></span>
      </div>
      <div class="w3-section">
        <label for="dob">Date of Birth</label>
        <input class="w3-input w3-border" type="date" name="dob" id="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : '' ?>">
        <span class="errMessageText">* <?php echo $dobErr;?></span>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom" id="submitButton"><i
          class="fa fa-paper-plane w3-margin-right"></i>Submit</button>
        <button type="reset" class="w3-button w3-black w3-margin-bottom" id="resetButton"><i
            class="fa fa-paper-plane w3-margin-right"></i>Reset</button>
    </form>
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
              <img src="./Images/Pokemon/todd.jpg" alt="Todd" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">LETS GO WATCH SOME POKEMON</span><br>
              <span>I took some great shots of your championship battle! Pikachu has never looked so cool!</span>
            </li>
            <li class="w3-padding-16">
              <img src="./Images/Pokemon/may.jpg" alt="May" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">STYLISH!</span><br>
              <span>Piplup and I were cheering for you in the stands! We knew you would be the very best!</span>
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
  </form>

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

<?php
  if ($isValid) {
    include 'insertValidData.php';
  }
?>

  </body>
<> 