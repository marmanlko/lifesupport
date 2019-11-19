<?php $conn = include_once('dbmanager.php');
error_reporting(0); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Life Support</title>
<!--Css Starts Here-->
<link href="css/style_main.css" rel="stylesheet" type="text/css"/>

<link rel="icon" href="images/appicon.png" type="image/x-icon">
<link href="css/responsivestyle.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="css/hover-min.css" rel="stylesheet" type="text/css"/>
<link href="css/btnl.css" rel="stylesheet" type="text/css"/>
<link href="css/sidebarhome.css" rel="stylesheet" type="text/css"/>

<!--Circle effects-->
 <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/style_circle.css" />


</head>

<body>

<!--Header starts here-->
<header id="header_nav">

<nav class="navbar navbar-default navigation navbar-fixed-top">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    <a  class="navbar-brand" href="#" style="color:#fff;">Life Support</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" title="Home">Home</a></li>
        <li><a href="#about_us" title="About Us">About Us</a></li>
        <li><a href="#ser_vicesnew" title="Our Services">Our Services</a></li>
        <li><a href="#treatment_out_new" title="Our Treatments">Our Treatments</a></li>
         
         <li><a href="#our_hospita" title="Our Hospital">Our Hospital</a></li>
          <li><a href="#become_ght_partnr" title="Become Our Partner">Become Our Partner</a></li>
          <li><a href="#contact_wus" title="Contact Us">Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;</a></li>

          <li><a href="login.php"><div class="btnl"><font color="white">Log in/Sign Up</font></div></a></li>

          
         
      </ul>
      
     
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header><!--Header ends here-->


<div id="home" class="fullscreen background parallax sec_one" data-img-width="1600" data-img-height="1064" data-diff="100">
    <div class="content-a">
        <div class="content-b">
          <h1>Life Support</h1>
           <h2><img src="images/line.png" class="img-responsive center-block"></h2>
          <!--<p>
            On olemassa monta eri versiota Lorem Ipsumin kappaleista, mutta suurin<br/>
             osa on kärsinyt muunnoksista joissain muodoissa, kuten huumorin tai sattumanvaraisesti asetetuin sanoin <br/>jotka eivät näytä edes vähän uskottavalta. Jos sinä aiot käyttää kappaletta Lorem Ipsumista, sinun pitää tarkistaa, ettei tekstin seassa ole mitään nolostuttavaa.<br/> Kaikki Lorem Ipsum-generaattorit Internetissä tuntuvat toistavan ennalta määriteltyjä palasia tarpeen mukaan, tehden tästä ensimmäisen aidon generaattorin Internetissä.
          
          </p>-->



        </div>
    </div>


</head>
<body>

<div id="mySidenav" class="sidenav">
  <p style="font-weight: bold; text-decoration: underline; font-size: 17px;">Book Appointment</p><a class="closebtn" onclick="closeNav()"  style="cursor:pointer;">&times;</a>
 <form action="" methode="GET">
  Name<br/><input type="text" name="aname" value="" style="color:black"><br/>
   Mobile No<br/><input type="text" name="amobile" value="" style="color:black"><br/>
  Email<br/><input type="text" name="aemail" value="" style="color:black"><br/>
  Time & Date of Appointment<br/><input type="time" name="atime"style="color:black";> <input type="date" name="adate"style="color:black;"><br />
  <br/><input type="submit" value="submit" name="sub3" style="color:black;"><br/>
</form>
</div>
<div class="side"onclick="openNav()" style= "right:0;">Appointment</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0px";
}
</script>
</div>
  
  <div class="section_two_new" data-diff="100" id="about_us">
 <div class="container">
 <h1>About Life Support(LSupport)</h1>
 <p style="text-align:center;">The LSupport is India’s leading medical tourism company offers vital services to the

patients away from their countries. Our International patients care team provides

personalised care and assist patients and their companion with array of specialised

services in including companion, travel and tourism.</p>
 
 <div class="col-sm-12">
 <div class="col-sm-3 center_content wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
 <img src="images/About_us icons/1sticon.png" class="img-responsive center-block" alt="icon">
 <h3>Why You Need Us</h3>
 <p>Many patients may know of a destination or provider of interest, but certain factors may

come into play which leads them to you.. </p>
 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#whyu_nneed">Know More</button>
 
 <div class="modal fade" id="whyu_nneed" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;">Why You Need Us</h4>
      </div>
      <div class="modal-body trea_hahah">
        <h1>Why you need us?</h1>
        <p>We assist you at each step of your journey from the moment you decide to travel to

India. Our team comprising of highly qualified healthcare personnel, language

translator/interpreter and tour/travel experts are always ready to assist you in your

medical and daily needs involved in treatment stay in India. Our tour and travel

department designs tour packages that let you explore exciting destinations. To take

away your worries of stay in India, we take care of your accommodation needs and

do every possible bit to make your stay pleasant and comfortable and special.</p>
        
<p>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Don’t know who to contact<br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Language barriers<br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Facilities and Frontier technology<br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Affordable treatment options and financial savings<br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Competent and qualified Doctors<br>
</p>

 <p><strong>Many patients may know of a destination or provider of interest, but certain factors may

come into play which leads them to you to help ease the process:</strong></p>


<p>Ultimately, we are a representative of the patient who is in a foreign country and in a

vulnerable position; if there are issues with any part of the process, they need to be

addressed immediately by us.</p>

<p>We ensure the hospitals, you visit are only that which have been accredited by recognized

international accrediting bodies [e.g., National Accreditation Board for Hospitals &amp; Health

care Providers (NABH) and International Society for Quality in Health Care (ISQua), etc.]. We

try that you receive affordable cost without compromising with quality of treatment

facilities.</p>
        
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 
 </div>
 
 <div class="col-sm-3 center_content wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
 <img src="images/About_us icons/icon2.png" class="img-responsive center-block" alt="icon">
 
  <h3>LSupport at a Glance</h3>
 <p>Medical tourism or health tourism is the travel of people to
 another country for the purpose of obtaining medical treatment... </p>
 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hitm_glas">Know More</button>
 
 <div class="modal fade" id="hitm_glas" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;">Humane Medical Tourism (HMT) Services-AT A GLANCE</h4>
      </div>
      <div class="modal-body trea_hahah">
       <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    A leader in Medical Tourism and Facilitation services <br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Translator of various the languages (Arabic, Russian, French, Spanish, and Tribal<br>

languages of Afghanistan, etc.)<br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Patients from across the globe (Middle East, America, Spain, Europe, The

Commonwealth of Independent States- Armenia, Belarus, Kazakhstan, Kyrgyzstan,

Moldova, Russia, Tajikistan, Turkmenistan, Ukraine, and Uzbekistan, Africa, France

and Asia etc.)<br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    More than 60 treatment categories with over more than 500 procedures related to

various diseases.<br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Treatment cost comparison options<br>

<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Collaborations with world class IVF (Infertility Treatment) centers<br></p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 </div>
 
 <div class="col-sm-3 center_content wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
 <img src="images/About_us icons/3rdicon.png" class="img-responsive center-block" alt="icon">
  <h3 style="text-transform:capitalize;">Treatment Cost Comparison </h3>
 <p>In this section we Life Support services have provided an illustration of the cost...</p>
 
 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#awqswasq">Know More</button>
 <div class="modal fade" id="awqswasq" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;">Treatment Cost Comparison</h4>
      </div>
      <div class="modal-body trea_hahah">
      <h1> <img src="images/teeeeeq.jpg" width="550" height="365" class="img-responsive"></h1>
      <p>In this section we Life Support services have provided an illustration of the cost differences for medical treatment between the India and abroad (mainly USA). However, it is not only the significant savings but also the high standard of facilities, quality of treatment and service, which makes medical tourism a real attractive package.<br><br>
The prices below are treatment procedure cost inclusive of transfers to and from the hospital. If you would like to be accompanied by a relative or a friend during your treatment, we LSupport can arrange this at very affordable price.</p>
      <h1 style="text-align:center;">Treatment Cost Comparison* </h1>
      <p>
      <table class="table table-bordered">
     
      
      <thead>
      <th style="background-color:#6cb4f7;color:#fff;">Medical Procedure</th>
      <th style="background-color:#6cb4f7;color:#fff;">Thailand</th>
      <th style="background-color:#6cb4f7;color:#fff;">Colombia</th>
      <th style="background-color:#6cb4f7;color:#fff;">USA</th>
      <th style="background-color:#6cb4f7;color:#fff;">India</th>
      <th style="background-color:#14ae35;color:#fff;">Your Saving in India </th>
      </thead>
      
      <tbody>
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Heart Bypass</td>
     <td style="background-color:#6cb4f7;color:#fff;">$15,121 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$14,802 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$1,44,000 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$5,200 </td>
     <td style="background-color:#14ae35;color:#fff;">$9,200 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Angioplasty</td>
     <td style="background-color:#6cb4f7;color:#fff;">$3,788  </td>
     <td style="background-color:#6cb4f7;color:#fff;">$4,500 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$57,000  </td>
     <td style="background-color:#6cb4f7;color:#fff;">$3,300  </td>
     <td style="background-color:#14ae35;color:#fff;">$53,700 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Heart Valve Replacement</td>
      <td style="background-color:#6cb4f7;color:#fff;">$21,212 </td>
       <td style="background-color:#6cb4f7;color:#fff;">$18,000 </td>
        <td style="background-color:#6cb4f7;color:#fff;">$1,70,000 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$5,500 </td>
          <td style="background-color:#14ae35;color:#fff;">$1,64,500 </td>
     </tr>
     
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Hip Replacement</td>
      <td style="background-color:#6cb4f7;color:#fff;">$7,879 </td>
       <td style="background-color:#6cb4f7;color:#fff;">$6,500 </td>
        <td style="background-color:#6cb4f7;color:#fff;">$50,000 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$7,000 </td>
          <td style="background-color:#14ae35;color:#fff;">$43,000 </td>
     </tr>
     
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Hip Resurfacing</td>
      <td style="background-color:#6cb4f7;color:#fff;">$15,152 </td>
       <td style="background-color:#6cb4f7;color:#fff;">$10,500 </td>
        <td style="background-color:#6cb4f7;color:#fff;">$50,000 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$7,000 </td>
          <td style="background-color:#14ae35;color:#fff;">$43,000 </td>
     </tr>
     
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Knee Replacement</td>
      <td style="background-color:#6cb4f7;color:#fff;">$12,297 </td>
       <td style="background-color:#6cb4f7;color:#fff;">$6,500 </td>
        <td style="background-color:#6cb4f7;color:#fff;">$50,000 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$6,200 </td>
          <td style="background-color:#14ae35;color:#fff;">$43,800 </td>
     </tr>
     
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Spinal Fusion</td>
      <td style="background-color:#6cb4f7;color:#fff;">$9,091 </td>
       <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
        <td style="background-color:#6cb4f7;color:#fff;">$1,00,000 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$6,500 </td>
          <td style="background-color:#14ae35;color:#fff;">$93,500 </td>
     </tr>
     
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Dental Implant</td>
      <td style="background-color:#6cb4f7;color:#fff;">$3,636 </td>
       <td style="background-color:#6cb4f7;color:#fff;">$1,750 </td>
        <td style="background-color:#6cb4f7;color:#fff;">$2,800 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$1,000 </td>
          <td style="background-color:#14ae35;color:#fff;">$1,800 </td>
     </tr>
     
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Lap Band</td>
      <td style="background-color:#6cb4f7;color:#fff;">$11,515 </td>
       <td style="background-color:#6cb4f7;color:#fff;">$9,900 </td>
        <td style="background-color:#6cb4f7;color:#fff;">$30,000 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$3,000 </td>
          <td style="background-color:#14ae35;color:#fff;">$27,000 </td>
     </tr>
     
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Breast Implants</td>
      <td style="background-color:#6cb4f7;color:#fff;">$2,727 </td>
       <td style="background-color:#6cb4f7;color:#fff;">$2,500 </td>
        <td style="background-color:#6cb4f7;color:#fff;">$10,000 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$3,500 </td>
          <td style="background-color:#14ae35;color:#fff;">$6,500 </td>
     </tr>
     
      <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Rhinoplasty</td>
      <td style="background-color:#6cb4f7;color:#fff;">$3,901 </td>
       <td style="background-color:#6cb4f7;color:#fff;">$2,500 </td>
        <td style="background-color:#6cb4f7;color:#fff;">$8,000 </td>
         <td style="background-color:#6cb4f7;color:#fff;">$4,000 </td>
          <td style="background-color:#14ae35;color:#fff;">$4,000 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Face Lift</td>
     <td style="background-color:#6cb4f7;color:#fff;">$3,697 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$5,000 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$15,000</td>
     <td style="background-color:#6cb4f7;color:#fff;">$4,000 </td>
     <td style="background-color:#14ae35;color:#fff;">$11,000 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Hysterectomy</td>
     <td style="background-color:#6cb4f7;color:#fff;">$2,727 </td>
     <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
     <td style="background-color:#6cb4f7;color:#fff;">$15,000 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$2,500 </td>
     <td style="background-color:#14ae35;color:#fff;">$12,500 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Gastric Sleeve</td>
     <td style="background-color:#6cb4f7;color:#fff;">$13,636 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$7,200 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$28,700 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$5,000</td>
     <td style="background-color:#14ae35;color:#fff;">$23,700 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Gastric Bypass</td>
     <td style="background-color:#6cb4f7;color:#fff;">$16,667 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$9,900 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$32,972 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$5,000 </td>
     <td style="background-color:#14ae35;color:#fff;">$27,972 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Liposuction</td>
     <td style="background-color:#6cb4f7;color:#fff;">$2,303 </td>
     <td style="background-color:#6cb4f7;color:#fff;" >$2,500 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$9,000 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$2,800 </td>
     <td style="background-color:#14ae35;color:#fff;">$6,200 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Tummy Tuck</td>
     <td style="background-color:#6cb4f7;color:#fff;">$5,000 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$3,500 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$9,750 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$3,000 </td>
     <td style="background-color:#14ae35;color:#fff;">$6,750 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Lasik (both eyes)</td>
     <td style="background-color:#6cb4f7;color:#fff;">$1,818 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$2,000 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$4,400 </td>
     <td style="background-color:#6cb4f7;color:#fff;">$500 </td>
     <td style="background-color:#14ae35;color:#fff;">$3,900 </td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Cornea
(both eyes)
</td>
     <td style="background-color:#6cb4f7;color:#fff;">$1,800 </td>
     <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
     <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
     <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
     <td style="background-color:#14ae35;color:#fff;">N/A</td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">Retina</td>
     <td style="background-color:#6cb4f7;color:#fff;">$4,242 </td>
     <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
     <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
     <td style="background-color:#6cb4f7;color:#fff;">$850 </td>
     <td style="background-color:#14ae35;color:#fff;">N/A</td>
     </tr>
     
     <tr>
     <td style="background-color:#6cb4f7;color:#fff;">IVF Treatment</td>
     <td style="background-color:#6cb4f7;color:#fff;">$9,091 </td>
     <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
     <td style="background-color:#6cb4f7;color:#fff;">N/A</td>
     <td style="background-color:#6cb4f7;color:#fff;">$3,250 </td>
     <td style="background-color:#14ae35;color:#fff;">N/A</td>
     </tr>
     
    
     
      </tbody>
      
      </table>
      </p>
      
