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
<?php
include 'sidebar.php';
?>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
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
            <?php
            
 include('config.php'); // Include the database connection script

// Fetch data from the 'cars' table
$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   
    while ($row = $result->fetch_assoc()) {
               echo' <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                   
                    <a href="post.php?title=' . urlencode($row['blog_title']) . '&body=' . urlencode($row['blog_body']) . '&photo=' . urlencode($row['blog_image']) . '&date=' . urlencode($row['date']).'&blog_id=' . urlencode($row['blog_id'])  .'">
                        <div class="tm-post-link-inner">
                            <img src="'. $row['blog_image'] .'" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">'. $row['blog_title'] .'</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        if you wants to read this blog click on image and title .after click you see 
                        Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Travel . Events</span>
                        <span class="tm-color-primary">'. $row['date'] .'</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        
                        <span>Anomyus</span>
                    </div>
                </article>';
            }
   
        } else {
            echo "No cars available.";
        }?>
                
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>                
            </div>            
            <?php  include 'footer.php';?>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>
