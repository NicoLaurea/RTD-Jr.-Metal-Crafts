<?php
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    //Database Connection
    $conn = new mysqli('localhost','root','','inquiry system');
        if($conn->connect_error){
            die('Submission Unsuccessful : '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into user_inquiry(Name, Email, Subject, Message)
				values(?, ?, ?, ?)");
            $stmt->bind_param("ssss", $Name, $Email, $Subject, $Message);
            $stmt->execute();
            echo "Submission Successfull";
            $stmt->close();
            $conn->close();
        }
	echo "<br><br>";
	echo "<a href = 'web.php'>Return to Home Page </a>";
?>


