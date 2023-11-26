<?php


$title = urldecode($_GET['title']);

$photo = urldecode($_GET['photo']);
$description = urldecode($_GET['body']);
$date= urldecode($_GET['date']);
$blog_id= urldecode($_GET['blog_id']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> 
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
</head>
<body>
	<?php  include 'sidebar.php';?>
    <div class="container-fluid">
        <main class="tm-main">
           
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                 
                    <img src="<?php echo $photo; ?>" alt="<?php echo $title ?>">
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">   
                                    
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title"><?php  echo $title;?></h2>
                            <p class="tm-mb-40"> <?php  echo $date;?> by Admin Nat</p>
                            <p>
                            <?php  echo $description;?>
                            </p>
                            <span class="d-block text-right tm-color-primary">Creative . Design . Business</span>
                        </div>
                        
                                                <div>
                            <h2 class="tm-color-primary tm-post-title">Comments</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            <?php
                                 include('config.php');

                                
                                 $sql = "SELECT * FROM comment";
                                 $result = $conn->query($sql);
                                 if ($result->num_rows > 0) {
                                    
                                     while ($row = $result->fetch_assoc()) {
                                echo'
                            <div class="tm-comment tm-mb-45">
                                <figure class="tm-comment-figure">
                                    <img src="img/comment-1.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                                    <figcaption class="tm-color-primary text-center">Unknown</figcaption>
                                </figure>
                                
                                <div>
                                    <p>
                                ' .$row['comment_txt'] .'
                                    </p>
                                    <div class="d-flex justify-content-between">

                                        <span class="tm-color-primary">' .$row['comment_time'] .'</span>
                                    </div>                                                 
                                </div>                        
                            </div>
                            '; }
   
                            } else {
                                echo "No Avlaible Comments";
                            }
                                ?>      
                            <div class="tm-comment-reply tm-mb-45">
                                <hr>
                                
                            </div>
                            <form class="mb-5 tm-comment-form" method="post" action="comment_con.php" >
                                <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                                
                                <div class="mb-4">
                                    <textarea class="form-control" name="message" rows="6" placeholder="wrtite comment here....." name="message"></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="tm-btn tm-btn-primary tm-btn-small" type="submit">Submit</button>                        
                                </div>                                
                            </form>                          
                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 tm-aside-col">
                    <div class="tm-post-sidebar">
                        <hr class="mb-3 tm-hr-primary">
                        <video width="954" height="535" controls class="tm-mb-40">
                        <source src="video/wheat-field.mp4" type="video/mp4">							  
                        Your browser does not support the video tag.
                    </video>
                        <hr class="mb-3 tm-hr-primary">
                        
                        
                    </div>                    
                </aside>
            </div>
            <?php  include 'footer.php';?>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>