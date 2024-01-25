<?php
include("connection.php");

if (isset($_POST['login'])) {
    $email = $_POST['ema'];
    $password = $_POST['pass'];


    $sql = "SELECT * FROM login WHERE email = ?"; 
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        
        $row = $result->fetch_assoc();

        
        if ($password === $row['password']) { 
            header("Location: welcome.php");
            exit();
        } else {
            echo '<script>alert("Login failed. Invalid email or password.");</script>';
        }
    } else {
        echo '<script>alert("Login failed. Invalid email or password.");</script>';
    }
}
?>
