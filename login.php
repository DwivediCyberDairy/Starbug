<?php 
	Session_start();
	?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
          body h2{margin-top:40px;font-size:40px;}  
        .login{min-height:300px;margin:60px 0px;text-align:center;}
        #sp{float:left;min-height:300px;}
        #logindata{float:left;background:silver;min-height:300px;border-radius:30px;border:1px solid aqua;}
        #lform{margin:20px 40px;}
        #lform input{margin-bottom:25px;}
        </style>
        <title></title>

        <?php include"BSlinks.html"; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background-image:url('images/login.jpg');opacity:0.8;background-size:cover;background-position:center;overflow-x:hidden;">
    <h2 class="text-center">Hi WELCOME <sub>Admin Zone Please fill..</sub></h2>
    <div class="container-fluid">
    <div class="login"class="row">
    <div id="sp"class="col-sm-3"></div>
    <div id="logindata"class="col-sm-6">

    <form id="lform" action="login.php"method="POST">
USERNAME :<input type="text"name="adminid"class="form-control"placeholder="Enter  User  Id"required="ture"/>
PASSWARD :<input type="password"name="pwd"class="form-control"placeholder="Passward"required="ture"/>
<button type="submit"name="lbtn"class="btn btn-primary">Login</button>
    </form>

    </div>
    <div id="sp"class="col-sm-3"></div>
    </div>
    </div>
   
   <?php 
    if(isset($_POST["lbtn"]))
    {
        $aid=$_POST["adminid"];
        $pwd=$_POST["pwd"];
        include "connect.php";
         $cmd="select * from  tbl_login where  adminid='$aid' and pass='$pwd'";
        $x=MySQLi_Query($con,$cmd);
         $y=mysqli_num_rows($x);
        if($y==1)
        {
	    // Creating Session...
	    $_SESSION["adminid"] ="adminmain";
	    echo "<script>window.location.href='adminmain/index';</script>";
        }
        else
         {
	        echo "<script>alert('Invalid Id or Password.');</script>";
         }
    }

    ?>

</body>
</html>