<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UT-F">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!--font awesome-->
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    
      <!--font awesome-->
    <link rel="stylesheet" href="../../assets/css/all.css">

    <!--custom style-->
    <link rel="stylesheet" href="../../assets/css/style.css">
     <!--custom style-->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Add Topic</title>
</head>   

<body>

    <?php include(ROOT_PATH . "/app/include/adminheader.php");?>

<!-- AdminPage Wrapper-->
<div class="admin-wrapper">

   <?php include(ROOT_PATH . "/app/include/adminsidebar.php");?>

  <div class="admin-content">
    <div class="button-group">
      <a href="create.php" class="btn btn-big">Add Topic</a>
      <a href="index.php" class="btn btn-big">Manage Topics</a>
    </div>

    <div class="content">
      <h2 class="page-tittle">Add Topic</h2>

      <?php 
            include(ROOT_PATH . "/app/helpers/formErrors.php");
      ?>

      <form action="create.php" method="post">
        <div>
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $name; ?>"  class="text-input">
        </div>
        <div>
          <label>Description</label>
          <textarea name="description" id="body"><?php echo $description;?></textarea>
        </div>
        <div>
          <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
        </div>
        
      </form>

    </div>
  </div>
</div>
    
   <!--jquery library-->
   <script src="../../assets/js/jquery.js"></script>

   <!--ckeditor-->
   <script src="../../assets/js/ckeditor.js"></script>

   <!--custom javascript-->
   <script src="../../assets/js/scripts.js"></script>

</body>
</html> 