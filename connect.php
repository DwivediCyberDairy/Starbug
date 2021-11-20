<?php
 $server="localhost";
 $userid="root";
 $pass="";
 $dbname="starbugdb";
 $con=MySQLi_Connect($server,$userid,$pass,$dbname);
  if(!$con)
   echo "Unable to connect database."
?>