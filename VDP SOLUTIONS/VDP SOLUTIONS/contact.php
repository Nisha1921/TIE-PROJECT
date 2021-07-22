<?php
    $fullname = $_POST['full name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mobilenumber = $_POST['mobile number'];
    $review = $_POST['review'];

    //database connection
    $conn = new mysqli('localhost','root','','vdp');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into vdp reveiws(full name,email,subject,mobile enumber,review)
        values(?,?,?,?)");
        $stmt->bind_param("sssis",$fullname,$email,$subject,$mobilenumber,$message);
        $stmt->execute();
        echo "your review is sumbitted...";
        $stmt->close();
        $conn->close();
    }
?>