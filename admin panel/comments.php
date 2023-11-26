<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xtra Blog | Comments</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

   

    <?php
     include ('nav.php'); 
     ?>
       


              <style>
                /* Full-width input fields */
                input[type=text],
                input[type=password] {
                  width: 100%;
                  padding: 6px 12px;
                  margin: 4px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
                }

                /* Set a style for all buttons */
                button {
                  background-color: #1753dd;
                  color: white;
                  padding: 8px 15px;
                  margin: 6px 0;
                  border: none;
                  cursor: pointer;
                  width: 50%;
                }

                button:hover {
                  opacity: 0.8;
                }

                /* Extra styles for the cancel button */
                .cancelbtn {
                  width: auto;
                  padding: 6px 15px;
                  background-color: #f44336;
                }

                /* Center the image and position the close button */
                .imgcontainer {
                  text-align: center;
                  margin: 15px 0 8px 0;
                  position: relative;
                }

                img.avatar {
                  width: 15%;
                  border-radius: 50%;
                }

                .container {
                  padding: 16px;
                }

                span.psw {
                  float: right;
                  padding-top: 16px;
                }

                /* The Modal (background) */
                .modal {
                  display: none;
                  /* Hidden by default */
                  position: fixed;
                  /* Stay in place */
                  z-index: 1;
                  /* Sit on top */
                  left: 0;
                  top: 0;
                  width: 100%;
                  /* Full width */
                  height: 100%;
                  /* Full height */
                  overflow: auto;
                  /* Enable scroll if needed */
                  background-color: rgb(0, 0, 0);
                  /* Fallback color */
                  background-color: rgba(0, 0, 0, 0.4);
                  /* Black w/ opacity */
                  padding-top: 60px;
                }

                /* Modal Content/Box */
                .modal-content {
                  background-color: #fefefe;
                  margin: 5% auto 15% auto;
                  /* 5% from the top, 15% from the bottom and centered */
                  border: 1px solid #888;
                  width: 50%;

                  /* Could be more or less, depending on screen size */
                }

                /* The Close Button (x) */
                .close {
                  position: absolute;
                  right: 25px;
                  top: 0;
                  color: #000;
                  font-size: 35px;
                  font-weight: bold;
                }

                .close:hover,
                .close:focus {
                  color: red;
                  cursor: pointer;
                }

                /* Add Zoom Animation */
                .animate {
                  -webkit-animation: animatezoom 0.6s;
                  animation: animatezoom 0.6s
                }

                @-webkit-keyframes animatezoom {
                  from {
                    -webkit-transform: scale(0)
                  }

                  to {
                    -webkit-transform: scale(1)
                  }
                }

                @keyframes animatezoom {
                  from {
                    transform: scale(0)
                  }

                  to {
                    transform: scale(1)
                  }
                }

                /* Change styles for span and cancel button on extra small screens */
                @media screen and (max-width: 300px) {
                  span.psw {
                    display: block;
                    float: none;
                  }

                  .cancelbtn {
                    width: 100%;
                  }
                }
                .modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
    max-width: 400px; /* Adjust the maximum width as needed */
    border-radius: 10px; /* Add border-radius for a more stylish look */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box-shadow for a subtle lift */
  }
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
    max-width: 400px; /* Adjust the maximum width as needed */
    border-radius: 10px; /* Add border-radius for a more stylish look */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box-shadow for a subtle lift */
  }
  table {
    border: 1px solid #ddd;
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  /* Add max-height and overflow to the description box */
  .container {
    padding: 16px;
  }

  .description-box {
    max-height: 100px; /* Adjust the maximum height as needed */
    overflow-y: auto;
  }


              </style>




             
      </ul>
    </nav>
    <!-- /.navbar -->
     <?php
     include ('sidebar.php'); 
     ?>
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Comments</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active"> Comments</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
<style>
  button{
    width: 100px;
  }
</style>
      <!-- Main content -->
      <div class="container">
        <!-- First Row -->

          <div class="row" >

              <div class="col-md-3">
              
              <div class="col-md-3">
          <br>
          
          </div>
          
        <!-- Table Section -->
        <div class="row">
          <div class="col-md-12">
            <!-- Table goes here -->
            <table class="table" id="class_rollno_section">
              <thead>
                <tr>
                  <th>s.no</th>
                  <th>Comments</th>
                  <th>Time</th>
                  <th>Sender</th>
                  
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                <?php
include('config.php');

// Fetch user data from the database
$query = "SELECT * FROM comment";
$result = $conn->query($query);
$c=1;
// Check if there's any data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" .$c++ . "</td>
            <td>" . $row['comment_txt'] . "</td>
            <td>" . $row['comment_time'] . "</td>
            <td>" . $row['user'] . "</td>
            
            <td class='action-buttons'>
            <td class='action-buttons'>
           
            
                   
                    <form action='comment_delete.php' method='POST'>
                      <input type='hidden' name='comment_id' value='" . $row['comment_id'] . "'>
                      <button type='submit' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</button>
                    </form>
                  
            </td>
        </tr>";
       
    }
} else {
    echo "<tr><td colspan='5'>No users found</td></tr>";
}

$conn->close();
?>

                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.content -->
    </div>

    
     <script>
    // Get the modal
    var modal = document.getElementById('id01');

   
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
</html>