<h1>The Treatment Cost Advantage in India</h1>
<p>India is the sought after location for organ transplant, orthopedic, cardiology, urology, fertility/reproductive health and oncology problems. As per Patient Beyond Borders, the <strong>average saving in India for key specialties and procedures is nearly 65-90% cheaper than the US</strong> and much lower than competing countries like Thailand, Malaysia, Singapore, Korea, etc. Further, the INR depreciation by 13% last year has also aided medical tourism in India, and as per an Assocham study the number of <strong>medical tourists coming to India has risen by 40% </strong>during the period of sharp INR depreciation. It also have been observed that the <strong>INR depreciation has reduced cost of complex surgeries by 35-45% for patients from Middle East, Africa and SAARC countries</strong>.<br><br>
Health care costs in India can run as low as ten cents on the dollar compared to the US or the UK. Popular treatments include bone-marrow transplants, eye surgery and hip grafting and replacement. <strong>India is also a top destination for cardiac bypass surgery </strong>at various hospitals; the <strong>procedure can cost less than $10,000 as compared to more than $100,000 in the West</strong>.</p>
  
  <h1><img src="images/wssss.gif" class="img-responsive"></h1>
       
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 </div>
 
 <div class="col-sm-3 center_content wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
 <img src="images/About_us icons/icon4.png" class="img-responsive center-block" alt="icon">
  <h3>Why India</h3>
 <p>Medical tourism or health tourism is the travel of people to
 another country for the purpose of obtaining medical treatment... </p>
 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#jugugjhg">Know More</button>
 <div class="modal fade" id="jugugjhg" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;">WHY INDIA AS MEDICAL TREATMENT DESTINATION</h4>
      </div>
      <div class="modal-body trea_hahah">
       <h1><img src="images/w1.jpg" class="img-responsive"></h1>
       
       <p>India has become a top health tourism destination for patients across the globe for high-end surgeries at inexpensive prices. Two of the top ten medical tourism hospitals are based in India. <br><br>
India is emerging as a preferred healthcare destination for Stories of <strong>Westerners traveling to India and saving 75% over home country costs for large procedures-travel costs included-are not uncommon</strong>.<br><br>
A growing number of tourists are flocking in large numbers because of the superlative medical care, equipment and facilities that India offers at affordable costs. India is considered a highly effective center for specialized treatments such as open-heart surgery, hip & knee replacement, pediatric, cardiac surgery, dentistry, bone marrow transplant, cosmetic surgery, and therapy of cancer, among others. The Indian government is easing restrictions on citizens of many countries, making it easier for them to travel to India, visa-free and with fewer restrictions (US citizens do need a visa to enter India, which costs $67 plus any agency service fees).</p>
       
       <p>India is in the process of becoming the "Global Health Destination" owing to the following advantages:<br><br>
       
   <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>        The cost of medical services in India is almost 30% lower to that in Western countries and the cheapest in South-east Asia.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    The cost of Infertility treatments in India is almost 1/4th of that in developed nations. The availability of modern assisted reproductive techniques, such as IVF, and a full range of Assisted Reproductive Technology (ART) services have made India the first choice for infertility treatments.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Language is a major comfort factor that invites so many foreign tourists to visit India for medical and health tourism. India has a large populace of good English speaking doctors, guides and medical staff. This makes it easier for foreigners to relate well to Indian doctors.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Indian hospitals excel in cardiology and cardiothoracic surgery, joint replacements, transplants, cosmetic treatments, dental care, Orthopaedic surgery and more.<br>

</p>

 <h1>A. Fast Track-Zero Waiting Time</h1>  
 <p>Quick and immediate attention for surgeries and all interventions are assured in India. Getting an appointment for bypass surgery or a planned angioplasty in certain countries takes almost 3-6 months. And there these treatments are very costly too. It’s zero waiting time in India for any procedure, be it heart surgery, kidney care, cancer treatment, neuro-spinal procedure, knee/hip/joint replacements, dental, cosmetic surgeries, weight loss surgery etc.</p>
 
 <h1>B. Feeling the pulse</h1>
 <p>For greater understanding between patients and healthcare personnel, the warmth and hospitality of Indian hospitals is a big factor in choosing India as a healthcare destination. Among the top medical destinations of the world, India has the highest percentage of English language speaking people. Amidst the variety of culture and traditions, if there is one thing that is common in India, that is the English language. If other language options are essential, there are expert interpreters who will be some time arranged by the hospitals. All leading to reassuring hospitality and great after care. </p>
 
 <h1>C. Skilled and well-qualified doctors </h1>
 
 <p>Doctors tend to be highly trained, due to large medical tourism cities like Chennai and Noida having foreign patients fill half their hospital beds. Also, the language barrier is lower for English speakers, and Indian hospitals are bringing in translators for non-English speaking foreigners. Indian doctors and surgeons are well known throughout the world for their skills and research. This country offers you the services of some of the world's highest-qualified medical professionals along with top-class biomedical facilities. </p>
 
 <h1>D. Customized services</h1>
 
 <p>Here, patients can avail healthcare benefits in facilities varying in size from small, specialized clinics to large, multi-specialty hospitals. India's offerings are classified into a range of categories that can suit every budget and every need. </p>
 
 <h1>E. Use of latest technologies</h1>
 <p>ndian hospitals are equipped with highly advanced equipment and use latest technologies to offer sophisticated medical services that are easily comparable to those offered by developed countries. 
The drivers for growth in medical tourism in India are lower cost, scale and range of treatments, internationally accredited healthcare facilities (~19 JCI-accredited hospitals), availability of skilled doctors/nursing staff, sophisticated medical technology and infection control processes without the long waiting period of the developed countries.</p>
    <h1><img src="images/we.png" class="img-responsive"></h1> 
    
    <h1>F. Growing Trends</h1>
    
    <p>As per estimates, around 1.7 lakh foreigners fly to India for medical treatment every year, to avail world class personalized healthcare services. Indian hospitals meet international standards of cleanliness and hygiene and their top-class infrastructure suits the needs of patients coming for treatments such as heart surgery, knee replacement, orthopaedic treatments, cosmetic surgery, eye care, dental treatment or any other healthcare need.</p>
    
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


 </div>
 </div>
 </div> 
 
  </div><!--about us section end here-->
  
  
  <!--Services section starts here-->
  <section id="ser_vicesnew" class="fullscreen background parallax sec_three" data-img-width="1600" data-img-height="1064" data-diff="100">
  <h1>Our Services</h1>
  <p>We, LSupport make our patients feel at home, while they are away from home. 
We make sure that the patients and their relatives feel safe and comfortable in India.<br>
We, LSupport leave no stone unturned to ensure that our patients get the best treatment
possible at affordable cost without compromising the quality.</p>
  
  <div class="container">
  <div class="col-xs-12 col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <div class="servi_new_3">
  <h1><img src="images/serv/appointment.PNG" class="img-responsive"></h1>
  
  <h3>Online Appointment Booking System</h3>
  
  <p>Traveling to non-native country for treatment is a difficult decision for any patient. Many patients may know of a destination or provider of interest, but certain factors (Language barriers, Facilities and Frontier technology & Affordable treatment options and financial savings) can lead to a plethora of problems in a foreign land, Keeping this mind, we, at Humane Medical Tourism, make our patients <strong>feel at home, while they are away from home. </strong></p>
 
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serviceo_ne">Know More</button>
 
 <div class="modal fade" id="serviceo_ne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:left;">1. OUR SERVICE</br> <small style="display:block;color:#000;text-align:right;font-style:italic;">Home away from Home</small></h4>
      </div>
      <div class="modal-body">
      <h1><img src="images/serv/s1.jpg" class="img-responsive center-block"></h1>
       <p style="color:#09F;">Traveling to non-native country for treatment is a difficult decision for any patient. Many patients may know of a destination or provider of interest, but certain factors (Language barriers, Facilities and Frontier technology & Affordable treatment options and financial savings) can lead to a plethora of problems in a foreign land, Keeping this mind, we, at Humane Medical Tourism, make our patients <strong>feel at home, while they are away from home</strong>.</p>
       
       <p>Firstly, we make sure that the patients and their relatives feel safe and comfortable in India. Secondly, we leave no stone unturned to ensure that our patients get the best possible treatment within their respective budgets. <br>
<br>

Based on patients' requirements and budgets, we suggest them the best hospitals doctors, & help them throughout the process so that they can recover speedily and return happily to their home country.</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 
 </div>
  
  </div>
  
  <div class="col-xs-12 col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <div class="servi_new_3">
  <h1><img src="images/doctorondemand.jpg" class="img-responsive"></h1>
   <h3>Doctor On-Demand Services </h3>
  
  <p style="height:244px;">It involves initial evaluation and reports review, At Humane Medical Tourism for every query/ inquiry which comes from a patient who is looking to get treated in India, we have a team of expert coordinators who are responsible for providing proper medical evaluation process with the help of our qualified and experienced panel doctors.</p>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#servicet_wo">Know More</button>
 
 <div class="modal fade" id="servicet_wo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:left;">2. PRE-ARRIVAL SERVICES </br> <small style="display:block;color:#000;text-align:right;font-style:italic;">choose right...............be right </small></h4>
      </div>
      <div class="modal-body">
        <h1><img src="images/serv/s2.jpg" class="img-responsive center-block"></h1>
       
     <p style="color:#09F;">It involves initial evaluation and reports review, At Humane Medical Tourism for every query/ inquiry which comes from a patient who is looking to get treated in India, we have a team of expert coordinators who are responsible for providing proper medical evaluation process with the help of our qualified and experienced panel doctors.</p>
  <p><strong>Following are the services that we provide before a patient arrives in India</strong><br>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  We get doctor’s opinion from our partnered hospitals by sending the patient’s clinical /lab investigations reports received from patients.</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Online Consultations with Doctors across India (if required) before arrival.</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  To help the patient in paperwork for Medical Visa (M Visa)/ embassy Assistance Services  and treatment as per the laws of both the countries (Native  country and India)</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  After arrival confirmation, We Humane Medical tourism help in scheduling of medical appointments as and when required</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Let the patient know the approximate number days of hospital stay,</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Help the patient to plan his itinerary based on his convenience and availability of the doctor.</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Help the patient and decide the kind of accommodation he would require during his stay in India.</p></p>
       
       
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
  </div>
  
  </div>
  
  <div class="col-xs-12 col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <div class="servi_new_3">
  <h1><img src="images/onlineprescription.jpg" class="img-responsive" style="height: 160px; width:250px"></h1>
   <h3>Online Prescription and Consultation </h3>
  
  <p style="height:226px;">On arrival we at Humane Medical Tourism ensure that everything you get as per initial planning’s. Upon arrival, starting from picking-up from the airport and till his departure, all type of required assistance is provided by us and our partnered hospital. </p>
  
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#servicet_hree">Know More</button>
  
  <div class="modal fade" id="servicet_hree" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:left;">3. UPON ARRIVAL </br> <small style="display:block;color:#000;text-align:right;font-style:italic;">Here We Are for you</small></h4>
      </div>
      <div class="modal-body">
       
       <h1><img src="images/serv/s3.jpg" class="img-responsive center-block"></h1>
       <p style="color:#09F;">On arrival we at Humane Medical Tourism ensure that everything you get as per initial planning’s. Upon arrival, starting from picking-up from the airport and till his departure, all type of required assistance is provided by us and our partnered hospital. </p>
       <p><strong>The services provided by Humane Medical Tourism upon arrival are mentioned below-</strong></p>
       
       <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Receiving of patient and his attendants at the airport (ambulance, if required) and transfer them to the accommodation/hospital as per the plan</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Providing affordable accommodation [Food, hotels (Budget, Deluxe and Luxury Hotels), guest house etc.] in the vicinity of hospital</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Special assistance for the handicapped patients</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Language translators/Interpreters  as per the patient’s requirement</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Foreign currency exchange</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cell Phone Roaming Services /Local SIM/Call assistance</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  As per the plan take patient to the doctor for OPD consultation </p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Assure that our patients coordinator is there with the patient during the time when investigations/tests and OPD consultations taking place</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Keep the referral doctor/ family of the patient well informed about the progress of the patient</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Help to get the patient discharge and also to help patient settle his bills with the hospital.</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Help patient and attendant settle the bills for the Guest House/Hotel while checking out.</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Arrange for the attendants tours during the process of recuperation of the patient, if they require so Or do it along with the patient, as per the wish.</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Miscellaneous (any relevant services not mentioned above)</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
  </div>
  
  </div>
  
  <div class="col-xs-12 col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
 <div class="servi_new_3">
  <h1><img src="images/serv/serv4.jpg" class="img-responsive"></h1>
  <h3>Follow-up & Recreational Services  </h3>
  <p style="height:226px;">Our involvement with our valued patients continues even after returning to their home country. The idea is to be available for the patient in case he needs some help in his native country. </p>
  
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#servicef_our">Know More</button>
  
  <div class="modal fade" id="servicef_our" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:left;">4. FOLLOW-UP AND ACCOMMODATION</br> <small style="display:block;color:#000;text-align:right;font-style:italic;">We are Always with you</small></h4>
      </div>
      <div class="modal-body">
        <h1><img src="images/serv/s4.jpg" class="img-responsive center-block"></h1>
        <p style="color:#09F;">Our involvement with our valued patients continues even after returning to their home country. The idea is to be available for the patient in case he needs some help in his native country. </p>
        
        <p><strong>The following are the ways we try and remain associated with the patients.</strong></p>
        
        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  We, Humane Medical Tourism will continuously provide patient educational material pertaining to his/her therapy. </p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Keep in touch with the patients on a regular basis through emails/fax/telephone</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  During the process of follow-up, arrange a call between the patient and the treating doctor in India</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Arrange follow-up camps in various countries through different hospitals and inform all our patients through email about it, so that they can also come and get themselves checked.</p>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Arrange transport to the Airport for the patient's return journey to his home country.</p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
  </div>
  
  </div>
  
  </div><!--container end here-->
  
  </section>
  <!--Services section end here-->
  
  
  
  <div class="our_treatment" data-diff="100" id="treatment_out_new">
 <div class="container">
 <h1>Our Treatments</h1>
 <p style="text-align:center; font-size:17px;">Life Support is associated with the best accredited multispecialty hospitals, IVF centres and
clinics in India at affordable prices, thereby helping our patients to find the perfect
medical treatment in India.</p>
 <div class="col-sm-12">
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<img src="images/New folder/t1.png" class="img-responsive center-block">
<h3>  Organ Transplant</h3>
 <p style=" height:185px !important;">The partnered hospitals of Life Support provide multi-disciplinary, highly skilled state of-the-art services to patients under one-roof, supported by cutting-edge medical technology and infrastructure. </p>

<a href="#" title="Know More" data-toggle="modal" data-target="#gftrgfrt">Know More..</a>
 
 <div class="modal fade" id="gftrgfrt" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;"> Organ Transplant</h4>
      </div>
      <div class="modal-body trea_phai">
       
       <p>The state of-the-art services comprise liver & kidney transplantation, corneal transplantation, heart transplants, intestinal & gastrointestinal (GI) transplant/surgeries, peritoneal & haemodialysis, management of kidney disease, paediatric gastroenterology and paediatric organ transplant services. Few pioneer hospitals in India have been a leader in the field of organ transplantation.</p>
       
       <p style="font-weight:bold;font-style:italic;">With Humane International Medical Tourism, you can be assured that we will ascertain the success of your organ transplant surgery so that you will have healthy beautiful life again. Make an appointment with us for a professional assessment.</p>
       
       <h1>Kidney Transplant Specialist India</h1>
       
       <p>A Kidney Transplant is required by a patient who is suffering from end stage renal failure. End-stage renal failure is the name for kidney failure so advanced that it cannot be revived. End-stage renal disease cannot be treated with conventional medical treatments such as medicines. There are only two kinds of treatments possible,</p>
       
       <h1>Dialysis and Kidney Transplant. </h1>
       <p><strong>(a) Dialysis</strong> is the method of artificially filtering the blood. People who require dialysis are required to take it periodically and regularly and are generally confined to the home because of their dialysis schedule, fragile health, or both. </p>
       <p><strong>(b) Kidney transplantation</strong> means replacement of at least one of the failed kidneys with a working kidney from another person, called a donor. Many people who receive a kidney transplant are able to live a similar quality of life as they did before they reached end stage renal disease.</p>
       <p> A donor is carefully chosen by the transplant experts by matching Tissue and Blood so that the chances of acceptance are higher and the risk of failure is minimal.</p>
       <p>Various hospitals now do Kidney Transplants in India. Removal of the donor’s kidney is also now done with Robotic procedures in the few hospitals.</p>
       
       <h1>Liver Transplant Specialist India</h1>
       <p>Liver Transplant is often recommended as an option when other modes of treatment are not successful. The purpose is to replace your diseased liver with a healthy liver. Ideally, after a transplant the patient will be free from disease, and lead a fairly normal life as long as the transplant functions. </p>
       <p>Liver transplantation nowadays is a well-accepted treatment option for end-stage liver disease and acute liver failure. The surgical procedure is very demanding and ranges from 4 to 18 hours depending on outcome and patients profile. Numerous anastomoses and sutures, and many disconnections and reconnections of abdominal and hepatic tissue, must be made for the transplant to succeed, requiring an eligible recipient and a well-calibrated liver or cadaveric donor match. </p>
       
       <h1>There are three options for liver transplantation-</h1>
       
       <p>(a) Cadaver donor transplantation.</p>
