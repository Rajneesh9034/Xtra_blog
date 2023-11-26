
<?php
include('config.php');
$id=$_POST['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       

        
        $deleteQuery = "DELETE FROM user WHERE user_id = $id";

        if ($conn->query($deleteQuery) === TRUE) {
            
            header("Location: customer.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
   
    
}
$conn->close();
?>
