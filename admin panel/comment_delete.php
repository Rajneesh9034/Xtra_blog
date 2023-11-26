
<?php
include('config.php');
$id=$_POST['comment_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       

        
        $deleteQuery = "DELETE FROM comment WHERE comment_id = $id";

        if ($conn->query($deleteQuery) === TRUE) {
            
            header("Location: comments.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
   
    
}
$conn->close();
?>