<p>(b) Living donor transplantation</p>
<p>(c) Auxiliary transplantation.</p>

<p><strong>Cadaver donor:</strong> The donor liver is obtained from a person who is diagnosed as brain dead, whose family volunteers to donate the organ for transplantation. People who receive cadaver donors wait on the institutional / regional list until a suitable donor becomes available. </p>
   
   <p><strong>Living donor:</strong> A healthy family member, usually a person of blood relation, sibling, or child, or someone emotionally close to you, such as a spouse, volunteers to donate part of their liver for transplantation. The donor is carefully evaluated by the team to ensure that no harm comes to the donor or recipient. </p>
       
       <p><strong>Auxiliary transplantation:</strong> Part of the liver of a healthy adult donor (living or cadaver) is transplanted into the recipient. The patient's diseased liver remains intact until the auxiliary piece regenerates and assumes function. The diseased liver may then be removed. This technique is rarely used now.</p>
       <h1>Cornea Transplant Specialist India</h1>
       
       <p>The cornea is the clear layer on the front of the eye. A corneal transplant is surgery to replace the cornea with tissue from a donor. It is one of the most common transplants done.<br><br>
 In some diseased conditions the cornea becomes cloudy or warped due to disease, injury or infection. A damaged cornea distorts light as it enters the eye causing decreased vision. This kind of visual impairment is called corneal blindness. This is the only type of visual impairment that can be treated by corneal transplantation. <br><br>
Corneal transplantation or corneal grafting is a surgical procedure where the damaged cornea is replaced by donated corneal tissue (the graft) in its entirety (penetrating keratoplasty) or in part (lamellar keratoplasty). The graft is taken from a recently deceased individual with no known diseases or other factors that may affect the viability of the donated tissue or the health of the recipient.<br><br>
The surgical procedure is performed by ophthalmologist, medical experts who specialize in this area.</p>

<h1>Bone Marrow Transplants India</h1>

<p>Bone Marrow Transplantation is a form of intensive treatment used to treat certain cancers like leukemia, lymphomas and some serious diseases like thalassaemia.<br><br>
Bone marrow is found inside our bones tissues, and is the main site for blood production in the body. It is responsible for producing white blood cells, red blood cells, and platelets cells. Stem cells are blood cells at their earliest stage of development in the bone marrow, before they have become committed to developing into white cells, red cells or platelets. It is these 'mother' cells, which are the key factors in transplantation.<br><br>
There are two main types of transplants – Autologous and Allogenic.</p>

<p><strong>Autologous Transplants:</strong> This means that the bone marrow or stem cells used for the transplant are one's own. A little bit of the patient's bone marrow or stem cells is taken and stored before high dose treatment. When the treatment is over, the bone marrow or stem cells are given back through a vein.</p>


<p><strong>Allogeneic Transplants:</strong> In this type of transplant, bone marrow donated by someone else is used. It is essential that the donor's tissue match. The most suitable donor is usually a close relative, most commonly a brother or sister. It is possible to get a good match from an unrelated donor, but this facility does not exist in India.</p>

<h1>Heart Transplant in India</h1>

<p>A Heart Transplant is done a patient with end stage heart failure or very severe Coronary Artery Disease. A brain dead donor or recently deceased patient’s heart is removed and implanted in to the patient after doing several blood and tissue matching to ensure least rejections.
The concept of organ donation after death (cadaver donor) is picking up in India and will still take some more years that the relatives of the deceased would voluntarily come forward for donation to save many lives.</p>


<h1>Our Hospital’s Facilities </h1>

<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  State-of-the-art Equipment: Operation theatres that are managed by highly skilled transplant anesthetists.<br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  CUSA, ABC, Harmonic, Cell Saver, Bypass Machine and TEC monitors are available.<br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Well-developed, ICU with HEPA filters, with all types of monitors and well-trained dedicated nursing staff.<br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Laboratory services- Monitoring of immunosuppressive therapy (Tacrolimus/ 5k506 and Cyclosporine Co & C2 levels) is available round the clock.<br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Complete hematology backup with histopathology and cytopathology reporting of complete panel immune-histochemistry and immune fluorescence studies support round the clock microbiology and immunological backup with expertise in opportunistic and Conventional pathogens.<br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Radiology services- A 3.0 Tesla MRI scanner can accurately define donor biliary anatomy and a PET SUITE can accurately assess donor anatomy and liver volume</p>

<h1>Our Hospital’s Team for Organ Transplantation</h1>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dr. Moh A Nayeem, Dr. Neerav Goyal, Apollo Hospital, New Delhi.<br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dr. Raja Sekhar, Dr. Sandeep Guleria, Apollo Hospital, New Delhi<br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dr.  Abhideep Chaudhary, Dr.  K R Vasudevan, Dr.  Manoj Gupta, Jaypee Hospital, Delhi NCR </p>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


 </div>
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
 <img src="images/New folder/t2.png" class="img-responsive center-block">
<h3>Cancer Treatment in India</h3>
 <p style=" height:185px !important;">Our hospitals are equipped with state of the art equipment, facilities and experienced, faculty & staff, is wholly committed to highly personalized and comprehensive cancer care. </p>
 
 <a href="#" title="Know More" data-toggle="modal" data-target="#aqwesdews">Know More..</a>
 
 <div class="modal fade" id="aqwesdews" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Cancer Treatment in India</h4>
      </div>
      <div class="modal-body trea_phai">
        <p>Our hospitals are equipped with state of the art equipment, facilities and experienced, faculty & staff, is wholly committed to highly personalized and comprehensive cancer care.</p>
     <p style="font-style:italic;"><strong>With Humane International Medical Tourism, you can be assured that we will ascertain the success of your cancer treatment so that you will have healthy beautiful life again. Make an appointment with us for a professional assessment.</strong></p>
     
     <p>Patient centric focus, multidisciplinary approach, personalized, cost effective solutions with utmost care to all medical needs of the patient coupled with administrative needs are meticulously looked into by a team of experienced medical and administrative teams.</br> </br> 
Our Doctors team are highly skilled and renowned surgical, Radiation and medical Oncologists and they are expert in Nuclear Medicine, Neurosurgery and Radiology. </br> </br> 
Our hospitals are equipped with most advance technology, Three- Dimensional Conformal Radiation therapy(3DCRT), IMRT/IGRT &PET Guided Planning and Clinac IX with Robotic imager. </p>
     
     <h1>Our services </h1>
     <p style="color:#000;">
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Humane International Medical Tourism provides high quality cancer treatment in India. In our hospitals, the main focus is to cure all type of cancer at affordable prices. They follow the current standards of care and treatment protocols for each type and stage of cancer.</p> </br></br>

<p>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Medical Oncology & Radiation Oncology </br></br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  CyberKnife VSI </br></br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  HIPEC Technology </br></br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Gynae-oncology & Breast Cancer </br></br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Head & Neck Cancer, GI & Thoracic Oncology </br></br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Brain & Spinal Cord Cancers
</p>
     
   <h1>Our Oncologists Team</h1>  
     <p><strong>a)</strong>   Dr. S Hukku, Dr. Kapil Kuma & Dr. Sandeep Mehta, BLK Hospital, New Delhi </br></br>
<strong>b)</strong>   Dr. Manav Rakshak – Metro Hopsital. New Delhi. </br></br>
<strong>c)</strong>   Dr. Subodh C. Pande – Artemis Healthcare, Gurgoan, Delhi NCR. </br></br>
<strong>d)</strong>   Dr. H K Chaturvedi - Max Healthcare, New Delhi </p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 
 </div>
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <img src="images/New folder/t3.png" class="img-responsive center-block">
  <h3>Robotic Surgery in India</h3>
 <p style=" height:185px !important;">Robotic Surgery is fast gaining ground all over the world as the preferred mode of surgery. Apart from the clear advantages like higher patient comfort and safety, it also helps significantly cut down the length of stay at hospital. </p>
 
 <a href="#" title="Know More" data-toggle="modal" data-target="#nmjkl">Know More..</a>
 
 <div class="modal fade" id="nmjkl" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Robotic Surgery in India</h4>
      </div>
      <div class="modal-body trea_phai">
     <p>  Robotic Surgery is fast gaining ground all over the world as the preferred mode of surgery. Apart from the clear advantages like higher patient comfort and safety, it also helps significantly cut down the length of stay at hospital.</p>
      <p style="font-style:italic;"><strong>With Life Support, you can be assured that we will ascertain the success of your complex surgeries so that you will have healthy beautiful life again. Make an appointment with us for a professional assessment.</strong></p>
      
      <p>Our Hospitals has been at the forefront of adopting new technologies for better patient care. With its fully equipped, world class OT's, addition of Robotic technology has augmented the continuous effort to bring best clinical outcomes for the patient. Our some multi-speciality, multi-modality hospitals offer Robot Assisted Surgeries of world class standards at costs which are just a fraction of what is charged in hospitals in advanced nations. </p>
      
      <p>We, Humane International Medical Tourism had partner with various hospitals which are equipped with State-of-the-art operating theatres are equipped with the most advanced, Da Vinci Si surgical system, the most advanced platform for minimally invasive surgery available today. The four armed surgical robotic system is a breakthrough in surgical capabilities across the key specialties of Cardiology, Neurology, Nephrology, Urology and Gynecology at our hospitals. </p>
      
      <h1>The da Vinci Si Surgical system: Key Advantages</h1>
      
      <p>
     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  3D high definition vision Up to ten times magnification </br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  An immersive view of the surgical field through tiny incisions of 1cm to 2 cm</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  EndoWrist Instruments with seven degrees of freedom for range of motion far greater than the human hand with reduction of hand tremor</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Enhanced dexterity and greater accuracy</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Complex surgical manoeuvres made easier through smaller ports</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Minimises patient trauma even in confined spaces of the chest, abdomen or pelvis</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  The only system that allows surgeons to operate while seated</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Better ergonomics than traditional open and laparoscopic surgery</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Natural hand-eye positioning and reduced surgeon fatigue</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Improved surgical capabilities</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Four robotic arms with added mechanical strength makes minimally invasive approach possible even for high BMI patients</p>
      
 <h1>Our Doctors Team </h1>
 <p><strong>(a)</strong> Dr. Ajit Saxena, Dr. Anshuman Agarwal, Dr. Arun Prasad, Apollo Hospital Delhi </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 
 
 </div>
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"> <img src="images/New folder/t4.png" class="img-responsive center-block">
  <h3>Cardiovascular Surgery</h3>
 <p style=" height:185px !important;">Are you planning to visit India for Cardiac and Vascular surgery? Many hospitals in India have Cardiac surgery centre which are design to provide the highest level of professional expertise and patient care in India.</p>

<a href="#" title="Know More" data-toggle="modal" data-target="#vbghj">Know More..</a>
 
 <div class="modal fade" id="vbghj" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Cardiovascular Surgery</h4>
      </div>
      <div class="modal-body trea_phai">
       <p>Are you planning to visit India for Cardiac and Vascular surgery? Many hospitals in India have Cardiac surgery centre which are design to provide the highest level of professional expertise and patient care in India.</p>
     
     <p> Our hospitals are equipped with cutting edge technology, flat panel detectors (FPD), apex tertiary level coronary service, advance diagnostic services, preventive care services and comprehensive nuclear medicine. </p>
     
     <h1>Our Services in cardiology</h1>
     <p>Life Support offers advance care services in the field of cardiology, vascular medicine and support services at affordable cost.  Our Partner hospitals are providing following services.</p>
     
     <p>
     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Coronary angioplasty, Angiography and Coronary stent placement</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Paediatric Cardiology and Cardiac Surgery</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Pacemaker Installation and Heart implant</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Open and closed Heart surgery and Coronary Artery Bypass (CABG)</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Echo Cardiography</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Congenital defect repair, and Aortic Aneurysm</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Nuclear Diagnostic Services and Cardiology Robotic Surgery</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Heart Check-up Package</p>
     
     <h1>Our partner hospitals have world renounced cardiologists team </h1>
     
     <p> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dr. Naresh Terhan – Medanta Hospital, Delhi</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dr. Ashok Seth, Dr. Ramji Mehrotra- Escort Hospital Delhi</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dr. Purshottam Lal  Metro Hospital, New Delhi</br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dr. Rajesh Kaushish – Max Hospital, New Delhi </br></br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dr. H.S.Rissam –Max Hospital, Saket, New Delhi </p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


 </div>
 
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<img src="images/New folder/t5.png" class="img-responsive center-block">
  <h3>Pediatric Cardiology Services</h3>
 <p style=" height:185px !important;">Most of our hospitals have pediatric cardiology services which are specialize in diagnosis and management of all forms of congenital heart disease from prenatal cardiology to adulthood. </p>

<a href="#" title="Know More" data-toggle="modal" data-target="#awesdr">Know More..</a>
 
 <div class="modal fade" id="awesdr" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Pediatric Cardiology Services</h4>
      </div>
      <div class="modal-body trea_phai">
       <p>Most of our hospitals have pediatric cardiology services which are specialize in diagnosis and management of all forms of congenital heart disease from prenatal cardiology to adulthood. </p>
     
     <p>We, Life Support are working in collaboration with centres having specialisation in the diagnosis and management of heart problems seen in children such as Rheumatic heart disease, Kawasaki disease, Marfan syndrome, Long QT syndrome and other acquired heart lesions seen in children.</p>
     
     <h1>Our Paediatric Cardiology Diagnostic Services…</h1>
     
     <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Comprehensive Imaging<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cardiac Catheterization services<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Diagnostic cardiac catheterization and angiography<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Catheter Interventions</p>
     
     <p>Treatment of many heart defects needs an operation for their treatment and often this is an open-heart operation. Today newer developments in cardiac catheterization technology allow treatment of heart defect in selected patients without an operation. This avoids the trauma of surgery and allows very rapid recovery and short hospital stay. The procedures are performed in the cardiac catheterization laboratory and require no more than a needle prick in the groin.</p>
     
     <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Closure of defects<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Balloon dilatation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Stenting<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fetal cardiac unit</p>

<p>Prenatal diagnosis and counseling of pregnant mothers with suspected heart defect in the fetus, prenatal treatment for fetuses with cardiac rhythm disorders.</p>

<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fetal Echocardiogram<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Electrophysiology</p>
     
     <p>The program encompasses the full spectrum of pediatric electrophysiology. Our hospitals perform invasive electrophysiology studies using standard and advanced techniques in patients with structurally normal hearts as well as in patients with congenital heart disease, and offer both radiofrequency ablation, and transcatheter cryoablation. Surgical mapping and intraoperative cryoablation are also available for patients with congenital heart disease. Centres are also performing autonomic testing using tilt table technology. The EP service also implants all transvenous pacemakers, including biventricular pacemakers and implantable cardioverter-defibrillators.</p>
     
     <h1>Our Pediatric Cardiology Team</h1>
     
     <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Munesh Tomar, Dr. Rajesh Kumar Sharma, Medanta Hospital, Delhi NCR<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Pankaj Bajpai, Dr. Subeeta Bazaz, Medanta Hospital, Delhi NCR<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Amita Mahajan, Dr. Anita Sikand Bakshi, Dr. Anupam Sibal, Apollo Hospital Delhi</p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 </div>
 
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<img src="images/New folder/t6.png" class="img-responsive center-block">
  <h3>IVF Centers</h3>
 <p style=" height:185px !important;">We, Humane International Medical Tourism are partnered with the world class IVF centres and hospitals which are offering the most sophisticated and advanced Assisted Reproduction Unit (IVF Lab) with latest technology.  </p>

