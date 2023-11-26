<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $password = $_POST['password'];
    $user = $_POST['username'];
   
   
    $sql = "SELECT * FROM admin WHERE admin_name='$user' ";
    $result = $conn->query($sql);

   
    $row=mysqli_fetch_assoc($result);
   
   
    if ($result->num_rows > 0) {
        
        
        if (password_verify($password, $row['a_password'])) {
           
            echo "<script>alert('Welcome! You have successfully logged in.');</script>";
            
            header('location: customer.php');
            
            exit(); 
        } else {
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
            header('location: a_login.php');
        }
    } else {
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
    }

   
}
else{
  echo "not work";
}

$conn->close();
?>