<?php 

function ValidatePost($post){
  
  $errors = array();
     if (empty($post["tittle"])) {
     	array_push($errors,"Tittle is required");
     } 

     if (empty($post["body"])) {
     	array_push($errors,"Body is required");
     } 

     if (empty($post["topic_id"])) {
     	array_push($errors,"Please select a topic");
     }

  $existingPost = selectOne("posts", ["tittle" => $post["tittle"]]);

  if ($existingPost) {

     if (isset($post["update-post"]) && $existingPost["id"] != $post["id"]) {
        array_push($errors,"Post with that tittle already exists. ");
     }

     if (isset($post["add-post"])) {
        array_push($errors,"Post with that tittle already exists. ");
     }
     
  }

  return $errors;
}
