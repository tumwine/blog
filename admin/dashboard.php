<?php include("../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UT-F">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--font awesome-->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    
       <!--font awesome-->
    <link rel="stylesheet" href="../assets/css/all.css">

    <!--custom style-->
    <link rel="stylesheet" href="../assets/css/style.css">
    
     <!--custom style-->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>Admin Section - Dashboard</title>
</head>   

<body>

    <?php include(ROOT_PATH . "/app/include/adminheader.php");?>

<!-- AdminPage Wrapper-->
<div class="admin-wrapper">

  <?php include(ROOT_PATH . "/app/include/adminsidebar.php");?>

  <div class="admin-content">
 

    <div class="content">
      <h2 class="page-tittle">Dashboard</h2>

      <?php 
     include(ROOT_PATH . "/app/include/message.php");
      ?>

    </div>
  </div>
</div>
    
   <!--jquery library-->
   <script src="../assets/js/jquery.js"></script>

   <!--ckeditor-->
   <script src="../assets/js/ckeditor.js"></script>

   <!--custom javascript-->
   <script src="../assets/js/scripts.js"></script>

</body>
</html> 