<?php
require ('../config/database.php');
session_start();

if (isset($_POST)) {
    $success = '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address1 = isset($_POST['address1']) ? $_POST['address1'] : '';
    $address2 = isset($_POST['address2']) ? $_POST['address2'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    try {
        $query = $connection->prepare("INSERT INTO faq (NAME, email, address1, address2, city, state, zipcode, message) VALUES (?,?,?,?,?,?,?,?)");
        // "s" means the database expects a string
        $query->bind_param("ssssssss", $name, $email,$address1, $address2, $city, $state, $zipcode, $message);
        $query->execute();
        $query->close();
        $_SESSION['msg'] = 'Submit is successfully';
        header("location:../faq.php#contact");
    }catch (\Exception $exception){

    }
}
 ?>
