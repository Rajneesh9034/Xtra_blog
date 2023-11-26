
 <?php
include('config.php');


$id= $_POST['user_id'];
echo $id;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];
    $newStatus = $_POST['status'];

   
    $updateQuery = "UPDATE user SET username = '$newUsername', email = '$newEmail', password = '$newStatus' WHERE user_id = $id";

    if ($conn->query($updateQuery) === TRUE) {
       
        header("Location: customer.php");
        exit();
    } else {
        
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>
