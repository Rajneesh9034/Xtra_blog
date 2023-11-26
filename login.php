<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $password = $_POST['password'];
    $user = $_POST['username'];
   
   
    $sql = "SELECT * FROM user WHERE username='$user' ";
    $result = $conn->query($sql);

   
    $row=mysqli_fetch_assoc($result);
   
   
    
    if ($result->num_rows > 0) {
        
        
        if (password_verify($password, $row['password'])) {
            session_start();
            echo "<script>alert('Welcome! You have successfully logged in.');</script>";
            $_SESSION['username']=$user;
            header('location: index.php');
            
            exit(); 
        } else {
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
            header('location: index.html');
        }
    } else {
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
    }

   
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xtra Blog Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->

    
    <!-- Your code -->
  
  <link rel="stylesheet" href="admin panel/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Xtra</b>Blog</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
              <a href="admin panel/a_login.php" class="text-center">For Only Admin </a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LdaABgpAAAAAEgDw9kjgPpajZ7wIBrKq5tvj92L', {action: 'LOGIN'});
    });
  }
</script>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6LdaABgpAAAAAEgDw9kjgPpajZ7wIBrKq5tvj92L" async defer></script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