<a href="#" title="Know More" data-toggle="modal" data-target="#vffggg">Know More..</a>
 
 <div class="modal fade" id="vffggg" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">IVF (Mother & Child care) Centers in India</h4>
      </div>
      <div class="modal-body trea_phai">
        <p>We, Humane International Medical Tourism are partnered with the world class IVF centres and hospitals which are offering the most sophisticated and advanced Assisted Reproduction Unit (IVF Lab) with latest technology.  </p> <br>
       <p>Our IVF centers have highly skilled and experienced fertility specialists, in-house competent embryologist and the support of the best diagnostic modalities and laboratory services to give you better advice regarding the treatment options and help you decide the treatment that best suit you. In all our hospitals both patients and doctors recognize that same symptoms may have many different causes and that accurate diagnosis should always come before treatment. This is no less true when the symptom is the "inability of a couple to have a baby (infertility)". Therefore, before you start infertility treatment we recommend you to have proper examination and investigations so that we, LSupport can give you better advice regarding the treatment options and help you to decide the most appropriate treatment for you.</p> <br>
       
       <h1>Our IVF hospitals are equipped with latest technologies and facilities……</h1>
       <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Consistent 24X7X365 Services (No Waiting for Batches)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Internationally Trained and Experienced Professional Team<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Ovulation induction / controlled ovarian stimulation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Full time in-house embryologists and lab services<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Backed up by Urology, Endocrinology, radiology, Pathology and all other medical specialties<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Individual treatment protocols for best results<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Based on strict ethical and legal guidelines as per ICMR and international recommendations<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Full patient involvement at each stage with complete transparency<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Own Semen Bank<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Cryopreservation services for infertility patients as well as for cancer patients</p>
   
   <h1>Our Team </h1>
    
    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Sohani Verma-Indraprastha Apollo Hospitals, New Delhi<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Sushma Prasad Sinha-Indraprastha Apollo Hospitals, New Delhi<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr.  Rakhi Singh, Jaypee Hospital, Delhi NCR<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr.  Shobha Chaturvedi, Jaypee Hospital, Delhi NCR 
</p>   
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


 </div>
 
  <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<img src="images/New folder/t7.png" class="img-responsive center-block">
<h3>Orthopaedic & Spinal Surgery </h3>
 <p style=" height:185px !important;">Many orthopedic surgery in India have been trained overseas and equipment used for procedures are modern and Computer Assisted Surgery (CAS) & Micro Invasive Surgery (MAS).  </p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#tyuijhg">Know More..</a>
 
 <div class="modal fade" id="tyuijhg" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Orthopaedic & Spinal Surgery in India</h4>
      </div>
      <div class="modal-body trea_phai">
        <p>Many orthopedic surgery in India have been trained overseas and equipment used for procedures are modern and Computer Assisted Surgery (CAS) & Micro Invasive Surgery (MAS).  </p><br>
        
        <p>Our partnered hospitals are a state-of-the-art specialized facilities designed to provide the highest levels of professional expertise and patient care with the intent of early mobilization and minimal discomfort. Prices for orthopedic surgery in abroad are highly competitive than India.</p><br>
        
        <h1>Our Services</h1>
        
        <p>Life Support provides a comprehensive range of treatment for those undergoing orthopaedics, joint replacement and spinal surgery in India.</p>
        
        <p>
        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Knee Replacement, Hip Replacement and Hip Resurfacing<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Shoulder Surgery, Hand & Foot Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Joint Replacement Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Discectomy and Spinal Decompression Procedures (Endoscopic & Microscopic)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Non Fusion Surgery (Disc Replacement)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Spinal Fusion Surgery (TLIF & PLIF)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Spinal Fracture Surgery (Minimally Invasive & open Surgery)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Vertebral Augmentation Procedures (Kyphoplasty & Vertebroplasty)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Tumor Surgery ( Corpectomy & Vertebrectomy)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Deformity Correction (Kyphosis & Scoliosis)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Minimally Invasive Spine Surgery</p>
        
  <h1>Our Orthopaedics Surgeon Team </h1> 
  
  <p>
  <strong>(a)</strong>   Dr. IPS Oberoi – Artemis Health Science, Delhi NCR  <br>
<strong>(b)</strong>   Dr. H.N.Bajaj -- Max Healthcare, New Delhi<br>
<strong>(c)</strong>   Dr.  Sanjay gupta, Dr.  Niraj Garg & Dr.  Gaurav Rathore, Jaypee Hospital, Delhi NCR</p>
       
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 
 
 </div>
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
 <img src="images/New folder/t8.png" class="img-responsive center-block">
<h3>Bariatric & GI Surgery</h3>
 <p style=" height:185px !important;">We, Life Support are associated with the multi-speciality hospitals having the facilities like GI Surgery, GI Oncology, Minimal Access and Bariatric Surgery& Hepatobiliary Sciences. </p>
  <a href="#" title="Know More" data-toggle="modal" data-target="#asert">Know More..</a>
 
 <div class="modal fade" id="asert" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">GI Surgery, GI Oncology, Minimal Access & Bariatric Surgery</h4>
      </div>
      <div class="modal-body trea_phai">
       
       <p>We,Life Support are associated with the multi-speciality hospitals having the facilities like GI Surgery, GI Oncology, Minimal Access and Bariatric Surgery& Hepatobiliary Sciences. </p><br>
       
       <p>These hospitals are equipped with the most modern facilities and caries out almost all major GI, Hepatobiliary, Pancreatic procedures and has an active bariatric surgery programme.<br><br>
We, Life Support help to get state of the art surgical services for patients of digestive, liver, pancreato-biliary.</p>
       
       <p style="font-style:italic;"><strong>With Life Support, you can be assured that we will ascertain the success of your organ transplant surgery so that you will have healthy beautiful life again. Make an appointment with us for a professional assessment.</strong></p>
       
       <h1>Facilities in Partnered Hospitals </h1>
       <p>Our partnered hospitals have brought to you at a truly <strong>world class bariatric centre</strong>. The state of the <strong>laparoscopic theatre</strong> is equipped with latest high definition equipment. The patient areas, wards, and theatres have been carefully planned keeping in mind the specific needs of obese patients.</p>
       <h1>Our Doctors Team </h1>
       <p><strong>(a)</strong> Dr Adarsh Chaudhary, Medanta Hospital, Gurgaon, Delhi NCR<br>
<strong>(b)</strong> Dr. Aloy J Mukherjee, Dr. Arun Prasad, Dr. Saket Goel, Apollo Hospital, New Delhi. </p>
       
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 
 </div>
 
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <img src="images/New folder/t9.png" class="img-responsive center-block">
  <h3>Eye Care (Ophthalmology) </h3>
 <p style=" height:185px !important;">If you were to ask practically anyone which sense they’d least like to be without, they’d probably answer “eyesight.” As we age, almost all of us will experience vision loss to one degree or another.  </p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#ghjk">Know More..</a>
 
 <div class="modal fade" id="ghjk" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Eye Care (Ophthalmology) in Indian</h4>
      </div>
      <div class="modal-body trea_phai">
        <p>If you were to ask practically anyone which sense they’d least like to be without, they’d probably answer “eyesight.” As we age, almost all of us will experience vision loss to one degree or another.  </p><br>
        <p>Fortunately, there are numerous treatments for failing and faulty eyesight In India many Eye care hospitals are designed to provide highest levels and quality of professional expertise and equipped with the state- of-the-art Stellaris, Signature and Infiniti systems: The latest generation phacoemulsification machines.</p><br>
        
        <h1>Our services </h1>
        
        <p>Life Support offer you the very best in a wide range of surgical treatment & procedures at affordable cost to the patients in India.</p><br>
        
        <p>
        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Retina & Vitereous Diagnostic<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Lasik (Wave Front & Standard Lasik) <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Glaucoma Diagnostic & Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Contact Lences & Spectacles <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Cataract Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Laser & Surgery <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Squint Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Plastic Surgery of Eye
</p>

<h1>Our Ophthalmologist / Eye Experts Team</h1>

<p><strong>(a)</strong>   Dr. Ajay Aurora – Max Healthcare, New Delhi<br>
<strong>(b)</strong>   Dr. Anil Malhotra , Apollo Hospital, New Delhi</p>
        
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 
 </div>
 
  <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<img src="images/New folder/t10.png" class="img-responsive center-block">
<h3>Medical Spa & Hair Transplant</h3>
 <p style=" height:185px !important;">Our partnered Medical Spa Centres are internationally recognized for providing world’s best services under one-roof and are globally recognised.  </p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#asdf">Know More..</a>
 
 <div class="modal fade" id="asdf" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">  Medical Spa, Laser & Cosmetic Surgery and Hair Transplantation</h4>
      </div>
      <div class="modal-body trea_phai">
        <p>Our partnered Medical Spa Centres are internationally recognized for providing world’s best services under one-roof and are globally recognised.  These clinics/Centres are equipped with state-of-the-art infrastructure with the world’s best technologies. </p>
        <h1>Our services-</h1>
        
        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Hair Transplant Surgery, Plastic Surgery and Liposuction<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Micro-vascular Surgery : Breast Reconstruction, Laser Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Unwanted Hair Removal, Birth Marks Removal<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Acne and Pimples Removal, Keloids and Hypertrophic Scars Removal<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Skin Wrinkles Removal, Cosmetic Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Breast Augmentation, Breast Reduction<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Rhinoplasty<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Face Lift, Botox</p>
    
    <p>Millions of people make a decision to go for cosmetic treatments and procedures every day.  Medical Spa Laser & Cosmetic Surgery Centres are the affordable name to depend on for guidance and expertise when you are ready to proceed with that important decision.</p>    
    
    <p>At our Medical Spa Laser & Cosmetic Surgery Centres you will experience that you’re in safe hands. These are endorsed by doctors and guided by Our Experts (Consultant Plastic & Cosmetic Surgeon) and his team. We perform all of our cosmetic treatments and procedures in a clean and safe environment.</p>
    
    <p>Providing an extensive range of cosmetic surgeries like hair transplant, liposuction, and laser treatment, etc. Our partnered Centres have delivered satisfaction to thousands of peoples. Comprehensive consultations determine your exact requirements in order to perform your procedure with your full trust and confidence.</p>
    
    <p>We, Humane International Medical Tourism working with the Medical Spa and experts which are nationally and internationally recognized names in Laser, Cosmetic Surgery and Hair Transplant.</p>
    
    <p style="font-style:italic;"><strong>With Humane International Medical Tourism, you can be assured that we will ascertain the success of your Laser & Cosmetic Surgery and Hair Transplantation so that you will have healthy beautiful life again. Make an appointment with us for a professional assessment.</strong></p>
    
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 </div>
 
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
 <img src="images/New folder/t11.png" class="img-responsive center-block">
<h3>Dental care </h3>
 <p style=" height:185px !important;">Dental care has been developed as well as modernized and has been blended along with quality professionalism resulting in a good amount of success. Highly qualified and experienced dental professionals offer a wide range of dental treatments.  </p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#rtyu">Know More..</a>
 
 <div class="modal fade" id="rtyu" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Dental care in India</h4>
      </div>
      <div class="modal-body trea_phai">
      
       <p>Dental care has been developed as well as modernized and has been blended along with quality professionalism resulting in a good amount of success. Highly qualified and experienced dental professionals offer a wide range of dental treatments.  </p><br> 
        <p>Dentistry has reached newer and much more developed dimensions. Following are the dental treatments in India.</p>
        
        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>Dental Implants</strong> - Single tooth missing, Missing multiple teeth, All teeth missing<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>Cosmetic Dentistry</strong> - Teeth Whitening, Porcelain Venners<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>General Dentistry</strong> - Root Canal, Onlays and Inlays, Crown and Bridges, Dentures and out. Prosthetic, Applicances<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>Paediatric Dentistry</strong><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   <strong> Minimally Invasive Dentistry</strong><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   <strong> Orthodontics</strong><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>Oral Surgery</strong><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>Periodontics</strong></p>


<p>Visiting India for a dental treatment is a perfect amalgamation of modern technology, expertise and personalized care being offered to you. We, Humane International Medical Tourism will avail you the affordable and yet the best of services in dental care while proper hygiene levels being utmost importance. There has been some latest technological advancement in dentistry:</p>
        
 <h1>Major Services offered </h1>       
       
  <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>Digital Orthopantamograph (OPG)</strong> - This digital X-ray technology is based on electronic sensors and computers which reduces the the exposure of the patient to radiation along with the costs.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>Digital Radiovisiography (RVG)</strong> - It is the latest X-ray technology in dentistry that enlarges the images of patient's teeth making the process easier and quicker.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>CAD/CAM</strong> - This technology comes up with various kinds of dental restorations in a quick manner, unlike the traditional methods.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    <strong>LASER Dentistry</strong> - This new branch of dentistry provides quick recovery with minimum pain and swelling during the treatment.</p>
   
   <h1>Our Dental Surgeons Team</h1>
   
   <p><strong>(a)</strong>   Dr. Amrita Gogia, Dr. Ateksha Bhardwaj Khanna, Dr. Ateksha Bhardwaj Khanna, Medanta Hospital, Delhi<br>
 <strong>(b)</strong>  Dr. (Prof.) Puneet Kahturia – Dental Clinic, New Delhi <br>
 <strong>(c)</strong>  Dr.  Anuj Aggarwal, Jaypee Hospital Noida, Delhi NCR</p>
       
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 </div>
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <img src="images/New folder/t12.png" class="img-responsive center-block">
  <h3>ENT and Head Neck surgery</h3>
 <p style=" height:185px !important;">We, Life Support are partnered with the hospitals having enough competent to deal with the al type of case of ENT and Head Neck surgery. </p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#qwe122">Know More..</a>
 
 <div class="modal fade" id="qwe122" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">ENT (Ear, Nose and Throat) - Treatments & Services</h4>
      </div>
      <div class="modal-body trea_phai">
      <p>We, Life Support are partnered with the hospitals having enough competent to deal with the al type of case of ENT and Head Neck surgery. </p>
      <p>They are equipped with the finest technology and the best manpower to provide the best possible facilities for the patients. ENT centers have state-of-the-art facilities for voice disorders, phonosurgery and laryngology. </p>
      <p>Our Hospitals are carrying on treatment of Head and Neck Cancer along with the radiation medicine and medical oncologists. There is collaboration with neurosurgeons for the treatment of skull base lesions. 
