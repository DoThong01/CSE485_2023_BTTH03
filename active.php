<?php
    include 'configs/DBConnection.php';
    $dbConn = new DBConnection();
    $conn = $dbConn->getConnection();
    if(isset($_GET['userName'])) {
        $getUserName = $_GET['userName'];
        $getHashCode = $_GET['hashCode'];
        // echo $getUserName;
        // echo $getHashCode;
        

        $sql = "SELECT * from user where username = '$getUserName'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch();
        var_dump($row);
        if($getHashCode == $row['hashCode']) {
            $updateUser = "UPDATE user SET active = '1' WHERE username =  '$getUserName'";
            $stmt = $conn->prepare($updateUser);
            $stmt->execute();
            echo "Ban da dang ki thanh cong";
        }
    } else {
        echo "k get dc";
    }
?>