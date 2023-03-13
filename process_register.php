<?php
require 'vendor/autoload.php';
include 'Utilities/email_sender.php';
require 'configs/DBConnection.php';

define('APP_ROOT', dirname(__FILE__));  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST['txtUser'];
        $password = $_POST['txtPassword'];
        $email = $_POST['txtEmail'];
        
        $hash = rand(100000, 999999);

        $addUser = "INSERT INTO user(username, pass, email, hashCode) VALUES ('$userName','$password','$email', '$hash')";
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $stmt = $conn->prepare($addUser);
        $stmt->execute();

        $emailServer = new MyEmailServer();
        $emailSender = new EmailSender($emailServer);
        $emailSender->send($email, "This is a registration email", "http://localhost/demo_namespace_composer/active.php?userName=$userName&hashCode=$hash");
            
    }
?>