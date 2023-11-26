
<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment= $_POST['message'];
    $author = $_SESSION['username'];
    $sql =  "INSERT INTO comment (comment_txt,user) VALUES ('$comment','$author')";

        if ($conn->query($sql) === TRUE) {
            echo "<script> alert('Book information uploaded successfully.'); </script>";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
  
}

$conn->close();
?>
