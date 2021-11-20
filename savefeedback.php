<?php 
$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["message"];
date_default_timezone_set("Asia/Kolkata");
$dt=date("d/m/Y h:i:s A");
//Database Connectivity...
include "connect.php";

$cmd="Insert into tbl_feedback(name,email,message,date
) values('$name','$email','$msg','$dt')";
 $x=MySQLi_Query($con,$cmd);
 if($x)
 {
 include "MyClass/smssender.php";
	 $ss=new SMSSender();
	 $ss->sendSMS($mobno,"Hi $name, Thanks for enquiry, we will contact you shortly.\n From- CICST");
      echo "<script>alert('Thanks for given Feedback.');window.location.href='index.php';</script>";
 }
 else
	 echo "<script>alert('Sorry! Unable to save Feedback.');window.location.href='feedback.php';</script>";
?>