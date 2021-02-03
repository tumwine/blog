<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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

    <title>Admin Section - Add Post</title>
</head>   

<body>

    <?php include(ROOT_PATH . "/app/include/adminheader.php");?>

<!-- AdminPage Wrapper-->
<div class="admin-wrapper">

  <?php include(ROOT_PATH . "/app/include/adminsidebar.php");?>

   <div class="admin-content">
    <div class="button-group">
      <a href="create.php" class="btn btn-big" >Add Post</a>
      <a href="index.php" class="btn btn-big">Manage Post</a>
    </div>

    <div class="content">
      <h2 class="page-tittle">Add Post</h2>

      <?php 
            include(ROOT_PATH . "/app/helpers/formErrors.php");
      ?>

      <form action="create.php" method="post" enctype="multipart/form-data">
        <div>
          <label>Tittle</label>
          <input type="text" name="tittle" value="<?php echo $tittle; ?>" class="text-input">
        </div>
        <div>
          <label>Body</label>
          <textarea name="body" id="body"><?php echo $body; ?></textarea>
        </div>
         
         <div>
           <label>Image</label>
           <input type="file" name="image" class="text-input">
         </div>

        <div>
          <label>Topic</label>
        <select name="topic_id" class="text-input">       
          <option value=""></option>

         <?php foreach ($topics as $key => $topic): ?>
            <?php if (!empty($topic_id) && $topic_id == $topic["id"]): ?>
            <option selected value="<?php echo $topic["id"] ?>"><?php echo $topic["name"] ?></option>   
            <?php else: ?>
            <option value="<?php echo $topic["id"] ?>"><?php echo $topic["name"] ?></option>
            <?php endif; ?>
         <?php endforeach; ?>

        </select>
        </div>

        <div>
          <?php if (empty($published)): ?>
          <label>
            <input type="checkbox" name="published">
            Publish
          </label>
            
          <?php else: ?>
            <label>
            <input type="checkbox" name="published" checked>
            Publish
          </label>
            
          <?php endif ?>
          
        </div>

        <div>
          <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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