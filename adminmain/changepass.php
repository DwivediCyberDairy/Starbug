<?php include "header.html";?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <style>
                #cpform{width:60%;margin:10px 80px;padding:10px;border:1px solid #ffdead;border-radius:10px;background:whitesmoke;}
                #cpform input{margin-bottom:10px;}
            </style>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h2 class="text-center"style="background:bisque;color:red;">☻☺CHANGE PASSWORD☺☻</h2><hr style="border:1px solid bisque;">
        <form id="cpform"action="changepass.php" method="POST">
            <input type="password" name="pwd" placeholder="Enter your current password--" class="form-control" required="true"style="margin-bottom:10px;"/>
            <input type="password" name="npwd" placeholder="expected new password"class="form-control" style="margin-bottom:10px;"/>
            <input type="password" name="cnpwd" placeholder="Confiorm new password"class="form-control"/>
            <br/> 
            <center><input type="submit" name="passchange" value="Change Password" class="btn btn-primary"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" name="updpwd" value="reset" class="btn btn-danger"/></center>
        </form>    
    </body>
</html>
<?php include "footer.html";?>

    <?php
    if(isset($_POST["passchange"]))
    {
        $pass=$_POST["pwd"];
        $npass=$_POST["npwd"];
        $cnpass=$_POST["cnpwd"];
        if($npass==$cnpass)
        {
            $cmd="Update tbl_login set Pass='$npass' where Pass='$pass'";
            include "../connect.php";
            $x=MySQLi_Query($con,$cmd);
            if($x)
                echo "<script>alert('Your passsword changed successfully.');</script>";
            else
                echo "<script>alert('Invalid current password.');</script>";
        }
        else
            echo "<script>alert('Confirm password and new password in not matching.');</script>";
    }
    ?>