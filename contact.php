<!DOCTYPE  TYPE>
<html lang="en-us">
<head>
<style>
*
{
	margin:0;padding:0; box-sizing:border-box;
}

.contdata1
{
	min-height:100px;
	background:white;
	text-align:center;
	padding:0px;
	
}
.contdata1 img
{
	height:50px;
	width:60px;
	margin-top:10px;
}
.contdata h4
{
	color:gray;
}
#hcont1
{
	float:left;
	height:40%;
	background:white;
}
#hcont2
{
float:left;
height:40%;
background:white;
border:1px solid pink;
}
#hcont3
{
	float:left;
	height:40%;
	background:white;
}
.contdata2
{
min-height:300px;
background:black;
padding:10px;	
}
#scont1
{
	float:left;
	height:300px;
	background:white;
}	
#scont2
{
	float:left;
	height:300px;
	background:white;
}
#cform
{
	margin-bottom:20px;
}
#cform input
{
width:47%;
margin-top:10px;
background-size:cover;
}
</style>

<?php include"BSlinks.html"; ?>
<link rel="stylesheeet" type="text/css"href="css/style.css"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="overflow-x:hidden;">
<div class="container-fluid">
<?php include "header.html";?>
	<div class="hcontact"class="row"style="min-height:60px;line-height:60px;background:white;">
	<div class="col-sm-12"><h3 class="text-center"> CONTACT US<hr></h3></div>
	</div>
<div class="contdata1"class="row">
	<div id="hcont1"class="col-sm-4"><img src="images/location.png"/><h4>ADDRESS</h4>Growel Impex Private Limited
		A-54 , Sector – 58, Noida – 201301
		Gautam Budh Nagar (U.P.) India
	</div>
	<div id="hcont2"class="col-sm-4"><img src="images/ph.png"/><h4>PHONE NUMBER</h4>+91 9818 899 215,7651986885</div>
	<div id="hcont3"class="col-sm-4"><img src="images/msg.png"/><h4>EMAIL</h4>merchant1@fuenteunica.com <br> saniya.gulati95@gmail.com
	</div>
</div>
<div class="contdata2"class="row">
		<div id="scont1"class="col-sm-5"><p><h3>CONTACT FORM</h3>Give us a call, send us an email or a letter - or drop by to have a chat. We are always here to help out in whatever way we can.
		</p>
		</div>
		<div id="scont2"class="col-sm-7">
		<p>
		<form id="cform" action="contact.php"method="POST">
		<input type="text" name="name" placeholder="ENTER YOUR NAME"required="ture"/>
		<input type="email" name="email" placeholder="ENTER YOUR EMAIL"required="ture"style="margin-left:3%;"/>
		<input type="text" name="subject" placeholder="SUBJECT"required="ture"/>
		<input type="number" name="mobno" placeholder="ENTER YOUR MOBILE NUMBER"required="ture"style="margin-left:3%;"/>
		<textarea type="text" name="message" rows="4"placeholder="TYPE YOUR MESSAGE HERE.."class="form-control"required="ture"style="margin-top:10px;"></textarea>
		<input type="submit" name="csave" class=" btn btn-primary form-control"style="margin-bottom:10px;"/>
		</form>
		</p>
		</div>

	</div>
<?php include "footer.html";?>
</div>
</body>
</html>
 <!-- SAVE form data into  Database Start-->
<?php
if(isset($_POST["csave"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$sub=$_POST["subject"];
$mobno=$_POST["mobno"];
$msg=$_POST["message"];
date_default_timezone_set("Asia/Kolkata");
$dt=date("d/m/Y h:i:s A");
//Database Connectivity...
include "connect.php";

$cmd="Insert into tbl_contact(name,email,subject,mobno,message,date
) values('$name','$email','$sub','$mobno','$msg','$dt')";
 $x=MySQLi_Query($con,$cmd);
 if($x)
 {
	 include "MyClass/smssender.php";
	 $ss=new SMSSender();
	 $ss->sendSMS($mobno,"Hi $name, Thanks for given time, and juch my skill  we will contact you shortly.\n From- GrowelImpex(p)LTD");

	echo "<script>alert('$name .Your information saved succesfully W'll contact you Sortlly.');window.location.href='index;</script>";
 }
 else
	 echo "<script>alert('Sorry! Unable to save detail.');window.location.href='contact;</script>";


}
?>

<!--Send data into mail start -->
<?php 
if(isset($_POST["csave"]))
{
$name=$_POST["name"];
$mobno=$_POST["mobno"];
$email=$_POST["email"];
$sub=$_POST["subject"];
$msg=$_POST["message"];
date_default_timezone_set("Asia/Kolkata");
$dt=date("d/m/Y h:i:s A");
 
 $to="pramod.growel@gmail.com";
 $subject="contact form submission";
 $message=".NAME:".$name."\n".$mobno."\n".$email."\n"."wrote the folowing:"."\n\n".$msg;
 $header="form:".$email;
 if(mail($to,$subject,$message,$header))
 {
	echo "<script>alert('Sent successfully! Thank you'.'' '.$name.', We will contact you shortly!');window.location.href='';</script>";
	 }
	 else{
	     echo "<script>alert('something went wrong');</script>";
	     
	 }
}

?>