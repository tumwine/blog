<?php 
function ValidateEmail()
{
  
   $errors = array();

     if (empty($_POST["name"])) {
      array_push($errors,"Name is required");
     }

     if (empty($_POST["email"])) {
      array_push($errors,"Email is required");
     }

     if (empty($_POST["message"])) {
      array_push($errors,"Message is required");
     }

     if (empty($_POST["subject"])) {
      array_push($errors,"Subject is required");
     }


     if(!empty($_FILES["attachment"]["name"])){

        $file_name = time() . "_" . $_FILES["attachment"]["name"];
        $destination = ROOT_PATH . "/assets/files/" . $file_name;
        $fileType = pathinfo($destination,PATHINFO_EXTENSION);
        $result = move_uploaded_file($_FILES["attachment"]["tmp_name"], $destination);
                
        $allowTypes = array('pdf');
        if(in_array($fileType, $allowTypes))
        {
          if ($result) 
		{
		  $_POST["attachment"] = $file_name;
		} 

		else 
		{
		  array_push($errors,"failed to upload image");
		}
        }else
        {
          array_push($errors,"Only pdfs are allowed");
        }
        }
        else
        {
          array_push($errors,"Image is required");
        }
            
    return $errors;
}

function contactUs(){
   $errors = array();

     if (empty($_POST["contactemail"])) {
      array_push($errors,"Email is required");
     }

     if (empty($_POST["contactmessage"])) {
      array_push($errors,"Message is required");
     }
  return $errors;
}