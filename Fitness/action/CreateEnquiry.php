<?php
require ('../config/database.php');
session_start();

if (isset($_POST)) {
    $success = '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    try {
        $query = $connection->prepare("INSERT INTO enquiry (name, email, message) VALUES (?,?,?)");
        // "s" means the database expects a string
        $query->bind_param("sss", $name, $email, $message);
        $query->execute();
        $query->close();
        $_SESSION['msg'] = 'Submit is successfully';
        header("location:../enquiry.php");
    }catch (\Exception $exception){

    }
}
?>
