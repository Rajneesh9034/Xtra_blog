
<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
   

    $email = $_POST['email'];

   
    $checkQuery = "SELECT * FROM user WHERE username='$username' OR email='$email'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo "<script> alert('User with this username or email already exists. Please choose a different username or email.'); </script>";
    } else {
        
       
            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
            $insertQuery = "INSERT INTO user (username, password, email) VALUES ('$username', '$passwordHashed', '$email')";
           
            if ($conn->query($insertQuery) === TRUE) {
                echo "<script> alert('Registration successful.'); </script>";

                header('location: customer.php'); 
            } else {
                echo "<script> alert('already exist email or username'); </script>";
                header('location: '); 
            }
        
    }
}

$conn->close();
?>