The latest generation Lumenis Acupulse (Surgitouch) CO2 Laser System will provide latest and cutting-edge technology for treatment of Juvenile papillomas, Bilateral abductor cord paralysis, vascular lesions, premalignant lesions, cancer of larynx, oral cavity, oropharynx and hypopharynx, and Laryngotracheal stenosis. Endoscopic sinus and nasal surgery for diseases of the nose and paranasal sinuses, chronic dacrocystitis, malignant exopthalmos and optic nerve decompression is also carried out herein the centers. The hospitals are equipped with well-equipped to take care of all Ear, Nose and Throat emergencies and has teams available round the clock to do so. They are also provides audiology, voice and speech therapy as allied services. </p>
     
     <h1>ENT (Ear, Nose and Throat) -Services</h1>
     
     <p>We have special expertise in the following:<br>
     
     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Cochlear Implantation Procedures <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Reconstructive middle ear surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Surgery of the facial nerve<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Congenital ear anomalies<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Micro laryngeal surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Surgery for snoring and sleep apnoea<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Thyroplasty<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Septoplasty and septorhinoplasty<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Functional endoscopic sinus sugery.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Head and neck cancer surgeries<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Revision ear surgeries<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Laser surgeries for several head and neck lesions<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Phonosurgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Endoscopic skull base Surgery- CSF Rhinorrhoea repair and Hypophysectomy<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Endoscopic DCR, Orbital & Optic nerve decompression<br>
     
     
     </p>
  <h1>Our Team of Doctors</h1>
  
  <p>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>     Dr. K K Handa, Dr. Deepak Sarin, Dr. Aru Chhabra Handa -Medanta Hospital, Delhi<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Ameet Kishore, Dr. Arvind Soni, Dr. Atul Ahuja, Dr. Girish Raheja- Apollo Hospital Delhi. 
  </p>
     
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 </div>
 
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <img src="images/New folder/t13.png" class="img-responsive center-block">
  <h3>Paediatric care</h3>
 <p style=" height:185px !important;">We, Life Support have partnership with hospitals which are offering comprehensive care in the management of problems related to neonatal and children. </p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#hjhjhjhjh">Know More..</a>
 
 <div class="modal fade" id="hjhjhjhjh" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Paediatric care in India</h4>
      </div>
      <div class="modal-body trea_phai">
       <p>We, Life Support have partnership with hospitals which are offering comprehensive care in the management of problems related to neonatal and children. </p>
      <p>Most of these hospitals in India have the state-of-the-art echocardiography technique called Intra-Cardiac Echo (ICE, which is particularly useful for closing holes in the heart without surgery.) The hospitals are equipped with pediatric and neonatal intensive care units comparable to the best available in the world. </p>
      <h1>Our Pediatric treatment services </h1>
     
     <p>







     
     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Neonatology <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Neonatal Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Pediatric Gastroenterology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Pediatric Urology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Pediatric HematologyPediatric Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Pediatric Day Care Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Pediatric Orthopedics<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Child Psychology<br>
</p>
  <h1>Our Team for Paediatric care</h1>
  
  <!--<p>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>     Dr. K K Handa, Dr. Deepak Sarin, Dr. Aru Chhabra Handa -Medanta Hospital, Delhi<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Ameet Kishore, Dr. Arvind Soni, Dr. Atul Ahuja, Dr. Girish Raheja- Apollo Hospital Delhi. 
  </p>-->
     
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 </div>
 
  
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <img src="images/New folder/t14.png" class="img-responsive center-block">
  <h3>Endovascular Treatment</h3>
 <p style=" height:185px !important;">Our partnered hospitals have division of Peripheral Vascular & Endovascular Sciences caters to patients from abroad who come with complaints of gangrene, pain on walking, non-healing wounds & ulcer, leg swellings, varicose veins, pain in legs, ulcers, stroke or paralysis and limb..</p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#awswawa">Know More..</a>
 
 <div class="modal fade" id="awswawa" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Paediatric care in India</h4>
      </div>
      <div class="modal-body trea_phai">
       <p>Our partnered hospitals have division of Peripheral Vascular & Endovascular Sciences caters to patients from abroad who come with complaints of gangrene, pain on walking, non-healing wounds & ulcer, leg swellings, varicose veins, pain in legs, ulcers, stroke or paralysis and limb threatening trauma.</p>
      <p>We, Life Support take pride in being partnered with many dedicated centres of Peripheral Vascular and Endovascular Surgery in the country which performs its own diagnostic tests and carries out interventional management of the patients. </p>
      
      <p>Detailed evaluation of the peripheral arterial and venous system is done in a Non-invasive lab by a vascular specialist who detects blockage in the arteries and also predicts future blockages. Doctors take care of all vascular injuries, both arterial and venous, sustained during Road Traffic Accidents or Industrial Accidents round the clock. The Division provides help to patients with non-reconstructable vascular disease for relief of pain and limb salvage. Division holds the distinction of having a dedicated dual plane Vascular Cath lab along with a state of the art "ARTIS ZEEGO" Cath lab in the operation theatre. The addition of the vascular platform to the Robotic Surgery programme has added a much higher level of technological advancement to the services. The Division provides overall management of all peripheral vascular diseases and also arranges medical and public awareness lectures, camps and seminars for various medical associations, NGOs and corporate houses to increase the awareness of this new super-specialty.</p>
      
      <h1>Our Services for Peripheral Vascular & Endovascular treatment </h1>
     
     <p>Our Hospitals offer comprehensive management of patients with a wide range of vascular surgical problems mentioned below. This is backed with effective support of a state-of-the-art non-invasive diagnostic lab and DSA lab for interventional procedures. Out hospitals are performing advanced angioplasty and stenting. </p>
 
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>     Varicose Veins & Leg Ulcers treatment- Laser Ablation (EVLT) Radio frequency Ablation(RFA) and conventional surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Deep Vein Thrombosis–Thrombolysis, Thrombectomy & IVC Filter<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Diabetic Foot & Non-healing ulcers- comprehensive treatment<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Peripheral Vascular Disease, Buerger’s disease, aortoiliac disease, gangrene, Vascular Trauma<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Aortic aneurysm Stenting & Surgery, Arterial and Venous Bypass of limbs<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Congenital angiomatous malformation- Comprehensive treatment<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Carotid Artery stenosis- Stenting & Surgery for Stroke<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    All sorts of Dialysis Access (Fistulas, Shunts & Permacath, CAPD)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Raynaud’s syndrome & Hyperhydrosis (Thoracoscopic Sympathectomy)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Thoracic outlet syndrome- cervical rib<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Arterio-venous malformations, Mesenteric & Renal ischemia<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Swelling of the legs- Lymphedema - Diagnosis & treatment<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Chest Trauma, Lung infection with Empyema, Pneumothorax, Carcinoma Lung</p>
 
    <h1>Our Doctors Team</h1> 
    
    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Jaisom Chopra, Dr. Nitish Anchal and Dr. Rakesh Mahajan, Apollo Hospital Delhi.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Dr. Rajiv Parakh, Medanta Hospital, Dr. Rajiv Parakh, and Dr. Tarun Grover, Delhi NCR</p>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 </div>
 
 
 <div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <img src="images/New folder/t15.png" class="img-responsive center-block">
  <h3>Plastic/Cosmetic Surgery</h3><p>Life Support partnered Hospitals/clinics in India are internationally JCI-accredited, with a team of dedicated plastic surgeons who have received the highest standard of training in plastic, cosmetic and reconstructive surgery.</p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#qweswewew">Know More..</a>
 
 <div class="modal fade" id="qweswewew" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Plastic/Cosmetic Surgery</h4>
      </div>
      <div class="modal-body trea_phai">
        <p>Life Support partnered Hospitals/clinics in India are internationally JCI-accredited, with a team of dedicated plastic surgeons who have received the highest standard of training in plastic, cosmetic and reconstructive surgery.</p>
      <p>Our plastic surgeons are not just cosmetic surgeons, they are specialists. USA and/or European-trained professionals, our surgeons have many years of experience in dealing with complex surgical procedures, options and recovery.<br>
With us, you can be assured that you are receiving world-class care from highly trained, renowned specialists, with the added benefit of avoiding lengthy waiting lists and expensive surgery in your home country. </p>
      
   
      
      <h1>Our Services  </h1>
     
     <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Breast Augmentation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Facelift Surgery &Tummy Tuck<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Rhinoplasty<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Liposuction<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>    Eyelid Surgery</p>
 
    <h1>Our Experts in Cosmetology &Plastic Surgery </h1> 
    
     <p><strong>(a)</strong>. Dr. Shahin Nooreyezdan<br>
 <strong>(b)</strong>  Dr. Kuldeep Singh<br>
 <strong>(c)</strong> Dr. IP Singh<br>
 <strong>(d)</strong>. Dr. Rakesh K. Khazanchi</p>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 </div>
 
<div class="col-sm-3 center_content_trea wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
  <img src="images/New folder/t16.png" class="img-responsive center-block">
  <h3>Neurological Services </h3>
 <p style=" height:185px !important;">Neurological surgeries are performed in India at an affordable cost in our partner hospitals by highly qualified neurosurgeons. Our hospitals are equipped with most advance technology, most advanced neurosurgical Operation Theatre, Zeiss Pentero Microscope and Neurophysiology Laboratory.</p>
 <a href="#" title="Know More" data-toggle="modal" data-target="#yuijhgyui">Know More..</a>
 
 <div class="modal fade" id="yuijhgyui" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="" style="color:#000;">Neuro Surgery and neurological Services</h4>
      </div>
      <div class="modal-body trea_phai">
        <p>Neurological surgeries are performed in India at an affordable cost in our partner hospitals by highly qualified neurosurgeons. Our hospitals are equipped with most advance technology, most advanced neurosurgical Operation Theatre, Zeiss Pentero Microscope and Neurophysiology Laboratory.</p>
      <p>Neuro-surgery is a discipline of medicine and that specialty of surgery which provides the operative and non-operative management of disorders of centrals and nervous system, including their supporting structures and vascular-supply.</p>
      <h1>Our Services in neurology </h1>
   <p>Life Support provides highest level of professional expertise and leadership in all major disciplines of neurosciences, neurology, interventional neurology and neuro-surgery.  </p>
      
      <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Cyber Knife<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Brain Tumor <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Stroke<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Hemorrhage<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Spinal Disc Herniation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Trauma</p>

      <h1>Our Neuro Experts Team</h1>
     
    
    
     <p><strong>(a)</strong>  Dr. Ajaya Nand Jha, Dr. Swati Chinchure, Dr. Rajneesh Kachhara Medanta Hospital, Delhi<br>
 <strong>(b)</strong>  Dr.J.D.Mukherjee – Max Healthcare, New Delhi <br>
 <strong>(c)</strong> Dr.Amit shrivastava - Paras Hospital, Near New Delhi <br>
 <strong>(d)</strong> Dr. Arun Saroha – Artemis Health Science, near New Delhi.</p>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
 </div>
 
 
 
 
 
 
 </div>
 </div> 
 
  </div>
  
  
<!--<div class="not-fullscreen background parallax sec_two" data-img-width="1600" data-img-height="1064" data-diff="100">
    <div class="content-a">
        <div class="content-b">
            Centered content
        </div>
    </div>
</div>-->
  
<section class="fullscreen background parallax sec_two our_partner" id="our_hospita"  data-img-width="1600" data-img-height="1064" data-diff="100" style="background-attachment: fixed; background-size: 1112.78px 740px; background-position: 50% -124.167px;">
    <div class="content-a">
        <div class="content_our_partner">
           <h3>Our Partners</h3>
           <p>We, LSupport are associated with hospitals/Clinics/IVF centres having world class

facilities and the leader in providing cost effective medical care to patents across the<br>

globe. All our hospitals are accredited by the Indian government and by International

Accrediting Bodies, and have gone through the standards for affiliation set by us.<br>

Our partner hospitals are ISO-9000- 200, NABH and JCI accredited.</p>
 
 <div class="main">
      
        <ul class="ch-grid container">
          <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-1">
              <div class="ch-info">
                <h3 style=" text-transform:uppercase;">Indraprastha Apollo Hospitals</h3>
                <p><a href="#" data-toggle="modal" data-target="#indr_aprastha">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="indr_aprastha" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000; text-transform:uppercase;">Indraprastha Apollo Hospitals, Delhi</h4>
      </div>
      <div class="modal-body trea_hahah">
      <h1><img src="images/h-1.jpg" class="img-responsive center-block"></h1>
      
      <p>
      Indraprastha Apollo Hospitals, India’s first Joint Commission International (JCI) accredited hospital, and the third super-specialty tertiary care hospital set up by the Apollo Hospitals Group. It has round-the-clock pharmacy, National Accreditation Board for Testing and Calibration Laboratories (NABL) accredited laboratories, 24-hour emergency services and an active air ambulance service. Apollo Hospitals Delhi has the leading programme in kidney and liver transplant in the country. The first successful pediatrics and adult liver transplants in India were performed at Indraprastha Apollo Hospitals. The hospital is at the forefront of medical technology and expertise. It provides a complete range of latest diagnostic, medical and surgical facilities for the care of its patients. The Hospital has been consistently <strong>ranked amongst the best 10 hospitals in India by The Week survey</strong> for the past few years. Right from the infrastructure to the latest medical technology acquisition Indraprastha Apollo Hospitals has always kept its Patients First and strived to deliver not World Class but World’s Best Care to its Patients since its inception in 1996. Apollo Hospitals has received many awards and accolades in recognition of their pioneering achievements in Indian healthcare. 
      </p>
      
      
      <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of Hospital Beds: 718 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of ICU Beds: 162 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of Operating Rooms: 20 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Avg. International Patients: 30000 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Specialties & Treatment <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Heart Institutes, Institutes of Transplant, Infertility Care, Apollo Cosmetic Clinic<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institutes of Bariatric, Apollo Health Check<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institutes of Cancer, Institutes of Robotic Surgery <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institutes of Emergency, Dietetics & Clinical Nutrition, Apollo Sugar, Laboratory Services<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institutes of Nephrology, Hyperbaric Oxygen Therapy<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institutes of Neurosciences<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institutes of Orthopaedics, Pain Clinic<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institutes of Respiratory, Critical Care & Sleep Medicine<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Physiotherapy & Rehabilitation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Transfusion Medicine<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institutes of Spine
</p>
    
    <h1>Cutting-Edge Medical Technology</h1>
    
    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  PET SUITE <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Da Vinci Robotics Surgery System <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  NovalisTx <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  High Dose Rate (HDR) Brachytherapy <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  64-slice Scan <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  3.0 Tesla MRI <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Spect-CT & Pet-CT - first installation in South Asia</p>
      
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
          <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-2">
              <div class="ch-info">
                <h3 style=" text-transform:uppercase;">Medanta</h3>
                <p><a href="#" data-toggle="modal" data-target="#me_danta">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="me_danta" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000; text-transform:uppercase;">MEDANTA - THE MEDICITY, GURGAON</h4>
      </div>
      <div class="modal-body trea_hahah">
       <h1><img src="images/h-2.jpg" class="img-responsive center-block"></h1>
       
       <p>Medanta - The Medicity is specially geared to welcome international patients. It offers the high-est standards in cutting - edge technology led by a dedicated team of doctors drawn from all over the world. Medanta ensure a completely sanitized environment and personalized care. Its institute has brought together an outstanding pool of doctors, scientists and clinical researchers to collaborate in multidisciplinary investigation, inspiring new ideas and discoveries. This translates to scientific advances that create new, faster methods of diagnosis and treatment. </p>
       
       <h1>Medanta- the Medicity includes</h1>
       
       <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Heart Institute<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institute of Neurosciences<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Bone & Joint Institute<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Kidney & Urology Institute<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cancer Institute<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institute of Digestive & Hepatobiliary Sciences<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institute of Minimally Invasive Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institute of Critical Care & Anesthesiology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institute of Transplant & Regenerative Medicine</p>

<h1>Medanta is equipped with latest world class technologies like-</h1>

<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Da Vinci Robot for Minimal Invasive Surgery <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cyberknife Robotic Radiosurgery System<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artis Zeego Endovascular Cath Lab<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  256 Slice CT <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Brain Suite, Intra-Operative Imaging Operating Theater <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  4 Linear Accelerators (provision for IGRT/ IMRT) (radiation surgery) <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Tomotherapy <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Integrated Brachytherapy Unit with remote controlled HDR <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  3.0 Tesla MRI, PET CT, Gamma Camera, Digital X-Ray, Fluoroscopy, Bone <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Densitometry <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  3D and 4D Ultra Sound &Digital Mammography</p>
<h1>Some features of Medanta – the Medicity</h1>
      <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Medanta-The Medicity spread across 43 acres has 45 operating theatres, 1250 beds and over 350 critical care beds<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Medanta offers the widest spectrum of clinical care, education and research<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Medanta is led and managed by world renowned doctors committed to care with compassion<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Medanta offers cutting edge technology and state-of the- art treatment facilities designed to deliver healthcare at an affordable cost<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Medanta is driven by patient needs, comfort and trust</p> 

