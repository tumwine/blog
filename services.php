<?php 
    include("path.php");
    session_start();
?>

<?php 
     include(ROOT_PATH . "/app/include/download.php");
     include(ROOT_PATH . "/app/controllers/servicesEmail.php");
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

    <title>Services</title>
</head>   

<body>
  <?php 
     include(ROOT_PATH . "/app/include/header.php");
  ?>

<!-- Page Wrapper-->
<div class="page-wrapper" style="padding:50px;">

<div class="brief-info">
  <h1>SERVICES</h1>
  <P>As Kireka Christian fellowship we are so blessed to have various talents ranging from great talented pastors, apostles and other ministers who provide various services like counselling, dream interpretation, prayers, pastoral mentorship, etc. Our team is full of professionals and any data submitted to us will remain confidential and only shared between you and us.

  <P>For any further help from us kindly download the pdf under the service provided, fill in the required details and later attach it to the form to be submited which will be well received by our team and help will be provided immediately.</P>
</div>

<div class="services clear-fix">
  <div class="serv serv-img">
    <img src="assets\images\cou.jpg">
  </div>
  <div class="serv serv-info">
    <h3>COUNSELLING</h3>
    <hr>
    <p>Since every one has their own cross to carry, we all face different problems in this world and at-times we loose hope in ourselves thinking we are failures and that there is no way out. Feel free to share with us and by God's grace we shall help.</p>


   <div class="serv-button">
    <form method="get" action="#">
    <button class="btn" name="counselling">
      <i class="fas fa-download"></i>&nbsp;DOWNLOAD
    </button>
    </form>
  </div>

  </div>
</div>

<div class="services-reverse clear-fix">
  <div class="serv serv-img">
    <img src="assets\images\dre.jpg">
  </div>
  <div class="serv serv-info">
    <h3>DREAM INTERPRETATION</h3>
    <hr>
    <p>Every dream that you receive always has a meaning but their some dreams that we all have and we fail to get what they really meant. Dont worry about that anymore, a team that was given an insight through all dreams are here to offer interpretations of all kinds of dreams.</p>

  <div class="serv-button">
    <form method="get" action="#">
    <button class="btn" name="dreams">
      <i class="fas fa-download"></i>&nbsp;DOWNLOAD
    </button>
    </form>
  </div>

  </div>
</div>

<div class="services clear-fix">
  <div class="serv serv-img">
    <img src="assets\images\men.jpg">
  </div>
  <div class="serv serv-info">
    <h3>PASTORAL MENTORSHIP</h3>
    <hr>
    <p>As a pastor, you will run up against limits in your life and ministry and of which some will affect your credibility in church and all that your lead. Join our team so that you can be mentored into a rock that wont be easily destroyed.</p>
 <div class="serv-button">
    <form method="get" action="#">
    <button class="btn" name="mentoring">
      <i class="fas fa-download"></i>&nbsp;DOWNLOAD
    </button>
    </form>
  </div>

  </div>
</div>

<div class="services-reverse clear-fix">
  <div class="serv serv-img">
    <img src="assets\images\pra.jpg">
  </div>
  <div class="serv serv-info">
    <h3>PRAYER</h3>
    <hr>
    <p>The importance of prayer is affirmed throughtout the Bible. As a church, we are commited to pray-your needs are important to us. Please share your prayer request on this card and return it as directed so we may include your petition in our prayers</p>
  <div class="serv-button">
    <form method="get" action="#">
    <button class="btn" name="prayer">
      <i class="fas fa-download"></i>&nbsp;DOWNLOAD
    </button>
    </form>
  </div>

  </div>
</div>

<div class="space" id="email" style="margin-bottom:50px;"></div>

<div class="sub-form" >

   <h3>ENTER DETAILS TO SUBMIT FORM</h3>

    <?php 
     include(ROOT_PATH . "/app/helpers/formErrors.php");
     include(ROOT_PATH . "/app/include/message.php");
    ?>
  
     <form action="#email" method="post" enctype="multipart/form-data">
       <div>
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
        </div>

        <div>
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
        </div>

        <div>
          <label>Subject</label>
          <select name="subject"  class="text-input">
            <option></option>

            <?php if (!empty($subject) && $subject == "counselling"): ?>
            <option selected value="counselling">Counselling</option>   
            <?php else: ?>
            <option value="counselling">Counselling</option>
            <?php endif; ?>

            <?php if (!empty($subject) && $subject == "Dream interpretation"): ?>
            <option selected value="Dream interpretation">Dream interpretation</option>   
            <?php else: ?>
            <option value="Dream interpretation">Dream interpretation</option>
            <?php endif; ?>

            <?php if (!empty($subject) && $subject == "Pastoral mentorship"): ?>
            <option selected value="Pastoral mentorship">Pastoral mentorship</option>   
            <?php else: ?>
            <option value="Pastoral mentorship">Pastoral mentorship</option>
            <?php endif; ?>

            <?php if (!empty($subject) && $subject == "Prayer"): ?>
            <option selected value="Prayer">Prayer</option>   
            <?php else: ?>
            <option value="Prayer">Prayer</option>
            <?php endif; ?>

          </select>
        </div>

        <div>
           <label>Upload File</label>
           <input type="file" name="attachment" class="text-input">
         </div>
        
         <div>
          <label>Message</label>
          <textarea rows="3" name="message"  class="text-input contact-input" placeholder="Your message...."><?php echo $message; ?></textarea>
         </div>

        <div>
          <button type="submit" name="send" class="btn btn-big">Submit Form</button>
        </div>
        
      </form>
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