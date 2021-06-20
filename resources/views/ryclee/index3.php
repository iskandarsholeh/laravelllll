<?php
session_start();
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
	
    if($user == $user AND $password == $password){
 
        $_SESSION['user'] = $user;
        header('Location: login.php');
    }
    else{
 
        echo "<script type='text/javascript'>
        alert('Username & Password Anda Salah!');
        history.back(self);
        </script>";
    }
}
 
?>
 
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Login Sederhana </title>
</head>
<body>
    <div class="container">
      <div class="row justify-content-center mt-3">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center"> <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
            <div class="card-body">
               <form method="POST" action="index.php">
                <div class="form-group">
                  <input type="text" name="user" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="text" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Login" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>