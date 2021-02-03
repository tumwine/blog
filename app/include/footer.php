<div class="footer">
    <div class="footer-content">
        <div class="footer-section about">
          <h1 class="logo-text">Awakenning</h1>
          <p>Many souls have lost their way to the devils's world because there aren't many people to remind them of the goodness of God and that heaven is real hence a group of believers came together and formed this website to keep the souls in te presence of God.</p>
          <div class="contact">
          <span><i class="fas fa-phone"></i>&nbsp; 0706344822</span>
          <span><i class="fas fa-envelope"></i>&nbsp;Awakenning@gmail.com</span>
          </div>
        <div class="social">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        </div>
        
        <div class="footer-section links">
          <h2>Quick Links</h2>
          <br>
          <ul>
            <a href="<?php echo BASE_URL . "/services.php"?>">
              <li>Services</li>
            </a>
            <a href="<?php echo BASE_URL . "/about.php#ourteam"?>">
              <li>Our Team</li>
            </a>
            <a href="<?php echo BASE_URL . "/index.php#trending"?>">
              <li>Trending Posts</li>
            </a>
            <a href="<?php echo BASE_URL . "/about.php#address"?>">
              <li>Address</li>
            </a>
            <a href="<?php echo BASE_URL . "/register.php"?>">
              <li>Become a member</li>
            </a>
          </ul>
        </div>

        <div id="contact" class="footer-section contact-form">
          <h2>Contact us</h2>
           

          <?php 
            $errors = array();
            $email = $message = "";

              if(isset($_POST["contactform"])){

                $email = $_POST['contactemail'];
                $message = $_POST['contactmessage'];
                
                $errors = contactUs();

               if (count($errors) === 0) 
               {
                $to = 'tumwineivan20@gmail.com';
                $subject = "Contact from Awakenning";
                $message = $message;
                $headers = "From: $email";

                if (mail($to, $subject, $message,$headers))
                {
                  $_SESSION["message"] = "Message was sent successfully";
                  $_SESSION["type"] = "success";
                  header("location: " . BASE_URL . "/services.php" );
                  exit();
                }

                else {
                   array_push($errors,"Message wasnt sent");
                }
                
               } 
                
              else 
                 {
                $email = $_POST['contactemail'];
                $message = $_POST['contactmessage'];

                 }

            }

          ?>

          <?php 
             include(ROOT_PATH . "/app/helpers/formErrors.php");
           ?>

          <br>
          <form action="#contact" method="post" enctype="multipart/form-data">
            <input type="email" name="contactemail" value="<?php echo $email?>" class="text-input contact-input" placeholder="Your email adrress....">
            <textarea rows="4" name="contactmessage"  class="text-input contact-input" placeholder="Your message...."><?php echo $message?></textarea>
             <span class="contactError"></span>        
            <button type="submit" name="contactform" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i> 
            Send
           </button>
          </form>
        </div>
    </div>
     <div class="footer-bottom">
       &copy; 2020 All rights reserved by Awakenning | DESIGNED BY IVAN WONDERZ
     </div>
  </div>