<h1>SPECIAL ARRANGEMENT </h1>
<p><strong>Flying Doctors India</strong></p>

<p>In June 2013, Medanta launched India's first state-of-the-art Air Ambulance, Flying Doctors India. Flying Doctors employs "PILATUS PC-12" aircraft as dedicated air ambulances that can transfer any patient, anytime, anywhere from India and abroad with a goal to provide critical care at the time of transit.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
                    
          <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-3">
              <div class="ch-info">
                <h3 style=" text-transform:uppercase;">Fortis Memorial Research Institute</h3>
                <p><a href="#" data-toggle="modal" data-target="#fo_morial">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="fo_morial" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000; text-transform:uppercase;">FORTIS MEMORIAL RESEARCH INSTITUTE, GURGAON</h4>
      </div>
      <div class="modal-body trea_hahah">
        
        <h1><img src="images/h-3.jpg" class="img-responsive center-block"></h1>
        
        <p>Fortis Memorial Research Institute (FMRI) is a multi-super-speciality, quaternary care hospital with an enviable international faculty, reputed clinicians, including super-sub-specialists and speciality nurses, supported by cutting–edge technology. A premium referral hospital, it endeavours to be the ‘<strong>Mecca of Healthcare</strong>’ for Asia Pacific and beyond. Set on a spacious 11-acre campus with 1000 beds, this ‘<strong>Next Generation Hospital</strong>’ is built on the foundation of ‘Trust’ and rests on four strong pillars: Talent, Technology, Service and Infrastructure.</p>
        <h1>Comprehensive Medical Services</h1>
        
        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Clinical Nutrition, Cosmetic, Reconstructive and Plastic Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Critical Care Medicine, Dentistry, Dermatology, Diabetes, Endocrinology and Metabolic Disorders<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Gastroenterology, GI Surgery, and Hepatology, <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  General Surgery, Internal Medicine, Immunology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Infertility, Obstetrics and Gynaecology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Laboratory Medicine and Pathology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Minimal Access Centre of Excellence<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Mental Health and Behaviour Sciences<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Neonatology, Nephrology, Neurosurgery, Rheumatology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Ophthalmology, Urology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Organ Transplant Programme<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Orthopaedics and Joint Replacement<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Otorhinolaryngology (Ear, Nose and Throat)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Paediatric Medicine and Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Pain Medicine, Physiotherapy, Preventive Health<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Radiation Oncology, Radiology (inclusive of invasive radiology), Nuclear Medicine,<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Sports Medicine, Rehabilitation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Robotic Surgery Programme<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Stem Cell Programme<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Transfusion Medicine, Trauma and Emergency medicine
</p>

<p>Fortis Memorial Research Institute is equipped with a complete spectrum of diagnostic and therapeutic technology, including several state-of the-art technologies that are among the first in India, in Asia and the world.</p>
 
 <p>
 
 <strong>Radiation Therapy:</strong> A global first-collaboration between leading technology innovators, Brain Lab and Elekta.<br>
<strong>3- Tesla Digital MRI</strong> -The World's first digital broadband MRI.<br>
<strong>Stem Cell</strong> - India's first stem cell lab in a hospital in collaboration with Totepotent Rx a, US based Cell Therapy Company.<br>
<strong>Open Lab</strong> - India's first ever 'see-through' glass lab, with instant collection and real time processing of blood - samples.<br>
<strong>e- ICU-</strong> An advanced patient management system with two - way audio visual communication. It allows clinicians to access patient 24x7. The first of its kind in the world.<br>
<strong>256 Slice CT</strong> - A state of the art 256 Slice Brilliance iCT Scanner with the ability to capture an image of the entire heart in just two heart beats.<br>
<strong>Bi- Plane Cath Lab</strong> - State-of-the-art cardiac cath lab to address cardiac and vascular interventions<br>
<strong>Brain Suite</strong> - One of its kind CT based Brain Suite, equipped with intra operative CT for brain and spine.<br>
<strong>Time of flight PET CT</strong> - An installation with Time of flight (TOF) reconstruction for exceptional image quality. It has the ability to detect lesions as small as 0.1 inches.<br>
<strong>Voice Modulated & Integrated Operating rooms</strong> - Two modular operating rooms integrated with equipment and controlled by a common control panel.<br>
 
 </p>
 
 
        
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
                    
                   <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-4">
              <div class="ch-info">
                <h3 style=" text-transform:uppercase;">Fortis Escorts Heart Institute</h3>
                <p><a href="#" data-toggle="modal" data-target="#fortis_escorts">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="fortis_escorts" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000; text-transform:uppercase;">FORTIS ESCORTS HEART INSTITUTE, Delhi </h4>
      </div>
      <div class="modal-body trea_hahah">
       <h1><img src="images/h-4.jpg" class="img-responsive center-block"></h1>
       <p>Fortis Escorts Heart Institute, where medical treatment is truly world class and the approach towards our patients is warm and sensitive. Fortis Escorts Heart Institute has set benchmarks in cardiac care with its path breaking work over the past 25 years. Today, it is recognised world over as a centre of excellence providing the latest technology in Cardiac Bypass Surgery, Interventional Cardiology, Non-invasive Cardiology, Pediatric Cardiology and Pediatric Cardiac Surgery. The hospital is backed by the most advanced laboratories performing complete range of investigative tests in the field of Nuclear Medicine, Radiology, Biochemistry, Haematology, Transfusion Medicine and Microbiology.</p>
       <p>It has done <strong>156000-Angiographies,44000-PTCA and 90000 Cardiac Surgical</strong> Procedures in past 25 years.</p>
       <p>At FEHI, an extensive framework of specialised medical programmes focus on providing clinical excellence integrated with cutting-edge technologies and innovations to offer world-class treatment. Currently, more than <strong>200 cardiac doctors and 1600 employees work together to manage over 14,500 admissions and 7,200 emergency</strong> cases in a year. </p>
       <p>Currently, the fortis operates its healthcare delivery services in <strong>India, Singapore, Dubai, Mauritius and Sri Lanka</strong>. 
Fortis Healthcare is driven by the vision of becoming a global leader in the integrated healthcare delivery space and the larger purpose of saving and enriching lives through clinical excellence. </p>
    <h1>Fortis Healthcare is equipped with </h1>   
       <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  310 Beds (159 critical care beds)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  9 state of art Operation Theatres<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  5 Cath labs<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  3 Heart Command Centers<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  2 Heart Stations</p>

<h1>Fortis specialized centers</h1>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Cancer Centre <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Heart Centre <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Neurosciences Centre<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Joint Replacement & Orthopedics Centre <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Minimally Invasive & Bariatric Surgery Centre <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Renal and Transplant Centre <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Birthing Centre Artemis Fertility Centre <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Critical Care & Pulmonology Centre <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Gastrosciences Centre <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fortis Liver Transplant Centre </p>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
                    
                    <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-5">
              <div class="ch-info">
                <h3 style=" text-transform:uppercase;">Max Super Speciality Hospitals.</h3>
                <p><a href="#" data-toggle="modal" data-target="#Max_uper">Know More</a></p>
              </div>
                            <div class="modal fade" id="Max_uper" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000; text-transform:uppercase;">MAX SUPER SPECIALITY HOSPITALS, Delhi </h4>
      </div>
      <div class="modal-body trea_hahah">
       
       <h1><img src="images/h-5.jpg" class="img-responsive center-block"></h1>
       <p>Designed by internationally renowned architect Mr. Richard Wood and constructed in accordance with globally-accepted standards for hospitals, quality is its top priority. Located in the heart of South Delhi, Max Super Speciality Hospital is one of the premier names in health care domain in the world.</p>
     
     <p>Max Healthcare is India’s leading provider of comprehensive, seamless and integrated world-class healthcare services. It is primarily focused on the Capital & National Capital Region (NCR) and North India. </p>
     <p>Max Hospital is delivering quality healthcare services through its 12 facilities <strong>(10 Hospitals & 2 Medcentres)</strong>. </p>
     <h1>Max Hospital-----</h1>
     
     <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of Hospital Beds : 1900  <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of Operating Rooms : 18 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Avg. International Patients : 55000<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  <strong>Over 16,000,000 patients over 80 Nationalities</strong> treated so for.</p>
     
     <h1>Max Hospitals-Specialties</h1>
     <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cardiology and Cardiac Surgery, Neurosciences<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Orthopedics & Joint Replacement Surgeries<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cancer Care& Spinal Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Minimal Access Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Metabolic & Bariatric Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Aesthetic & Reconstructive Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Urology & Renal Transplant <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cochlear transplant, ENT<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Pediatrics<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Obstetrics & Gynaecology including IVF<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Critical Care & Rehabilitation services and all support specialties</p>
  
  <h1>Max Healthcare is equipped with the following facilities- </h1>
  
  <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  State of the Art Operation Theatres<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  2000 surgeries & procedures performed everyday<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  9000 support staff for personalized care<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  The Brain SUITE & Novalis Tx, 4 D ECHO, LINAC, 3.5 T-MRI Unit etc.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cardiac Life Support, Pacemaker Clinic, Multiple Sclerosis (M.S.) Clinic, Women's Heart Clinic, Geriatric Neurology Clinic and Movement Disorder Clinic etc.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Minimally Invasive Laparoscopic Surgery: Utilization of minimally invasive techniques (Key-Hole Surgery), so that patients reap the benefits of faster recovery, lesser post-operative pain and minimal post-surgical complications.</p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
          </li></div>
                    
                    
                    <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-6">
              <div class="ch-info">
                <h3 style="text-transform:uppercase;">Primus Super Speciality Hospital</h3>
                <p><a href="#" data-toggle="modal" data-target="#Speciality_ospital">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="Speciality_ospital" tabindex="-1" role="dialog" aria-labelledby="mumma_mafortisLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;text-transform:uppercase;">Primus Super Speciality Hospital, New Delhi</h4>
      </div>
      <div class="modal-body trea_hahah">
       <h1><img src="images/h-6.jpg" class="img-responsive"></h1>
       
       <p>Primus Super Speciality Hospital is an ISO 9001:2000 Certified, state of the art multi-specialty hospital conveniently located in the heart of India’s capital, New Delhi. It has been designed and constructed using the most advanced medical technology, available in the world. The hospital is located in serene diplomatic area of Chanakyapuri. With prominent surgeons from across the globe, excellent infrastructure and state of art advanced technology. Primus Super Speciality Hospital has set new benchmarks in Medical care. Primus strived to become the best place for treatment for all medical problems. Primus team continuously worked to improve the quality of care, improve systems, and improve the service provided. The outstanding staffs at primus hospital have been and continue to be the hall mark for this organization. It stands by the motto of health to all and is committed towards every social cause and upliftment of India and the world as a whole. Primus Hospital has its <strong>major campuses in India, Nigeria, Benin Republics</strong>. The Hospital also runs dozens of satellite clinics all over the world the world.</p>
       <h1>Premus at a glance- </h1>
       <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of Hospital Beds : 130 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of ICU Beds : 18 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of Operating Rooms : 5 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Payment Mode : card, cash, wire <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Avg. International Patients : 700 </p>
    <h1>Specialties in Primus Super Speciality Hospital</h1> 
    
    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Spine Centre & Orthopaedic Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Minimal Access Surgery Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Neurology And Neurosurgery Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Digestive & Hepatobiliary Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Institute of Reproductive Medicine & IVF Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Urology Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Diabetes, Obesity And Endocrine Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Cosmetic Surgery Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus ENT & Cochlear Implant Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Oncology Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Department of Dental Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Physiotherapy and Rehabilitation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Primus Eye Care Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Cutting-edge technologies at Primus Super Speciality Hospital <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Modular seamless operation theaters with laminar air flow and laminar shields<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Image Guided Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Digital X Ray<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  64 Slice cardiac CT<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  1.5 Tesla MRI<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Bone Densitometry<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Blood Bank<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Bone Bank<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  ICU/CCU backup<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  24 hours Ambulance & Emergency Services.<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  24 hours Pharmacy<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cafeteria 24 Hours</p>
      
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
                    
                    <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-7">
              <div class="ch-info">
                <h3 style="text-transform:uppercase;">  BLK SUPER SPECIALITY HOSPITAL, DELHI </h3>
                <p><a href="#" data-toggle="modal" data-target="#jaypee_hospital">Know More</a></p>
              </div>
                            <div class="modal fade" id="jaypee_hospital" tabindex="-1" role="dialog" aria-labelledby="jaypee_hospitalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;text-transform:uppercase;">  BLK SUPER SPECIALITY HOSPITAL, DELHI </h4>
      </div>
      <div class="modal-body trea_hahah">
      
      <h1><img src="images/h-7.jpg" class="img-responsive center-block"></h1>
      <p>
      BLK Super Specialty Hospital is one of the largest tertiary care private hospitals in the country. Spread over five acres of land, the 650 beds Hospital is being managed by Radiant Life Care Private Limited which aims at facilitating the ongoing pursuit of excellence at the Hospital by assisting and bringing-in not only the best clinical and non-clinical talent but also the ultra-modern equipment and technology enabling delivery of the highest standards of healthcare in India.
      </p>
      <p>
      The hospital has pushed its frontiers of care through excellence in clinical care, research and education as well.  The hospital is managing its outpatient services, spread on two floors with 60 consultation rooms. It has <strong>17 state-of-the-art well equipped modular operation theatres</strong>. 
</p>
<p>The Hospital has <strong>Asia’s largest bone Marrow Transplant Center</strong> and it is <strong>the first hospital in North India to bring in the combined advantage of PET CT and Cyberknife</strong> together. The hospital <strong>recently bagged the best multispecialty hospital and healthcare excellence award in Oncology and Hematology at the Indo Global Healthcare Awards 2014 as well as the Lumen Global Excellence Award for Best Management of Acute Heart Attack (2013) by Lumen Global foundation,USA.</strong></p>

<p>The hospital has also been awarded the Prestigious Gold Award at Hospital Management Asia (HMA), Bangkok (2013) and HMA Awards 2014.</p>

<h1>BLK Super Specialty Hospital at a glance-</h1>

<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of Hospital Beds : 650<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of ICU Beds : 125 <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  No. of Operating Rooms : 17<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Avg. International Patients : 8000 </p>
<h1>State-Of-The-Art-Equipment: </h1>

<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Cyberknife VSI<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  PET CT Scan<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Neuro​ Vascular Biplane Cath Lab<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  A TriologyTx Linear Accelerator with cone beam CT for Radiation Oncology<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  MRI, CT scan, Cath Lab, Ultrasound, Mammography and X- Ray. <br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Nuclear medicine<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Blood Bank& Laboratories<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Bone Mineral Density& Dental Facilities<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Endoscopy Suites<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Ambulance Services<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Bronchoscopy Suite</p>

<h1>BLK Centres of Excellence-Specialties </h1>

