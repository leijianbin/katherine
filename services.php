<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
<title>Services - Katherine T. Vo D.D.S.</title>
<meta name="keywords" content="Union Square Dentist, Preventative Dentistry, Restorative Dentistry, Cosmetic Dentistry, Dental Implants, Invisalign, Custom Mouth Guards, Oral Cancer Screenings, San Francisco Dentist" >
<meta name="description" content="Dr. Katherine Vo has been providing excellent dental care to patients in the San Francisco Bay Area over the past decade with services including comprehensive new patient exams, preventative dentistry, restorative dentistry, cosmetic dentistry, implant dentistry, oral cancer screenings, Invisalign, and custom mouth guards.">

<script src="js/jquery-1.7.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>   
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="js/ResponsiveMultiLevelMenu/css/default.css" />
<link rel="stylesheet" type="text/css" href="js/ResponsiveMultiLevelMenu/css/component.css" />   
<script src="js/ResponsiveMultiLevelMenu/js/modernizr.custom.js"></script>
<script>
    $(window).on("load",function() {
  function fade() {
    $('.fade').each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      var windowBottom = $(window).scrollTop() + $(window).innerHeight();

      /* If the object is completely visible in the window, fade it in */
      if (objectBottom-50 < windowBottom){
        if ($(this).parent('.wrap').css('opacity')==0) {$(this).parent('.wrap').fadeTo(300,1);}
      } else {
        if ($(this).parent('.wrap').css('opacity')==1) {$(this).parent('.wrap').fadeTo(300,0);}
      }
    });
  }
  fade(); //Fade in completely visible elements during page-load
  $(window).scroll(function() {fade();}); //Fade in elements during scroll
});
 
  </script>

</head>

<body class="container">
  <div class="headerbottom">
  </div>
  <!-- template -->
  
<?php include 'header.php'; ?>

<div class="content">
  <div class="whitebottom">
    <div class="servicelistdetail">
      <div class="titlea">
        <p>Honest and Individualized Services</p>
      </div>
      <ul>
        <li class="">
          <div class="wrap" id="exam">
            <div class="img fade"><img src="images/kvodental-home_03.jpg" height="280" width="280"></div>
            <div class="intro">
              <b>Customized New Patient Exam</b>
              <p>It is best described as a "tour of your mouth." With low radiation digital xrays, intra-oral photos and extra-oral photos, we perform a complete health evaluation of your facial muscles, jaw joints, tooth structure, gum tissue, supporting bone, and esthetic appearance of your teeth. All this information helps us customize a specific plan that best fits your oral health needs and esthetic desires.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="wrap" id="preventative">
            <div class="intro">
             <b>Preventative Dentistry</b>
             <p>We aim to help you maintain a healthy smile with a minimum biannual check up and oral hygiene cleaning. Utilizing ultrasonic technology, your cleaning visit will be efficient and adding excellent additional maintenance benefit to your home care.  Fluoride treatment and preventive resin restorations are available to help you avoiding painful and costly procedures with decayed teeth.</p>
            </div>
            <div class="imgb fade"><img src="images/kvodental-home_03-02.jpg" height="280" width="280"></div>
          </div>
        </li>
        <li>
          <div class="wrap" id="restorative">
            <div class="img fade"><img src="images/kvodental-home_03-08.jpg" height="280" width="280"></div>
            <div class="intro">
             <b>Restorative Dentistry</b>
              <p>While teeth enamel is the strongest substance in our body, it can break and erode over time. Poor oral hygiene and bad genetics can result in cavity prone teeth. But sometimes even with the best home care and timely check ups, teeth can chip, crack and fracture. Contributing factors to the normal wear and tear include high acidic diet, para functional habit and systemic diseases.  Restorative dentistry can repair teeth with fillings, inlays, onlays, crowns or bridges. These restorations can be done in different materials to suit your desire for esthetics and/or economics while restoring teeth back to their full form and function.<p>
            </div>
          </div>
        </li>
        <li>
          <div class="wrap" id="cosmetic">
            <div class="intro">
              <b>Cosmetic Dentistry</b>
              <p>Ranging from simple whitening procedure, tooth color resin restorations, customized bonding or veneers on front teeth, to rebuilding an entire mouth, modern dentistry allows us to create not only a healthy mouth for your overall health, but also a beautiful confident smile you desire.</p>
            </div>
            <div class="imgb fade"><img src="images/kvodental-home_03-03.jpg" height="280" width="280"></div>
          </div>
        </li>
        <li>
          <div class="wrap" id="implant">
            <div class="img fade"><img src="images/kvodental-home_03-04.jpg" height="280" width="280"></div>
            <div class="intro">
              <b>Implant Dentistry</b>
              <p>Although there are many options to replace missing teeth, with the advent of modern dentistry, implants are now the standard of care treatment.  These surgically placed titanium screw-like structures, which come in a variety of shapes and sizes, integrate to your bone to simulate the roots of your missing teeth. Their abutments can be then customized to suit the different teeth they replace, and the types of prostheses to replace the lost teeth. The result is a long term healthy substitution that can look and function like your natural teeth.<p>
            </div>
          </div>
        </li>
        <li>
          <div class="wrap" id="oral">
            <div class="intro">
             <b>Oral Cancer Screening</b>
             <p>During your new patient exam and biannual check up, we perform a screening for any abnormal lesion, including white and red patches in your mouth. If lesions are seen, specific procedures may be done to find abnormal tissues that may develop into oral cancer. We work closely with UCSF Oral Pathology Clinic to coordinate further treatment if necessary.</p>
            </div>
            <div class="imgb fade"><img src="images/kvodental-home_03-05.jpg" height="280" width="280"></div>
          </div>
        </li>
        <li>
          <div class="wrap" id="invisalign">
            <div class="img fade"><img src="images/kvodental-home_03-06.jpg" height="280" width="280"></div>
            <div class="intro">
              <b>Invisalign</b>
              <p>Mal-aligned or "crooked" teeth can lead to compromised oral hygiene care, unstable occlusion or "bite", and premature teeth fracture. Beyond traditional wire-and-bracket orthodontic treatment, updated technology from invisible aligners allow for efficient movement of teeth while helping you confidently smile and ease of hygiene maintenance during treatment period.<p>
            </div>      
          </div>
        </li>
        <li>
          <div class="wrap" id="guard">
            <div class="intro">
              <b>Custom Mouth Guards</b>
              <p>With the mouth being a heavily used part in our body, it goes through lots of wear and tear. Custom made guards are recommended to protect against clenching and grinding forces, which could cause teeth and/or restorations fracture, weaken/damage periodontal supporting structures, and possibly lead to TMJ issues. Specific guards are also designed to help you breathe better and prevent snoring. Sport mouth guards are also available to prevent injury during your athletic activities.</p>
            </div>
            <div class="imgb fade"><img src="images/kvodental-home_03-07.jpg" height="280" width="280"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper" id="contact">
  <div class="clear"></div>
  <?php include 'footer.php'; ?>

<script src="js/ResponsiveMultiLevelMenu/js/jquery.dlmenu.js"></script>
    <script>
      $(function() {
        $( '#dl-menu' ).dlmenu();
      });
    </script>
     <script src="js/sticky/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
