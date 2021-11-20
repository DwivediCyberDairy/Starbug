<?php
 $name=$_POST["name"];
 $email=$_POST["email"];
 $mobno=$_POST["mobno"];
 $sub=$_POST["subject"];
 $message=$_POST["message"];
 date_default_timezone_set("Asia/Kolkata");
 $dt=date("d/m/Y h:i:s A");
 include "connect.php";
 $cmd="Insert into tbl_enquiry(	name,email,mobileno,subject,message,date) values('$name','$email','$mobno','$sub','$message','$dt')";
 $x=MySQLi_Query($con,$cmd);
 if($x)
 {
	 include "MyClass/smssender.php";
	 $ss=new SMSSender();
	 $ss->sendSMS($mobno,"Hi $name, Thanks for enquiry, we will contact you shortly.\n From- CICST");
      echo "<script>alert('$name Your enquiry saved succesfully..!');window.location.href='index';</script>";
 }
 else
	 echo "<script>alert('Sorry! Unable to save enquiry.');window.location.href='index';</script>";
?>

<!--Send form data into mail_ID start -->
<?php 
if(isset($_POST["esave"]))
{
$name=$_POST["name"];
$mobno=$_POST["mobno"];
$email=$_POST["email"];
$sub=$_POST["subject"];
$msg=$_POST["message"];
date_default_timezone_set("Asia/Kolkata");
$dt=date("d/m/Y h:i:s A");
 
 $to="pramod.growel@gmail.com";
 $subject="form submission";
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