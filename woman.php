

<!DOCTYPE html>
<html lang="en">
    <head>
	<style>
        .wtop{min-height:500px;background:blue;}
        #wctg{float:left;min-height:500px;background:whitesmoke;}
        #products{float:left;min-height:500px;background:white;}
        .hpc{min-height:120px;}
        #hpcd{min-height:120px;line-height:100px;background:white;text-align:center;}
        #hpcd ul a{border:12px solid whitesmoke;border-radius:20px;text-align:center;color:black;margin-left:20px;}
        #hpcd ul a img{height:60px;}
        
    </style>    
        <?php include"BSlinks.html"; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="overflow-x:hidden;">
        <div class="container-fluid">
    <?php include "header.html";?>
	<div class="wtop"class="row">
            <div id="wctg"class="col-sm-3"><h3>Product category</h3></div>
            
            <div id="products"class="col-sm-9">
                <div class="hpc" class="row">
                    <div id="hpcd"class="col-sm-12">
                        <ul>
                           <a href="#"><img src="images/b26.jpg"/>A</a>
                           <a href="#"><img src="images/b27.jpg"/>B</a>
                           <a href="#"><img src="images/b28.jpg"/>C</a> 
                           <a href="#"><img src="images/b29.jpg"/>D</a>
                           <a href="#"><img src="images/b30.jpg"/>E</a>
                        </ul>
                     </div>
                </div>
                 <!--Grid view start-->
                 <div class="row">
                        <?php
	                         // Database code starts from here
	                            include "connect.php";
	                    	    $cmd="Select *from tbl_woman";
	                    	    $result=MySQLi_Query($con,$cmd);
		                            while($x=MySQLi_fetch_assoc($result))
		                        {
                                    $p=$x["photo"];
                                 ?>   
                                       
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="womanphoto/$p"targat=_blank><img src="kidsphoto/<?php echo $x["photo"];?>"alt=""width="270"height="360"/>
                                            <h3>$<?php echo $x["price"]?></h3>
                                            <p><?php echo $x["detail"];?></p></a>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>add to cart</a>

                                        </div>
                                        

                                       <!-- <div class="product-overlay">
                                            <div class="overlay-content">
                                                <p><?php echo $x["detail"];?></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>add to cart</a>
                                            </div>
                                        </div>-->

                                    </div>
                                    
                                    <!--<div class="choose">
                                        <ul nav nav-pills nav-justified>
                                            <li><a href=""><i class="fa fa-plus-square"></i></a>add to wishlist</li>
                                            <li><a href=""><i class="fa fa-plus-square"></i></a>add to compare</li>
                                        </ul>

                                    </div>
                                -->
                                </div>
                            </div>
                            <?php
                            }

                        ?> 
                    </div>
                    <!--END OF Grid section-->
               
            </div>
    
        </div>
    <?php include "footer.html";?>  
    </div>
    </body>
</html>