<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Heart Centre<br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Cancer Centre <br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Centre for Bone Marrow Transplant<br>  
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Centre for Neurosciences   <br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Centre for Digestive & Liver Diseases<br>    
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Centre for Renal Sciences & Kidney Transplant <br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Centre for Orthopaedics, Joint Reconstruction & Spine Surgery <br>   
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Centre for Plastic & Cosmetic Surgery <br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Children Heart Institute   <br> 
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  BLK Centre for Critical Care </p>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
          </li></div>
                    
                    <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-8">
              <div class="ch-info">
                <h3 style="text-transform:uppercase;">JAYPEE HOSPITAL,   Noida (Delhi NCR)</h3>
                <p><a href="#" data-toggle="modal" data-target="#max_healthcare">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="max_healthcare" tabindex="-1" role="dialog" aria-labelledby="max_healthcareLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;text-transform:uppercase;">JAYPEE HOSPITAL,   Noida (Delhi NCR)</h4>
      </div>
      <div class="modal-body trea_hahah">
      <h1><img src="images/h-8.png" class="img-responsive center-block"></h1>
      <p>Jaypee Hospital at Noida (Delhi NCR) is the flagship hospital of the Jaypee Group, which heralds the group’s noble intention to enter the healthcare space. This hospital has been planned and designed as a 1200 bedded tertiary care multi-speciality facility and has commissioned 525 beds in the first phase. The Jaypee Hospital is constructed across a sprawling twenty-five acre campus in Sector 128, Noida which is easily accessible from Delhi, Noida and the Yamuna Expressway. It offers unmatched amenities & facilities to all its patients.  Clinicians and support staff are committed to deliver services of world-class standards making Jaypee Hospital the preferred choice for all kinds of medical care.</p>
      <p>It offer the highest standards of healthcare services through state of the art infrastructure amalgamated with latest technology available across the globe along with a highly skilled and experienced team of doctors. It follows stringent infection control practices and clinical pathways to ensure best possible outcomes. <strong>It is Jaypee Hospital endeavor to comply and deliver services as per the JCI, NABH and NABL quality standards.</strong></p>
      <h1>Jaypee Hospital- Facilities </h1>
      
      <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  525 beds in first phase<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  150 Critical Care beds<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  24 bedded Advanced Neonatal ICU<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  20 bedded Dialysis Unit<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  325 ward beds with Suite, Deluxe, Twin Sharing and Economy options<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  18 Modular OTs<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  4 Cardiac Catheterization Lab with Hybrid Operating Room<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  2 Linear Accelerator (IMRT, IGRT and VMAT), 1 Brachytherapy Suite, Wide Bore CT Simulator<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  2 MRI (3.0 Tesla) with High Intensity Focused Ultrasound<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  256 Slice CT Scan, CT Simulation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  64 Slice PET CT, Dual Head 6 Slice SPECT CT, Gamma Camera<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Da Vinci Robotic Surgery for comprehensive robotic surgical solutions</p>
      
  <h1>Jaypee Hospital-Specialties </h1>  
  <p>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Aesthetics & Cosmetic Sciences, Anaesthesia & Pain Management and  Behavioural Sciences<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Bones & Joints and Institute of Neurosciences Cancer Institute<br>
 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Chest Surgery, Dental Care, Diabetes & Endocrinology, and Ear, Nose & Throat<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Emergency & Trauma, GI and Hepatopancreaticobiliary Sciences<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Institute of Heart, Interventional Radiology and  Internal Medicine<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Kidney Diseases, Kidney Transplant, and Laboratory Medicine<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Liver Transplant and Minimal Access Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Mother & Child, Nuclear Medicine, Ophthalmology, Plastic & Reconstructive Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Pulmonary, Critical Care & Sleep Medicine, Physical Medicine & Rehabilitation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Radiology & Imaging, Rheumatology Department<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Spine, Transfusion Medicine (Blood Bank)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Vascular & Endovascular Surgery<br>
  </p>
    
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
               
               <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-9">
              <div class="ch-info">
                <h3 style="text-transform:uppercase;">ARTEMIS HOSPITAL, Gurgaon</h3>
                <p><a href="#" data-toggle="modal" data-target="#Primus">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="Primus" tabindex="-1" role="dialog" aria-labelledby="Primus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;text-transform:uppercase;">ARTEMIS HOSPITAL, Gurgaon</h4>
      </div>
      <div class="modal-body trea_hahah">
       <h1><img src="images/h-9.jpg" class="img-responsive center-block"></h1>
       
       <p>Artemis Hospital, established in 2007, spread across 9 acres, is a 380 bed; state-of-the-art multi-speciality hospital located in Gurgaon, India. Artemis Hospital is the first JCI and NABH accredited hospital in Gurgaon. <br><br>
Designed as one of the most advanced in India, Artemis provides a depth of expertise in the spectrum of advanced medical & surgical interventions, comprehensive mix of inpatient and outpatient services. The medical practices and procedures followed in the hospital are research oriented and benchmarked against the best in the world. Top-notch services, in a warm, open centric environment, clubbed with affordability, have made us one of the most revered hospitals in the country.</p>
       <h1>Centres of Excellence-Specialties </h1>
       
       <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Emergency & Trauma Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Heart Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Cancer Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Neurosciences Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Joint Replacement & Orthopaedics Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Minimally Invasive & Bariatric Surgery Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Transplant Centre (Liver, Kidney, Cornea & Bone Marrow Transplant)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Woman & Child Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Critical Care & Pulmonology Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Gastrosciences Centre<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Artemis Cosmetology & Plastic Surgery Centre</p>

<h1>AHI's technological infrastructure boasts of state-of-the art medical equipment such as:</h1>
  <p><strong>Imaging</strong>
  <br><br>
  <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  3 Tesla MRI from Philips medical System<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  64 Slice Cardiac CT Scan from Philips Medical System<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  16 slice PET CT from Philips medical System<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Dual head Gamma Camera from Philips Medical System<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Mammography from Siemens medical System<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Fan beam BMD from GE Medical System<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  High-end Colour Doppler Ultrasound Systems<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Functional MRI Scanning using Non-Contrast Imaging for Cancers (DWIBS)<br><br>
<strong>Radiation therapy</strong><br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Image Guided Radiation Therapy (IGRT) LINAC from Elekta<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  HDR Brachytherapy from Nucletron and 16 slice PET CT from Philips medical System<br><br>
<strong>Cardiovascular surgery</strong><br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Endovascular Hybrid Operating Suite<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Flat Panel Cath Labs with stent boost technology<br><br>
<strong>Artemis Is Recipient of Awards-</strong><br><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Most Promising Start-Up of the Year 2007 award – Express Healthcare magazine<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Best IT Implementation for the Year 2008 – PC Quest magazine for Hospital Information System<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Best institute for Medical Value Year 2010 – The CNBC Awaaz travel awards<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Asia Pacific Hand hygiene excellence Award Year 2011 – World Health Organisation (WHO)<br> 
  </p>     
      </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
                    
                    <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-10">
              <div class="ch-info">
                <h3 style="text-transform:uppercase;">RAJIV GANDHI CANCER INSTITUTE & RESEARCH CENTRE, Delhi </h3>
                <p><a href="#" data-toggle="modal" data-target="#Medanta">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="Medanta" tabindex="-1" role="dialog" aria-labelledby="Medanta">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;text-transform:uppercase;">RAJIV GANDHI CANCER INSTITUTE & RESEARCH CENTRE, Delhi </h4>
      </div>
      <div class="modal-body trea_hahah">
        <img src="images/h-10.jpg" width="380" height="309"> 
        
        <p>Rajiv Gandhi Cancer Institute & Research Centre is today counted amongst Asia’s premier exclusive cancer centres/oncology center, that offers the unique advantage of cutting-edge technology, put to use by renowned super specialists. This potent combination of man and machine ensures world-class cancer care to not only patients from India, but also from the neighboring SAARC countries and others. They have taken care of over 1.95 Lakh patients since inception in 1996. The Institute has been accredited by <strong>NABH and NABL for its quality of services, and holds ISO 9001 and ISO 14001 certifications.</strong> </p>
        
        <p>The Institute offers super specialized tertiary care services in Medical, Surgical and Radiation Oncology, streamlined into dedicated Site-Specific teams. Super Specialists at RGCIRC practice an organ specific multi-disciplinary approach to cancer diagnosis and treatment, with the Tumor Board acting as a second opinion clinic for cases that are more critical than others.</p>
        
        <p>Spread over nearly 2 lakh square feet area, with a current capacity of 300 beds, RGCIRC is one of the largest tertiary cancer care centres in the continent. The Institute’s outpatient services are spread on three floors with 57 consultation rooms, and well-designed Radiation Therapy areas. RGCIRC has 9 state-of-the-art well equipped modular Operation Theatres with three stage air filtration and gas scavenging systems, and 2 Minor Operation Theatres for Day Care Surgeries. The Institute has 27 bedded Surgical ICU and an 11 bedded Medical ICU. RGCIRC has a dedicated Leukemia ward, and a separate Thyroid Ward. The Institute also boasts of an independent Bone Marrow Transplant unit that is credited with pioneering unrelated donor transplants, MUD transplants, and stem cell transplants. </p>
        
        <h1>Rajiv Gandhi Cancer Institute & Research Centre-Specialties </h1>
        
        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Surgical Oncology & Reconstructive Services <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Head & Neck Services<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Breast & Thoracic Services<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Orthopedic Oncology Services<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Uro and Gynae Oncology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  GI Onco-surgery & Liver Transplant<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Neuro Surgical Oncology Services<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  True Beam Delhi<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Radiation Oncology & Medical Oncology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Pediatric Hematology Oncology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Bone Marrow Transplantation<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Anaesthesiology and Pain Management<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Intensive Care Unit (ICU)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Multispeciality Clinic / Tumor Board</p>

<h1>RGCIRC is equipped with the world class techniques---</h1>

<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Whole-body robotic surgery, Intra-Operative Brachytherapy<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  True Beam (the next generation Image Guided Radiation Therapy)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  PET-MRI fusion, High Frequency Ultrasound <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Tomosynthesis (first-of-its-kind revolutionary 3D mammography machine),<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Nucleic Acid Testing (for safest possible blood)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Advanced diagnostic & imaging techniques, including PET CT, Circulating Tumor Cell testing, and Next Generation Sequencing.<br></p>
    
    <p>RGCIRC has executed <strong>strategic alliances with internationally renowned institutes such as Thomas Jefferson University.</strong> This has catapulted RGCIRC into a global league of select hospitals that are pioneers in new approaches to treating cancer.</p>
      <p>RGCIRC has been <strong>ranked amongst 10 Best Oncology Hospitals of India (Week – Nielsen Survey 2014)</strong> and won the prestigious award for Best <strong>Oncology Hospital in India</strong> at Healthcare Achievers’ Awards 2014.</p>  
        </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
                    
                    <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms"><li>
            <div class="ch-item ch-img-11">
              <div class="ch-info">
                <h3 style="text-transform:uppercase;"> INDIAN SPINAL INJURIES CENTRE, Delhi </h3>
                <p><a href="#" data-toggle="modal" data-target="#Apollo">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="Apollo" tabindex="-1" role="dialog" aria-labelledby="Apollo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;text-transform:uppercase;"> INDIAN SPINAL INJURIES CENTRE, Delhi </h4>
      </div>
      <div class="modal-body trea_hahah">
       <h1><img src="images/h-11.jpg" class="img-responsive"></h1>
       
       <p>ISIC is the most advanced Spine, Orthopaedic and Neuromuscular Surgical centre in India with the latest state of the art diagnostics and surgical equipment and a highly qualified team of specialists recognized internationally who have been trained in leading institutes of India and abroad.</p>
       
       <p>Indian Spinal Injuries Centre provides state of the art facilities for the management of all types of spinal ailments. It has a team of dedicated, internationally trained & acclaimed spine surgeons providing cutting edge medical & surgical technology. Motion preserving spine surgeries including disc replacement & dynamic fixation, minimally invasive spine surgery including endoscopic disc excision, minimally invasive pedicle screw fixation & decompression, percutaneous kyphoplasty, thoracoscopic / laparoscopic fusion & advanced pain & spasticity management techniques like intrathecal  baclofen pump implantation are some of the cutting edge surgical technologies practiced at the centre.<br><br>

The orthopaedic service covers all orthopaedic ailments including trauma, joint diseases & replacements, oncology, paediatric orthopaedics & upper limb ailments. <br><br>

In addition the hospital hopes to consolidate on provision of super speciality service in the field of Spine Surgery, Orthopaedics, Rheumatology, Neurology, Rehabilitation, Urology, and Plastic Surgery.</p>
       
       <h1>Facilities available at Indian spinal injuries center</h1>
       
       <p><strong>1. Spinal Disorders & Surgery </strong><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Back Pain, Degenerative Spine, Deformity, Infections Minimally Invasive Spine Surgery<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Osteoporosis, Spinal Tumor, Spinal Trauma<br>
<strong>2. Orthopedics </strong><br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Joint Replacement & Arthroscopy, Knee Clinic, Hip Clinic<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Sports Medicine, Shoulder & Hand, Pediatric Orthopedic, Orthopedic Oncology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Orthopedic Trauma<br>
<strong>3. Alternative Medicine</strong> <br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Aroma Therapy, Acupressure, Homoeopathy, Meditation, Naturopathy, Reflexology, Yoga</p>
       
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
                    
                    <div class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <li>
            <div class="ch-item ch-img-12">
              <div class="ch-info">
                <h3 style="text-transform:uppercase;">FORTIS LA FEMME, (Centre for Women), New Delhi </h3>
                <p><a href="#" data-toggle="modal" data-target="#Indians_pinal">Know More</a></p>
              </div>
                            
                            <div class="modal fade" id="Indians_pinal" tabindex="-1" role="dialog" aria-labelledby="Indians_pinal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;text-transform:uppercase;">FORTIS LA FEMME, (Centre for Women), New Delhi </h4>
      </div>
      <div class="modal-body trea_hahah">
       <h1><img src="images/h-12.jpg" class="img-responsive"></h1>
       <p>Fortis La Femme (Centre for Women), a unique facility, is inspired by the core belief that a woman is a very special person with special needs. Medical care at the hospital spans but is not limited to Obstetrics (Painless Labour), Gynaecology, Neonatology (Level III NICU), Anaesthesia, General & Laparoscopic Surgery, Cosmetic Surgeries and Genetic & Foetal Medicine.</p>
       
       <p>The hospital facilitates care for the entire stages of woman’s lifespan-birth, adolescence, motherhood, menopause and beyond. Its patient-sensitive services are provided in a world-class facility with a discreetly elegant ambience laden with value-added conveniences.
Impressed with the dedication to quality care services, the hospital was chosen as the <strong>Winner of Child magazine’s ‘Most Popular Awards’ 2013 under the category of ‘Most Popular Maternity Hospitals’</strong>. The hospital commenced operations in August 2004, and since then, has performed more than 11,000 Deliveries and over 7,500 gynaecological procedures.</p>
       <p>The hospital has air lifted sick babies to the Level III Neonatal Intensive Care Unit (NICU); treated more than 4,500 in the unit, and successfully saved lives of critically ill babies from 25 weeks gestation and birth weight of less than 600 grams. In the year 2010, the hospital got NABH accreditation, and was successfully re-accredited in 2013.  Currently the hospital has 38 beds with latest medical amenities.</p>
       
       <h1>Fortis La Femme’s core specialties include:</h1>
       <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  High Risk Pregnancy Care<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Advanced New-born Care (NICU)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Minimal Access General & Gynaecological Surgeries<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Fertility Clinic & IVF<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Aesthetic & Cosmetic Surgery</p>

<h1>Fortis La Femme also offer support clinical services like-</h1>

<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Genetic & Foetal Medicine<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Breast Clinic<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Pain Clinic<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Dental Clinic<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Nutrition &Dietetics Clinic<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   General Medicine<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   ENT<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Ophthalmology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Endocrinology<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Advanced Diagnostics (Ultrasound, Mammography & Bone Densitometry)<br>
<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>   Mamma Mia: Wellness, Fitness & Education for New & Expecting Mothers</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
            </div>
          </li></div>
                    
                    
                    </ul>
        
      </div>
 
        </div>
        
        
        
    </div>
</section>


<!--Become Our partner section-->
<section class="becomeour_partnr" id="become_ght_partnr">
<h1>Become Our Partner</h1>
   
   <p>The business develops on the symbiotic relationship in which each party benefits

from the action of the other. If you are interested in becoming our partners for a<br>

particular country, please write to us or fill up the form below and send it to us. We

promise to get in touch with you on priority.</p>
<div class="container">
<div class="col-sm-12">

<div class="col-sm-6 trea_hahah wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
<h1><img src="images/becomeprtner.jpg" class="img-responsive"></h1>

