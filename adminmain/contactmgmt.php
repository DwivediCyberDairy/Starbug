<?php include "header.html";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h2 class="text-center"style="background:bisque;">CONTACT DETAIL SHEET</h2><hr style="border:1px solid bisque;">
            <div class="row">
                <div class="col-sm-12">
                     <div class="row h5">
                        <div class="col-sm-1 text-center">ContID</div>
                        <div class="col-sm-1 text-center">NAME</div>
                        <div class="col-sm-3 text-center">EMAILID</div>
                        <div class="col-sm-2 text-center">SUBJECT</div>
                        <div class="col-sm-2 text-center">MOBILE.NO</div>
                        <div class="col-sm-2 text-center">MESSAGE</div>
                        <div class="col-sm-1 text-center">DATE</div>
                    </div>
                         <?php
                        // Database code starts from here
                            include "../connect.php";
                            $cmd="select *from tbl_contact";
                            $result=MySQLi_Query($con,$cmd);
                            while($x=MySQLi_fetch_assoc($result))
                            {
                                echo "<div class='row' style='min-height:28px;'>";
                                echo "<div class='col-sm-1'>".$x["cid"]."</div>";
                                echo "<div class='col-sm-1'>".$x["name"]."</div>";
                                echo "<div class='col-sm-3'>".$x["email"]."</div>";
                                echo "<div class='col-sm-2'>".$x["subject"]."</div>";
                                echo "<div class='col-sm-2'>".$x["mobno"]."</div>";
                                echo "<div class='col-sm-2'>".$x["message"]."</div>";
                                echo "<div class='col-sm-1'>".$x["date"]."</div></div>";
                            }
                            // database code ends from here
                        ?>

                </div>
            </div>
    
    </body>
</html>
<?php include "footer.html";?>