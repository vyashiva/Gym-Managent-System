<?php
		include("connecton.php");
session_start();
if(isset($_REQUEST['submit']))
{
	$qry=mysql_query("insert into contact(name,contactno,email,message)values('".$_REQUEST['name']."','".$_REQUEST['ucno']."','".$_REQUEST['uemail']."','".$_REQUEST['uaddress']."')");
	header("location:Contactus.php");
}
?>
<html>
<title>Contact Us</title>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>


.nav a.active {
  background-color: dodgerblue;
  color: white;
}
body{
	background-color: transparent;
	margin: 0;
   font-family: Arial, Helvetica, sans-serif;
}


* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}




.nav {
  overflow: hidden;
  background-color:black;
  height:80px;
}


.nav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}




.nav a:hover {
  background-color: #ddd;
  color: black;
}


body {
    background-color:#393939;
}



.switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 20px;
  vertical-align: middle;
  margin-top: 8px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #A1A6AB;
  -webkit-transition: .4s;
  transition: .4s;

}

.slider:before {
  position: absolute;
  content: "";
 height: 16px;
width: 14px;
left: 2px;
bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #800080;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


.table-call {
    min-height: .01%;
    overflow-x: auto;
    margin-top: 15px;
    border-radius: 6px;
}

.nav > li > a:focus, .nav > li > a:hover {
    text-decoration: none;
    background-color: black;
    color: white;
}



.head {
  font-weight: normal;
  font-size: 16px;
  
}
.head1 {
  font-weight: normal;
  font-size: 30px;
  color:white;
}
.phead
{
	width:1200px;
	height:50px;
	border-bottom:1px dotted #999;
	text-align:center;
	font-size:36px;
	
}
.contactus_block
{
	width:1200px;
	height:500px;
	background-color:#eee;
	margin:0 auto;
}

.enquiryblock
{
	width:500px;
	height:400px;
	float:left;
	margin:20px 0 0 50px;
	font-size:16px;
	

}
.contactdetailblock
{	width:500px;
	height:400px;
	float:left;
	margin:20px 0 0 50px;
	padding-left:50px;
}
.slider
{
	width:100%;
	height:70%;
	background-color:#CCC;
}
.phead
{
	width:1200px;
	height:50px;
	border-bottom:1px dotted #999;
	text-align:center;
	font-size:36px;
	
}
.logo
{
	width:50px;
	height:50px;
	float:left;
	margin:0 0 0 10px;
}



</style>
<body>
<a href="#"><div class="logo"> <img src="C:\Users\Shiva\Desktop\jinu\img\logo1.jpeg" width="90" height="80" alt="Logo" title="Logo" />  </div></a>
<div class="nav">
	<a class="active" href="contactus.html">Contact Us</a>
	<a   href="price.html">Our Prices</a>
	<a  href="about.html">About Us</a>
  <a  href="home.html">Home</a>
 
   
</div>




<div class="contactus_block">
	<div class="phead"><b> Contact Us </b> </div>

<div class="enquiryblock"> 
<form action="#" onSubmit="return validation()" method="post">
Name<br>
<input type="text" name="name" class="input" placeholder="Name" id="name"><br>
<span id="user" ></span><br>
Contact No.<br>
<input type="text" name="ucno" class="input" placeholder="Contact No" id="Cno"><br>
<span id="cn" ></span><br>
Email<br>
<input type="email" name="uemail" class="input" placeholder="Email" id="Email"><br>
<span id="mail" ></span><br>
Message<br>
<textarea name="uaddress" class="textarea" placeholder="Address" id="Message"></textarea><br><br>
<span id="msg" ></span><br>
<input type="submit" name="submit" value="submit" class="submit">
<input type="reset" name="reset" value="Reset" class="submit">


</form>



</div>
<script type="text/javascript">
		function validation()
		{
			var way = /^[A-Za-z]+$/;
			var name = document.getElementById("name").value;
			var cont = document.getElementById("Cno").value;
			var mail = document.getElementById("Email").value;
			var message = document.getElementById("Message").value;
			
			if(name=="")
			{
				document.getElementById("user").innerHTML="PLEASE FILL THE USERNAME";
				return false;
			}
			
			
			if(name.length<3)
			{
				document.getElementById("user").innerHTML="NAME IS TOO SHORT";
				return false;
			}
			if(cont=="")
			{
				document.getElementById("cn").innerHTML="PLEASE FILL THE Contact No";
				return false;
			}
			if(mail=="")
			{
				document.getElementById("mail").innerHTML="PLEASE FILL THE Email";
				return false;
			}
			if(mail.indexof('@') <= 0 )
			{
				document.getElementById("mail").innerHTML="PLEASE FILL THE Email in proper format";
				return false;
			}
			if((mail.charAt(mail.length-4)!='.')&&(mail.charAt(mail.length-3)!='.'))
			{
				document.getElementById("mail").innerHTML="PLEASE FILL THE Email in properformat @";
				return false;
			}
			if(message=="")
			{
				document.getElementById("msg").innerHTML="PLEASE FILL THE Message Field";
				return false;
			}
			
		} 
	</script>
<div class="contactdetailblock"> 


<p> <b>Fitness Club</b>
<p> Certified Trainers
<p> INDIA
<p> Maharashtra - 432001
 <p>  <i class="fa fa-phone"></i> P : 8888999910

<p> <i class="fa fa-envelope-o"></i> E: admin@fitnessclub.com

 <p> <i class="fa fa-clock-o"></i> H: Monday - Saturday: 5:00 AM to 11:00 PM



</div>





</div>
<br><br><br>

                      
		



 <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.7021609996195!2d73.02638051492053!3d26.271328183407988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c44ac81813f%3A0x5ecf0f92b99d0556!2sDMATICS!5e0!3m2!1sen!2sin!4v1517403949433" frameborder="0" height="250" width="400" style="border:0">
      </iframe>
      </div>

      <div class="w3-col s4">
         <h3> <b>LINKS</b></h3><br>
		<p><a href="home.html">Home</a></p>
        <p><a href="about.html">About us</a></p>
		<p><a href="price.html">Our Prices</a></p>
        <p><a href="Contactus.php">Contact</a></p> 
       
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>FITNESS CLUB</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Fitness Club LTD.</p>
        <p><i class="fa fa-fw fa-phone"></i> 792345347890</p>
        <p><i class="fa fa-fw fa-envelope"></i> admin@fitnessclub.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> American Express</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
	
  </footer>

  <div class="w3-black w3-center w3-padding-24">Fitness Club LTD.</div>

  <!-- End page content -->
<!-- Newsletter Modal -->







</body>

</html>
