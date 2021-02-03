<?php 
    include("../../path.php");
?>

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
    <link rel="stylesheet" href="../../assets/css/fonts.css">

       <!--font awesome-->
    <link rel="stylesheet" href="../../assets/css/all.css">

    <!--custom style-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    
     <!--custom style-->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Manage Users</title>
</head>   

<body>

    <?php include(ROOT_PATH . "/app/include/adminheader.php");?>

<!-- AdminPage Wrapper-->
<div class="admin-wrapper">
  
  <?php include(ROOT_PATH . "/app/include/adminsidebar.php");?>

  <div class="admin-content">
    <div class="button-group">
      <a href="create.php" class="btn btn-big">Add User</a>
      <a href="index.php" class="btn btn-big">Manage Users</a>
    </div>

    <div class="content">
      <h2 class="page-tittle">Manage Users</h2>

      <?php 
     include(ROOT_PATH . "/app/include/message.php");
      ?>

      <table>
        <head>
          <th>SN</th>
          <th>Username</th>
          <th>Email</th>
          <th colspan="2">Action</th>
        </head>
        <tbody>

           <?php foreach ($admin_users as $key => $user): ?>
            <tr>
            <td><?php echo $key + 1 ?></td>
            <td><a><?php echo $user["username"] ?></a></td>
            <td><a><?php echo $user["email"] ?></a></td>
            <td><a href="edit.php?id=<?php echo $user["id"] ?>" class="edit">edit</a></td>
            <td><a href="index.php?delete_id=<?php echo $user["id"] ?>" class="delete">delete</a></td>
           </tr>
              
           <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>


    
   <!--jquery library-->
  <script src="../../assets/js/jquery.js"></script>

   <!--custom javascript-->
   <script src="../../assets/js/scripts.js"></script>

</body>
</html> 