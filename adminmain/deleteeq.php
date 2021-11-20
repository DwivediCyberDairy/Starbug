<?php
$id=$_GET["eid"];
echo $id;
include "../connect.php";
$cmd="delete from tbl_enquiry where eid=$id";
$x=MySQLi_Query($con,$cmd);
if($x)
	 echo "<script>alert('Enquiry deleted successfully.');window.location.href='enquirymgmt.php';</script>";
 else
	 echo "<script>alert('Unable to delete Enquiry');window.location.href='enquirymgmt.php';</script>";
?>