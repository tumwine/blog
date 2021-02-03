<?php 
    include("path.php");
    session_start();
?>

<?php 
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

    <title>About</title>
</head>   

<body>
  <?php 
     include(ROOT_PATH . "/app/include/header.php");
  ?>

<!-- Page Wrapper-->
<div class="page-wrapper">
  <div class="aboutus">
  <div class="grid-item about-image clear-fix">
    <img src="assets/images/la.jpg">
    <figcaption>FIG - 1 Our church logo</figcaption>
  </div>

  <div class="grid-item about-profile">
    <h2>AWAKENNING</h2>

    <h4>Background</h4>
    <p>Kireka Christian fellowship is a prophetic ministry that started in 2017 its located at kireka wakiso district, its beginning was prophesy to apostle Barasa Robert Samuel who was fasting for 60days asking God for his future wife, in so doing little did he knew that there was another young prophetess called shalom Abraham kikazi who was fasting for 10 days dry, when he met her the holy spirit fell on her and she gave him the answer for his fasting. Further the Holy Spirit informed him that he was preparing him for a powerful ministry.</p>

    <p>The Holy Spirit told him how God was going to add unto him other minister and in not less than a month he was joined by Prophet Ivan wandera, pr. Denis kalungi other, this ministry is a fivefold ministry with apostles, teaches, evangelist, prophets and pastors as in Eph 4:11.</p>

    <p>Kireka Christian fellowship has got a humble beginning from house to house altar to a general altar which started from a salon later on street and to a room. Through the guidance of the holy spirit after 2 and half years what was a prayer altar progressed to a fellowship.<br>
    The prayer altar is still going on from Monday to Monday because it was God’s the instruction not forgetting that another emphasis holiness and righteousness. 
   </p>

   <h4>Vision</h4>
   <p>To take back the church to true foundation and teaching the true word in order for the church to get 100 % on the earth 100 % in heaven.</p>

   <h4>Mission</h4>
   <p>Righteousness and holiness are the foundation of his throne (psalms 89; 15), seeking the kingdom of heaven and his righteousness and the rest will be added unto you (Mathew 6:33).</p>

   <p>To empower believers spiritually, financially, physically, morally, academically with wisdom, knowledge and understanding through the word of the living God.</p>

   <h4>Objectives</h4>
   <ul>
    <li>Turning seeker into saints</li>
    <li>Members into ministers</li>
    <li>Church goers into an army of god</li>
    <li>Sharing the good news of Jesus Christ with hundreds of thousands of residents in Kireka Wakiso Uganda</li>
    <li>Welcoming thousands of members into the fellowship of our church family</li>
    <li>Developing people to spiritual maturity through bible study</li>
    <li>Helping souls discover their gifts and talents God gave them</li>
    <li>Empowering members for missionary work and sending out for evangelism</li> 
   </ul>
  </div>

  <div class="grid-item about-quote">
    <blockquote> "Righteousness and justice are the foundation of your throne;
    love and faithfulness go before you PSALMS-89-14."</blockquote>

  </div>

  <div id="ourteam" class="grid-item about-team">
    <h2>Our Team</h2>
    <div class="staff">
      <div class="member clear-fix">
        <div class="img-member">
          <img src="assets\images\pr.png">
          <div class="label">TEAM LEADER</div>
        </div>
        <div class="detail-member">
        <h4>PR.&nbsp;KALUNGI DENIS</h4>
        <i class="fas fa-phone">&nbsp;0706344822</i>
        </div>
      </div>
      
      <div class="member clear-fix">
        <div class="img-member">
          <img src="assets\images\ap.png">
          <div class="label">WRITER</div>
        </div>
        <div class="detail-member">
        <h4>AP.&nbsp;ROBERT BALASA</h4>
        <i class="fas fa-phone">&nbsp;0754182852</i>
        </div>
      </div>
      
      <div class="member clear-fix">
        <div class="img-member">
          <img src="assets\images\i.png">
          <div class="label">PROGRAMMER</div>
        </div>
        <div class="detail-member">
        <h3>IVAN WONDERZ</h3>
        <i class="fas fa-phone">&nbsp;0754182852</i>
        </div>
      </div>
  
  </div>

  </div>

  <div id="address" class="grid-item about-location">
    <div class="find office-location">
      <h4>OUR ADDRESS</h4>
      <ul>
        <li>BWEYOGERE</li>
        <li>KIRINYA, BUKASA</li>
        <li>OPP - SEYANI BROTHERS</li>
      </ul>
    </div>
    <div class="find img-location">
      <img src="assets\images\p.png">
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