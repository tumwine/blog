
<?php 
   include(ROOT_PATH . "/app/helpers/validateSendemail.php");

   
   $name = $email = $subject = $message = "";
   $errors = array();
   

   if(isset($_POST["send"])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
     
    $errors = ValidateEmail();

                                                                      
     if (count($errors) === 0) 
     {            
                // Recipient
                $toEmail = 'tumwineivan20@gmail.com';

                // Sender
                $from = $email;
                $fromName = $name;
                
                // Subject
                $emailSubject = 'TUMWINE';
                
                // Message 
                $htmlContent = '<h2>Contact Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Subject:</b> '.$subject.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p>';
                
                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";

                if(!empty($_POST["attachment"]) && file_exists($_POST["attachment"])){
                    
                    // Boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // Headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                    
                    // Preparing attachment
                    if(is_file($_POST["attachment"])){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($_POST["attachment"],"rb");
                        $data =  @fread($fp,filesize($_POST["attachment"]));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($_POST["attachment"])."\"\n" . 
                        "Content-Description: ".basename($_POST["attachment"])."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($_POST["attachment"])."\"; size=".filesize($_POST["attachment"]).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    
                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                    
                    // Delete attachment file from the server
                    @unlink($_POST["attachment"]);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                }
                
                // If mail sent
                if($mail){
                   $_SESSION["message"] = "Form was sent successfully";
                   $_SESSION["type"] = "success";
                   header("location: " . BASE_URL . "/services.php" );
                   exit();
                }else{
                    array_push($errors,"Form wasn't submitted");
                }
        
     }

     else 
     {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
     
     }

}

