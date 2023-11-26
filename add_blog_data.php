<?php
include('config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $author = htmlspecialchars($_SESSION['username']);
    $targetDir = "upload/";

    $targetFile = $targetDir . uniqid() . '_' . basename($_FILES["photo"]["name"]);

    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if ($check === false) {
        echo "<script> alert('File is not an image.'); </script>";
        exit;
    }

   
    if ($_FILES["photo"]["size"] > 5000000) {
        echo "<script> alert('Sorry, your file is too large.'); </script>";
        exit;
    }

    
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "<script> alert('Sorry, only JPG, JPEG, PNG, and GIF files are allowed.'); </script>";
        exit;
    }

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        $photoPath = $targetFile;

        $stmt = $conn->prepare("INSERT INTO blogs (blog_title, blog_body, author, blog_image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $description, $author, $photoPath);

        if ($stmt->execute()) {
            echo "<script> alert('Blog information uploaded successfully.'); </script>";
            header("Location: index.php");
            exit;
        } else {
            error_log("Error: " . $stmt->error);
            echo "<script> alert('An error occurred. Please try again later.'); </script>";
        }

        $stmt->close();
    } else {
        echo "<script> alert('File upload failed.'); </script>";
    }
}

$conn->close();
?>
