<?php 

include("path.php");

include(ROOT_PATH . "/app/controllers/posts.php");


$trending = getTrendingPosts();
$post = selectOne( "posts", ["id" => $_GET["id"]]);
$topics = selectAll("topics");
$posts = getPostsBySameAuthor($_GET["name"]);
 ?>

 <?php 

 if (isset($_GET["id"]))
 {
   $sql = "UPDATE posts SET count = (count+1) WHERE id=".$_GET["id"]." ";
   $result = $conn->query($sql);

 }

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

    <title><?php echo $post["tittle"]?> | TumwineInspires</title>
</head>   

<body>
  <?php 
     include(ROOT_PATH . "/app/include/header.php");
  ?>

<!-- Page Wrapper-->
<div class="page-wrapper">

   <!--content-->
<div class="content clear-fix">

  <div class="main-content-wrapper"> 
 <div class="main-content single">
  <h1 class="post-tittle"><?php echo $post["tittle"]?></h1>
  
  <div class="post-content">
     <?php echo html_entity_decode($post["body"]); ?>
  </div>

 </div>
 </div>

  <div class="sidebar single">
  <div class="section popular ">

    <h3 class="section-tittle" style="text-align:center;">RECENT POSTS BY SAME AUTHOR</h3>

    <?php foreach ($posts as  $post): ?>

      <div class="post clear-fix">
      <img src="<?php echo BASE_URL . "/assets/images/"  . $post["image"]?>">
      <a href="single.php?id=<?php echo $post["id"] ?>&name=<?php echo $post["user_id"]?>" class="tittle"><h5><?php echo $post["tittle"]?></h5></a>
    </div>
    <?php endforeach; ?>

  </div>


    <div class="section topics">
      <h2 class="section-tittle">Topics</h2>
      <ul> 
      <?php foreach ($topics as $topic): ?>
       <li>
          <a href=" <?php echo BASE_URL . "/index.php?t_id=" . $topic["id"] . "&name=" . $topic["name"] ?>">
            <?php echo $topic["name"]; ?>
          </a>
       </li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>

  </div>

 </div>

<!--footer-->
  <?php 
     include(ROOT_PATH . "/app/include/footer.php");
  ?>

    
  <!--jquery library--> 
    <script src="assets/js/jquery.js"></script>

   <!--custom javascript-->
   <script src="assets/js/scripts.js"></script>

</body>
</html> 