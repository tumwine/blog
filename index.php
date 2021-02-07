<?php 
    include("path.php");
?>

<?php include(ROOT_PATH . "/app/controllers/topics.php");?>

<?php


$trending = getTrendingPosts();
$postsTittle = "Recent Posts";
$page = isset($_GET['page'])?$_GET['page']:1;

if (isset($_GET["t_id"])) {
  $postsTittle = "You searched for posts under". '"' . $_GET["name"] . '"';
  $posts = getPostsByTopicId($_GET["t_id"]);
}

else if (isset($_GET["search-term"])) {
  $postsTittle = "You searched for ". '"' .$_GET["search-term"]. '"';
  $posts = searchPosts($_GET["search-term"]);
 } 

else {
  if ($page > 1) 
   {
   $postsTittle = "Other Posts";
   }
   $posts =  getPublishedPosts();

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

    <title>Home</title>
</head>   

<body>
  <?php 
     include(ROOT_PATH . "/app/include/header.php");
  ?>

  <?php 
     include(ROOT_PATH . "/app/include/message.php");
     include(ROOT_PATH . "/app/helpers/validateSendemail.php");
  ?>

<!-- Page Wrapper-->
<div class="page-wrapper">
  <!-- Post slider-->
  <div id="trending" class="post-slider">
    <h1 class="slider-tittle">Trending Posts</h1>
    <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i>

    <div class="post-wrapper">

     <?php foreach ($trending as $trend): ?>
      <div class="post">
       <img src="<?php echo BASE_URL . "/assets/images/" . $trend["image"]; ?> " class="slider-image">
        <div class="post-info">
          <h4><a href="single.php?id=<?php echo $trend["id"]?>&name=<?php echo $trend["user_id"]?>"><?php echo $trend["tittle"] ?> </a></h4>
           <i class="fas fa-user"> <?php echo $trend["username"] ?></i>
           &nbsp;
           <i class="fas fa-calendar"> <?php echo date("F j, Y", strtotime($trend["created_at"])); ?> </i>
        </div>
       </div>  
     <?php endforeach; ?>

    </div>

  </div>

   <!--content-->
<div class="content clear-fix" >
  <div class="main-content">
     <h2 class="recent-post-tittle">
      <?php echo $postsTittle ?> <?php if ($page > 1) echo "> page".$_GET["page"]; ?>
     </h2>

    <?php 

     $itemsperpage = 4;

     foreach (array_slice($posts, $itemsperpage*($page-1), $itemsperpage) as $post):?>

      <div class="post clear-fix">
      <img src="<?php echo BASE_URL . "/assets/images/" . $post["image"]; ?> " class="post-image">
      <div class="post-preview">
        <h1><a href="single.php?id=<?php echo $post["id"]?>&name=<?php echo $post["user_id"]?>"><?php echo $post["tittle"] ?></a></h1>
        <i class="fas fa-user"> <?php echo $post["username"] ?></i>
           &nbsp;
        <i class="fas fa-calendar"> <?php echo date("F j, Y", strtotime($post["created_at"])); ?></i>
        <p class="preview-text">
          <?php echo html_entity_decode(substr($post["body"], 0, 70) . "..."); ?> 
        </p>
        <a href="single.php?id=<?php echo $post["id"]?>&name=<?php echo $post["user_id"]?>" class="btn read-more">Read More</a>
      </div>
     </div>
      
    <?php endforeach; ?>

        <div class="pagination"> 

         <?php 
       
       if (isset($_GET["name"])) {
         $sql = "SELECT COUNT(id) AS total FROM posts WHERE published=1 AND topic_id=".$_GET["t_id"]."";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $total_pages = ceil( $row["total"]/$itemsperpage);

         
         if($page > 1 )
         {
           echo "<a href='index.php?t_id=".$_GET["t_id"]."&name=".$_GET["name"]."&page=".($page-1)."'><i class='fas fa-chevron-left'></i></a>";
         }
         
           
         for ($i=1; $i<=$total_pages; $i++) 
         {
                $c = '';
                if($i == $page){
                    $c = 'active';
                }       
          echo "<a href='index.php?t_id=".$_GET["t_id"]."&name=".$_GET["name"]."&page=".$i."' class='".$c."'>".$i."</a>";
         }


        if($page < $total_pages )
         {
           echo "<a href='index.php?t_id=".$_GET["t_id"]."&name=".$_GET["name"]."&page=".($page+1)."'><i class='fas fa-chevron-right'></i></a>";
         }

       }

     else if (isset($_GET["search-term"])) {
         $sql = "SELECT COUNT(id) AS total FROM posts WHERE published=1 AND tittle LIKE '%".$_GET["search-term"]."%' OR body LIKE '%".$_GET["search-term"]."%' ";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $total_pages = ceil( $row["total"]/$itemsperpage);


          if($page > 1 )
         {
           echo "<a href='index.php?search-term=".$_GET["search-term"]."&page=".($page-1)."'><i class='fas fa-chevron-left'></i></a>";
         }

        for ($i=1; $i<=$total_pages; $i++) 
         {
          $c = '';
                if($i == $page){
                    $c = 'active';
                } 
          echo "<a href='index.php?search-term=".$_GET["search-term"]."&page=".$i."' class='".$c."'>".$i."</a>";
         }

         if($page < $total_pages )
         {
           echo "<a href='index.php?search-term=".$_GET["search-term"]."&page=".($page+1)."'><i class='fas fa-chevron-right'></i></a>";
         }


       }

      else {
         $sql = "SELECT COUNT(id) AS total FROM posts WHERE published=1";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $total_pages = ceil( $row["total"]/$itemsperpage);

           if($page > 1 )
         {
           echo "<a href='index.php?page=".($page-1)."'><i class='fas fa-chevron-left'></i></a>";
         }

        for ($i=1; $i<=$total_pages; $i++) 
         {
          $c = '';
                if($i == $page){
                    $c = 'active';
                } 
          echo "<a href='index.php?page=".$i."' class='".$c."'>".$i."</a>";
         }

         if($page < $total_pages )
         {
           echo "<a href='index.php?page=".($page+1)."'><i class='fas fa-chevron-right'></i></a>";
         }
         
       } 

     ?>
        </div>

   </div>

  <div class="sidebar">

    <div class="section search">
      <h2 class="section-tittle">Search</h2>
      <form action="index.php" method="get">
        <input type="text" name="search-term" class="text-input" placeholder="Search....">
      </form>
    </div>

    <div class="section topics">
      <h2 class="section-tittle">Topics</h2>
      <ul>
        <?php foreach ($topics as $key => $topic): ?>
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

   <!--slick carousel-->
  <script  src="assets/js/slick.min.js"></script>

   <!--custom javascript-->
   <script src="assets/js/scripts.js"></script>

</body>
</html> 
