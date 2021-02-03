
<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php") ;

guestOnly();

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UT-F">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!--font awesome-->
    <link rel="stylesheet" href="assets/css/fonts.css">

     <!--font awesome-->
    <link rel="stylesheet" href="assets/css/all.css">

    <!--custom style-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
</head>   

<body>
   <?php 
     include(ROOT_PATH . "/app/include/header.php");
  ?>

    <div class="auth-content">
      <form action="login.php" method="post">
        <h2 class="form-tittle">Login</h2>

        <?php 
            include(ROOT_PATH . "/app/helpers/formErrors.php");
        ?>

        <div>
          <label>Username</label>
          <input type="text" value="<?php echo $username; ?>" name="username" class="text-input">
        </div>
        <div>
          <label>Pasword</label>
          <input type="password" value="<?php echo $password; ?>" name="password" class="text-input">
        </div>
        <div>
          <button type="submit" name="login-btn" class="btn btn-bg">Login</button>
        </div>
        <p>Or <a href="<?php echo BASE_URL . "/register.php" ?>">Sign Up</a></p>
      </form>
    </div>



   <!--jquery library--> 
    <script src="assets/js/jquery.js"></script>

   <!--custom javascript-->
   <script src="assets/js/scripts.js"></script>

</body>
</html> 