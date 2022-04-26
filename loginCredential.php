<?php
    $name = $_POST['txtUsername-chk'];
    $password = $_POST['txtPassword-chk'];

    $conn = new mysqli("localhost:3306", "root", "", "ait-asset-track");
    if($conn->connect_error)
    {
        die(" Can't connect to DB server " .$con-connect_error); 
    }
    else
    {
        $stmt = $conn->prepare("Select * from users where name = ?");
        $stmt->bind_param("s",$name);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password)
            {
                echo "<h2>Login Successfully</h2>";
                header("location:cxc.php");
            }
            else
            {
                echo "<h2>Invalid Email or Password</h2>";
            }
        }
        else
        {
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
?>