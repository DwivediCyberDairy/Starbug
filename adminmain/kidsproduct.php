<?php include "header.html";?>
<!DOCTYPE html>
<html lang="en">
    <style>
        #kform{width:60%;margin:10px 80px;padding:10px;border:1px solid #ffdead;border-radius:10px;background:silver;}
        #kform input{margin-bottom:10px;}
        </style>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h2 class="text-center"style="background:bisque;">Add KIDS PRODUCTS</h2><hr style="border:1px solid bisque;">
    <form id="kform"action="kidsproduct.php" method="POST" enctype="multipart/form-data">
    Name : <input type="text"name="name"placeholder="Enter Product Name" class="form-control"required="ture"/>
    Product Style Number <input type="text"name="stylenumber"placeholder="Enter Style Number"class="form-control"
    required="ture"/>

    <input type="file" name="productpic"/>
    <textarea type="text" name="description" rows="3"placeholder="Enter Product detail.."class="form-control"required="ture"style="margin-bottom:10px;"></textarea>
    Product Categorey :<input type="text" name="categorey"placeholder="Enter Product Categorey"class="form-control"required="ture"/>
    <input type="text" name="price"placeholder="$_Enter price"class="form-control"required="ture"/>
<center><button type="submit" name="btn"class="btn btn-success">save</button> &nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-danger">Reset</button> </center>

</form>
    </body>
</html>
<?php include "footer.html";?>


<?php 
if(isset($_POST["btn"]))
{
    $name=$_POST["name"];
    $styno=$_POST["stylenumber"];
    //file uplooad start
    $file=$_FILES["productpic"];
    $fname=$file["name"];
    $tmppath=$file["tmp_name"];
    $destpath="../kidsphoto/".$fname;
    move_uploaded_file($tmppath,$destpath);
    //End file uplooad 
    $desc=$_POST["description"];
    $catg=$_POST["categorey"];
    $price=$_POST["price"];
    date_default_timezone_set("Asia/Kolkata");
    $dt=date("d/m/Y h:i:s A");
    //Database Connectivity...
    include "../connect.php";
    $cmd="Insert into tbl_kids(prodname,prodstyle,photo,detail,category,price,date) values('$name','$styno','$destpath','$desc','$catg','$price','$dt')";
    $x=MySQLi_Query($con,$cmd);
    if($x)
        echo "<script>alert('Kids product added successfully.');window.location.href='kidsproduct.php';</script>";
    else
        echo "<script>alert('Unable to save kids product details..');window.location.href='kidsproduct.php';</script>";
    

}

?>