<?php 
session_start();
error_reporting(0);
$conn = include_once('../dbmanager.php');
 $patient_profile=$_SESSION['patientname'];
if($patient_profile==false){
  header('location:../login.php');
} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Life Support</title>
<!--Css Starts Here-->
<link href="../css/style_main.css" rel="stylesheet" type="text/css"/>
<link href="../css/responsivestyle.css" rel="stylesheet" type="text/css"/>
<link rel="../icon" href="images/patient.png" type="image/x-icon">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="../css/hover-min.css" rel="stylesheet" type="text/css"/>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<!--Circle effects-->
 <link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../css/style_circle.css" />


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
      <div><a class="navbar-brand" href="#" style="color:#fff;">Life Support</a></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    <ul class="nav navbar-nav navbar-right">
       <li><font color="white"><?php echo "Welcome! "; echo $patient_profile;?></font></li>
        <li><a href="index.php" title="Home"><img src="../images/home.png" style="height: 30px; width:30px;"><br></a></li>
        <!--<li><a href="#about_us" title="About Us">View Appointment</a></li>
        <li><a href="#ser_vicesnew" title="Our Services">View Patient Report</a></li>
        <li><a href="#treatment_out_new" title="Our Treatments">Patient Services&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>-->
        <li><a href="../logout.php"><div class="btnl"><font color="white">Log out</font></div></a></li>


        </ul>
        
      
     
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header><!--Header ends here-->


<div id="home" class="fullscreen background parallax sec_one" data-img-width="1600" data-img-height="1064" data-diff="100">
 <div class="container">
   <div class="row" style="margin-top: 50px; margin-left: 400px;">
     <table border="2">
       <form method="get" action="">

        <tr>
          <td colspan="2" style="color: white; text-align: center;">Book Your Appointment</td>
        </tr>
         <tr>
           <td style="color: white;">
             Patient Name
           </td>
           <td>
             <input type="text" name="pname" placeholder="Enter Patient Name" required="">
           </td>
         </tr>
         <tr>
           <td style="color: white;">
             Mobile Number
           </td>
           <td>
             <input type="number" name="pnumber" placeholder="Enter Mobile number" required="">
           </td>
         </tr>
          <tr>
           <td style="color: white;">
            Email
           </td>
           <td>
             <input type="email" name="pemail" placeholder="Enter Email">
           </td>
         </tr>
         <tr>
           <td style="color: white;">
             Date For Appoint
           </td>
           <td>
             <input type="date" name="pdate" placeholder="Enter Date & Time for appoint" required="" style="width: 100%;">
           </td>
         </tr>
         <tr>
           <td style="color: white;">Choose your timing</td>
           <td style="color: white;">
             <input type="radio" name="tm" value="9AM-1PM" required="">9AM-1PM<br>
              <input type="radio" name="tm" value="3PM-6PM">3PM-6PM<br>
               <input type="radio" name="tm" value="8PM-10PM">8PM-10PM
           </td>
         </tr>
         <tr>
           <td style="color: white;">Select Service</td>
           <td>
             <select id="coption" style="width: 100%;" required="" name="service">
                  <option value="select">Select</option>
                  <option value="Neuro">Neuro</option>
                  <option value="Ortho">Ortho</option>
                  <option value="Sports">Sports</option>
                  <option value="Cordio">Cordio</option>
                  <option value="Others">Others</option>
             </select>
           </td>
         </tr>
         <tr>
           <td colspan="2" style="text-align: center;">
             <input type="submit" name="sub" value="submit">
           </td>
         </tr>
       </form>
     </table>
     </div>
   </div>

 </div>
  


     



       
   
</div>
   


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
      
      <p>We (“Humane Medical Tourism” services providing through humane-healthcare.com) is not a medical referral service. We do not endorse, recommend, or approve any healthcare provider or any third party service provider of any nature. We provide you with the best possible information so that you can begin to conduct your own research into whether or not medical tourism is appropriate for you.  You must conduct sufficient personal research on your own so that you can make your own knowing and intelligent decision regarding whether or not you should travel abroad to receive medical care.  </p>
      
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
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
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
<li><a href="#"><img src="../images/dot.png" width="14" height="18">Lovely Professional University</br>
144411 Punjab </a></li>
<li><a href="#"><img src="../images/dot2.png" width="16" height="14">+91-9565253364</a></li>
<li><a href="#"><img src="../images/dot3.png" width="16" height="12">contact@lifesupport.com</a></li>
</ul>


</figure>


<figcaption class="col-sm-3 wow flipInX" data-wow-duration="1000ms" data-wow-delay="400ms">
<div class="ftl"><h1><img src="../images/ic_logo.png" height="90" width="90"></h1></div>
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
<!--<script src="js/demo.js"></script>
<script src="js/jquery.contact-buttons.js"></script>-->
<script src="js/skroll_background.js"></script>
<!--<script>$(document).ready(function(){       
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
if (isset($_GET['sub'])) {

$pname=$_GET['pname'];
$pnumber=$_GET['pnumber'];
$pemail=$_GET['pemail'];
$pdate=$_GET['pdate'];
$ptime=$_GET['tm'];
$service=$_GET['service'];
echo $service;
$app_booked_by=$patient_profile;


$sql1="INSERT INTO appointment (Name,Mobile_No,Email,apptime,appdate,service,Appoint_Booked_By) VALUES('".$pname."','".$pnumber."','".$pemail."','".$ptime."','".$pdate."','".$service."','".$app_booked_by."') ";
echo $sql;

if($conn->query($sql1) === TRUE){
 echo '<script type="text/javascript">alert("appointment has been booked");window.location.replace("take_appointment.php");</script>';
}
else{
  echo '<script type="text/javascript">alert("Appointment not booked");window.location.replace("patient_page.php");</script>';
}
echo $sql1;


} 


?>