<h1 style="font-weight:normal;color:#fff !important; text-align:left;">Become Our Partner/Add Your Clinical - <strong>" Let's Grow together" </strong></h1>
<p style="color:#fff !important;">Patients in a lot of countries look for option of cheaper Medical Treatment and undoubtedly, India is the destination of choice.<br><br>
Humane Medical Tourism offers very good growth opportunities to the companies/ Hospitals/clinics individuals who could become our partners. We, in Humane Medical Tourism, also look for the best people available in the business and promise to extend the maximum possible support. <br><br>
The business develops on the symbiotic relationship in which each party benefits from the action of the other.<br><br>
If you are interested in becoming our partner/alliance and want to grow with us for a particular country, please write to us or fill up the form below and send it to us.<br><br>
We promise to get in touch with you on priority.</p>

</div>

<div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
<h1 style="font-weight:bold;color:#fff !important; font-size:26px; padding-bottom:12px;">Schedule an Online Consultation”</h1>

<form>
  <div class="form-group">
    <label class="sr-only">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>
  <div class="form-group">
    <label class="sr-only">Company Name</label>
    <input type="text" class="form-control" placeholder="Company Name">
  </div>
  
  <div class="form-group">
    <label class="sr-only">Designation</label>
    <input type="text" class="form-control" placeholder="Designation">
  </div>
  <div class="form-group">
    <label class="sr-only"> Email</label>
    <input type="email" class="form-control" placeholder="Email">
  </div>
  
  <div class="form-group">
    <label class="sr-only">Mobile No.</label>
    <input type="tel" class="form-control" placeholder="Mobile No.">
  </div>
  
  <div class="form-group">
    <label class="sr-only">City</label>
    <input type="text" class="form-control" placeholder="City">
  </div>
  <div class="form-group">
    <label class="sr-only">Country</label>
    <input type="text" class="form-control" placeholder="Country">
  </div>
  <div class="form-group">
    <label class="sr-only">Business</label>
    <input type="text" class="form-control" placeholder="Business">
  </div>
  <div class="form-group">
    <label class="sr-only">Remarks</label>
    <textarea name="" cols="3" rows="3" class="form-control" placeholder="Remarks"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

</div>
</div> 
 
</section>
  
 <!--Become Our partner section-->
  
<section class="contact_us" id="contact_wus">
   <h1>Contact Us</h1>
   
   <p>With LSupport, you can be assured that we will ascertain the success of your treatment<br>

so that you will have healthy beautiful life again. Make an appointment with us for a<br>

professional assessment.</p>
   
   <div class="container">
   <div class="col-sm-12">
   <div class="col-sm-6 contact_us_content wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
   <div>
   <strong>
   <address>Life Support<br>
Lovely Professional University<br>
144411 Punjab
</address>
<strong>Email: -</strong>
admin@lifesupport.com
   </div>
   
   <div class="contact_us_content">
   <div>
   <div class="form-group">
    <label class="sr-only">Your Name</label>
    <input type="name" class="form-control" placeholder="Your Name">
  </div>
  <div class="form-group">
    <label class="sr-only">Email address</label>
    <input type="email" class="form-control" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only">Subject</label>
    <input type="text" class="form-control" placeholder="Subject">
  </div>
  
  <div class="form-group">
    <label class="sr-only">Subject</label>
   <textarea name="" cols="3" rows="3" class="form-control" placeholder="Message"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
   
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</div>
   </div>
   
   </div>
   
   <div class="col-sm-6 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms" style="margin-top:30px;margin-bottom:10px;color:#000 !important;">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.9521444185075!2d75.6977615144962!3d31.249748081459902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f6f2d3af8cf%3A0xe7cab240ff7b1c25!2s922%20Boys%20Hostel%203%2C%20LPU%20Open%20Audi%20Rd%2C%20imviren_%2C%20Phagwara%2C%20Punjab%20144411!5e0!3m2!1sen!2sin!4v1571113360453!5m2!1sen!2sin" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
   
   </div><!--end col-sm-12-->
    <div class="col-sm-6 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms" style="margin-top:30px;margin-bottom:10px;color:#000 !important;">
      <p color="white"><b>Download the app</b>
        Book appointments and health checkups;
        Order medicines and consult doctors online</p>
        <img src="images/mobile.PNG" height="250" width="440">
   
   
   </div><!--end col-sm-12-->
   
   </div>
   
   
   
   </div>
   
</section><!--section contactus end here-->

<footer class="footer_us">

<div class="container sample">
<article class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<h1>Navigation</h1>
<ul>
<li><a href="#" title="Home">Home</a></li> 
<li><a href="#" title="About Us">About Us</a></li>
<li><a href="#" title="Services">Services</a></li>
<li><a href="#" title="Our Treatment">Our Treatment</a></li>
<li><a href="#" title="Our Hospitals">Our Hospitals</a></li>
<li><a href="#" title="Become Our Partner">Become Our Partner</a></li>
<li><a href="#" title="Contact">Contact</a></li>
<li><a href="#" title="Disclaimer" data-toggle="modal" data-target="#Disclaimer">Disclaimer</a>

<div class="modal fade" id="Disclaimer" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:#000;">Disclaimer - <small>" We don't claim to be the healthcare provider/hospitals"</small></h4>
      </div>
      <div class="modal-body trea_hahah">
      <h1>Disclaimer- ‘Humane Medical Tourism’ is Not a Medical Referral Service</h1>
      
      <p>We ( services providing through) is not a medical referral service. We do not endorse, recommend, or approve any healthcare provider or any third party service provider of any nature. We provide you with the best possible information so that you can begin to conduct your own research into whether or not medical tourism is appropriate for you.  You must conduct sufficient personal research on your own so that you can make your own knowing and intelligent decision regarding whether or not you should travel abroad to receive medical care.  </p>
      
      <p>In order to assist you regarding making an informed decision, any medical care provider abroad will require your medical records so that may be reviewed. We provide a forwarding service and will forward your electronic and paper medical records on your behalf to any Indian medical care providers that you have selected to review your medical history and present condition. We do not review your medical documents as we are not a health care provider, we merely forward your documents via email attachment or via fax in the same way that you would send your materials if you were doing so yourself. </p>
      
      <p>You agree to assume all responsibility regarding whatever decision you make about obtaining medical services in India and you agree to hold us harmless from any claims arising from medical treatment that you receive in Indian or consultations you receive from Indian medical care providers regardless of your location when you receive such a consultation. </p>
      
      <h1>Disclaimer- Humane Medical Tourism- A Health Care Facilitator</h1>
      
      <p>We would like to be very clear that Humane Medical Tourism is a Health Care Facilitator, and, by no means, it should be understood as Hospitals/Clinic or Healthcare Provider. Its job is to facilitate a patient from abroad to have quality treatment in India, and for that Humane Medical Tourism provides information on the best treatment and doctors available in India, as per the best of the knowledge and belief of its employees. The information provided to the patients is also dependent on the budget of the patient. </p>
      
      <p>By no means, Humane Medical Tourism Services undertakes the responsibility of any mishap/ tragedy, at a hospital, or any act of negligence on the part of the Hospital or the Doctor.</p>
      
      <p>Our scope of service is limited to facilitation of the patients and providing them with services related to it. We further reiterate that the outcome of any Medical Treatment is a subject of the concerned Hospital or Doctor even may vary from person to person. Under no circumstances, we can be credited or blamed for the outcome of any medical treatment.</p>
      
      <h1>Disclaimer- Financial Aspects (Costing and Payments)</h1>
      
      <p>Payments: The rates quoted by the hospitals or by us to the patients are indicative only and may vary from the actual cost depending on the actual clinical condition of the patient and treatment/procedure required or Overstay in ICU/ Ward than that mentioned in the quoted price.
The cost of the treatment is a subject dealt by concerned hospitals/clinical/doctor and the patient. Our scope of service is to facilitate patient for treatment and make him understand about the overall logistics/Visa and help him in getting treatment as when required. Humane Medical Tourism cannot be held responsible for adhering to the quotation given to the patient. The price quoted to the patient is only for a particular treatment including the number of days of stay in ICU/ Room and anything apart and extra from that can be charged extra by the hospital and patient has to pay for that. The price also depends on the type of services opted for the care.</p>

<h1>Disclaimer- Links to Third Party Sites</h1>

<p>We may provide links to third party sites; however, we are not responsible for the content of such sites or their terms of use or privacy policies. Please carefully review the terms of service and privacy policies of all such sites prior to usage. You assume the risk of any usage of such third party sites.
</p>

<h1>Disclaimer-Force Majeure</h1>

<p>Neither party shall be liable for any delay or failure in performance due to Force Majeure, which shall mean acts of God, earthquake, labor disputes, changes in law, regulation or government policy, riots, war, fire, flood, insurrection, sabotage, embargo, epidemics, acts or omissions of vendors or suppliers, transportation difficulties, unavailability of interruption or delay in telecommunications or third party services. </p>

<h1>Disclaimer-General-Information</h1>

<p>This site may contain typographical errors or mistakes, and we disclaim any responsibility for such errors and you agree to hold us harmless from any legal responsibility for such errors. We may revise or modify any portion of this Agreement at any time without notice to you. You must read this Agreement each time you visit our site or use any tool or service that we provide to you via this site or elsewhere. Any usage of this site or tools, functions or services that we provide you means that you have read the most current version of this Agreement and you agree to be bound by the terms and conditions of the latest version of this Agreement. Your involvement in any kind of criminal activity during stay in India will be dealt here as per the government law, rules and regulations. You have to follow the government rules and regulation while staying in India.</p>

<h1>Disclaimer-Submissions</h1>

<p>All submissions (but not personal information) become the property of this Site. All submissions are non-confidential in nature. “Submissions” may be thought of as “letters to the editor” or “suggestions/ideas” type of email or letters that you might send us. We may publish all submissions in any manner that we deem to be appropriate, including in all forms of media and publication. You are solely responsible for the content of all submissions, including any violation of any law(s) contained within such submissions, copyright, privacy, fraud, and other laws and regulations. You agree to hold us harmless and defend us and indemnify us from any civil actions filed or threatened to be filed by any third party or entity who determines that your submissions supports a legal cause of action. </p>

<h1>Disclaimer- Organ Transplants & Donation</h1>

<p>In case of Organ Transplant, we would like to be very clear that we do not facilitate for arranging a donor. The donor has to be a blood relative of the patient and fit to donate an organ and also be willing to do so. The donation and transplantation procedure will be done in accordance to Indian Government Law, rules and regulation.
All the cases as per the papers submitted by the patient and his relatives are submitted to the Screening Committee by the hospital and the approval of the Committee is mandatory for the Transplant to take place.
Humane Medical Tourism by no means should be understood as facilitator for approvals. Our scope of service in such cases may at best be limited to let a patient and his relatives know about the requirement of documents for approval of transplant. All these requisites are also available at the hospital help desk. 
</p>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</li>
</ul>
</article>
<aside class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<h1>Follow us on</h1>
<ul>
<li><a href="#" title="Twitter">Twitter</a></li>
<li class="facebook"><a href="#" title="Facebook">Facebook</a></li>
<li class="google"><a href="#" title="Google">Google</a></li>
<li class="pin"><a href="#" title="Pinterest">Pinterest</a></li>

</ul>

</aside>
<figure class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<h1>Our location</h1>
<ul>
<li><a href="#"><img src="images/dot.png" width="14" height="18">Lovely Professional University</br>
144411 Punjab </a></li>
<li><a href="#"><img src="images/dot2.png" width="16" height="14">+91-9565253364</a></li>
<li><a href="#"><img src="images/dot3.png" width="16" height="12">contact@lifesupport.com</a></li>
</ul>


</figure>


<figcaption class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<h1><img src="images/ic_logo.png" height="80" width="80"></h1>
<!--<h2>dfsgdfs</h2>-->
<p>© 2019-20 All rights reserved.<br> Life Support
</p>

</figcaption>
</div>

</footer>

<!--Js Starts Here-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
 <script>
              new WOW().init();
              </script>
<script src="js/demo.js"></script>
<script src="js/jquery.contact-buttons.js"></script>-->
<script src="js/skroll_background.js"></script>
<script>$(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
        
                if(scroll_pos > 210) {
          //alert(scroll_pos);
                    $("#header_nav").css({"background-color": "#007d9e",
           "z-index": "1000"});
                } else {
          if(scroll_pos>0)
          {
                    $("#header_nav").css({"background-color": "#007d9e",
           "z-index": "1000"});
          }
          else
          {
            //alert(scroll_pos);
             $("#header_nav").css("background-color" , ""
           );
           $("#header_nav").css({"background-color": "#007d9e",
           "z-index": "1000"});
          }
                }
            });
        });
</script>-->

<script>
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

<!--<script>
$(function(){
    $('#header_nav').data('size','big');
});

$(window).scroll(function(){
    if($(document).scrollTop() > 0)
    {
        if($('#header_nav').data('size') == 'big')
        {
            $('#header_nav').data('size','small');
            $('#header_nav').stop().animate({
                height:'40px' ,
        background:'black'
        
            },600);
        }
    }
    else
    {
        if($('#header_nav').data('size') == 'small')
        {
            $('#header_nav').data('size','big');
            $('#header_nav').stop().animate({
                height:'100px'
            },600);
        }  
    }
});
</script>-->
<!--Js Starts Here-->
</body>
</html>
<?php
session_start(); 
if(isset($_POST['sub1']))
{
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$mobile=$_POST['mob'];
$pwd=$_POST['pwd'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$Specialization=$_POST['Specialization'];
$hname=$_POST['hname'];
$haddress=$_POST['haddress'];
$type=$_POST['type'];
if($type=='doctor'){


$sql1="select doctorname,mobile,email from doctor where doctorname= '".$fullname."' or email='".$email."' or mobile='".$mobile."' ";

    $result = $conn->query($sql1);

if ($result->num_rows > 0) {
     echo '<script type="text/javascript">alert("Name/email/password already exist.");window.location.replace("index.php");</script>';
     echo "index page";
    }
    else {
    
  $sql="INSERT INTO doctor (doctorname,mobile,email,password,Specialization,hospitalname,hospitaladdress) values('".$fullname."','".$mobile."', '".$email."','".$pwd."','".$Specialization."','".$hname."','".$haddress."' )";


if($conn->query($sql) === TRUE){
 echo '<script type="text/javascript">alert("registered");window.location.replace("index.php");</script>';

}
else{
  echo '<script type="text/javascript">alert("Not registered");window.location.replace("index.php");</script>';
}  
}
}


elseif ($type=='patient') {



$sql2="select patientname,email,mobile from patient where patientname= '".$fullname."' or email='".$email."' or mobile='".$mobile."' ";

    $result = $conn->query($sql2);

if ($result->num_rows > 0) {
     echo '<script type="text/javascript">alert("Name/Email/Mobile already exist.");window.location.replace("index.php");</script>';
     echo "index page";
    }
    else {
 
 $sql="INSERT INTO patient (patientname,mobile,email,password,gender,age) values('".$fullname."','".$mobile."','".$email."','".$pwd."','".$gender."','".$age."' )";

if($conn->query($sql) === TRUE){
 echo '<script type="text/javascript">alert("registered");window.location.replace("index.php");</script>';
}
else{
  echo '<script type="text/javascript">alert("Not registered");window.location.replace("index.php");</script>';
} 
}








}
echo $sql;
}
 ?>

<?php
if (isset($_GET['sub3'])) {
 $a_name=$_GET["aname"];
 $a_mobile=$_GET["amobile"];
 $a_email=$_GET["aemail"];
 $a_time=$_GET["atime"];
 $a_date=$_GET["adate"];
 $query="INSERT INTO appointment (Name,Mobile_No,Email,apptime,appdate) VALUES ('$a_name','$a_mobile','$a_email','$a_time','$a_date')";
 $data=mysqli_query($conn,$query);
          if($data)
         {
          echo '<script type="text/javascript">alert("Your Appointment will be booked");window.location.replace("index.php");</script>';
        }
           

         else
         {
        

         }

}

 ?>



