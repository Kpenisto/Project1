<?php 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->prepare("INSERT INTO registration (username, password, firstName, lastName, address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
    VALUES (:inputName, :userPassword, :firstName, :lastName, :addr1, :addr2, :city, :state, :zipcode, :phoneNumber, :email, :gender, :mStatus, :dob)");
    $sql->bindParam(':inputName', $inputName);
    $sql->bindParam(':userPassword', $userPassword);
    $sql->bindParam(':firstName', $firstName);
    $sql->bindParam(':lastName', $lastName);
    $sql->bindParam(':addr1', $addr);
    $sql->bindParam(':addr2', $addr2);
    $sql->bindParam(':city', $city);
    $sql->bindParam(':state', $state);
    $sql->bindParam(':zipcode', $zipcode);
    $sql->bindParam(':phoneNumber', $phoneNumber);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':gender', $gender);
    $sql->bindParam(':mStatus', $mStatus);
    $sql->bindParam(':dob', $dob);

    $sql->execute();
    ob_end_clean();

    $last_id = $conn->lastInsertId();
    $_SESSION["last_id"] = $last_id;

    header("Location: Confirmation.php");

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} finally {
    $conn = null;
}
?>