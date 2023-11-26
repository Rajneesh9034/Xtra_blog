<?php 
session_start();
if($_SESSION['username']){
echo'
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Blog Editor</title>
    <!-- Bootstrap Cdn -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous">
    <!-- fontawesome cdn For Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous" />

    
    <style>
        h1 {
            padding-top: 40px;
            padding-bottom: 40px;
            text-align: center;
            color: #3498db !important;
            font-family: sans-serif;
        }

        section {
            padding: 5%;
            padding-top: 0;
            height: 100vh;
        }

        .flex-box {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .col {
            margin: 10px;
        }

        button {
            margin: 10px;
            border-color: #957dad !important;
            color: white;
            margin-bottom: 25px;
        }

        button:hover {
            background-color: #fec8d8 !important;
        }

        textarea {
            padding: 3%;
            border-color:  #3498db !important;
            border-width: thick;
        }

        #title,
        #image {
            width: 100%;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <section>
        <h1 class="shadow-sm">BLOG EDITOR</h1>

		<form action="add_blog_data.php" method="post" enctype="multipart/form-data">
        <div class="flex-box">
            <div class="col-md-6 col-sm-12">
                <label for="title">Title:</label>
                <input type="text" id="title" class="form-control" placeholder="Enter your title" name="title">
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="image">Upload Image:</label>
                <input type="file" id="image" class="form-control" accept="image/*" name="photo">
            </div>
        </div>

       

       
        <div class="flex-box">
            <div class="col">
                <textarea id="textarea1" class="input shadow" rows="15" cols="100"
                    placeholder="Your text here " name="description"></textarea>
            </div>
        </div>

        
        <div class="flex-box">
            <div class="col">
                <button type="Submit" onclick="submitForm()" class="btn btn-primary" >Submit</button>
            </div>
        </div>
	</form>
    </section>

    <br>
    <br>
   
    
    <script>
        // Your existing JavaScript functions remain unchanged
        function submitForm() {
            var title = document.getElementById("title").value;
            var image = document.getElementById("image").value;
            var textContent = document.getElementById("textarea1").value;

            console.log("Title: ", title);
            console.log("Image: ", image);
            console.log("Text Content: ", textContent);
        }
    </script>
</body>

</html>
';}else{
    header('location: login.php');
}
?>