<?php 
    try {        
        $last_id = $_SESSION["last_id"];
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("SELECT userName, password, firstName, lastName, address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth ".
        " FROM registration WHERE id = :last_id");

        $stmt->bindParam(':last_id',$last_id);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $assocArray = $stmt->fetchAll()[0];
        $inputName = $assocArray["userName"];
        $userPassword = $assocArray["password"];
        $firstName = $assocArray["firstName"];
        $lastName = $assocArray["lastName"];
        $address1 = $assocArray["address1"];
        $address2 = $assocArray["address2"];
        $city = $assocArray["city"];
        $state = $assocArray["state"];
        $zipCode = $assocArray["zipCode"];
        $phone = $assocArray["phone"];
        $email = $assocArray["email"];
        $gender = $assocArray["gender"];
        $mStatus = $assocArray["maritalStatus"];
        $dob = $assocArray["dateOfBirth"];
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } finally {
            $conn = null;
        }
?>