<?php 

function ValidateTopic($topic){
  
  $errors = array();
     if (empty($topic["name"])) {
     	array_push($errors,"name is required");
     } 

     $existingTopic = selectOne("topics", ["name" => $topic["name"]]);

    if ($existingTopic) {

     if (isset($topic["update-topic"]) && $existingTopic["id"] != $topic["id"]) {
        array_push($errors,"Topic with that name already exists. ");
     }

     if (isset($topic["add-topic"])) {
        array_push($errors,"Topic with that name already exists. ");
     }
     
   }

      return $errors;
    }
