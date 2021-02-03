
<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 

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

    <title>Register</title>
</head>   

<body>
   <?php 
     include(ROOT_PATH . "/app/include/header.php");
   ?>

    <div class="auth-content">
      <form action="register.php" method="post">
        <h2 class="form-tittle">Register</h2>

        <?php 
            include(ROOT_PATH . "/app/helpers/formErrors.php");
        ?>

        <div>
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
        </div>
        <div>
          <label>Email</label>
          <input type="text" name="email" value="<?php echo $email; ?>" class="text-input">
        </div>
        <div>
          <label>Pasword</label>
          <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
        </div>
        <div>
          <label>Pasword Confirmation</label>
          <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
        </div>
        <div>
          <button type="submit" name="register-btn" class="btn btn-bg">Register</button>
        </div>
        <p>Or <a href="<?php echo BASE_URL . "/login.php" ?>">Sign In</a></p>
      </form>
    </div>



    
  <!--jquery library--> 
    <script src="assets/js/jquery.js"></script>

   <!--custom javascript-->
   <script src="assets/js/scripts.js"></script>

</body>
</html> 