
<?php
include('config.php');
$id=$_POST['blog_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       

        
        $deleteQuery = "DELETE FROM blogs WHERE blog_id = $id";

        if ($conn->query($deleteQuery) === TRUE) {
            
            header("Location: blogs.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
   
    
}
$conn->close();
?>
