<!DOCTYPE  TYPE>
<html lang="en-us">
<head>
<style>
body
{
background-size:cover;
}
.marqu
{
	min-height:50px;
	padding:0px;
	background-image:url('images/himg.jpg');
	background-position:center;
	background-size:cover;
}
#marqudata {height:50px;color:silver;font-size:24px;}
#marqudata img{border-radius:20%;}
.banner
{
min-height:500px;	
}
#bimg
{
	
	min-height:500px;
	padding:0px;
	background:white;
	
}
#bimg img
{
	background-size:cover;
	margin-top:40px;
	width:100%;
	
}
#btneq{position:fixed;top:250px;left:-20px;transform:rotate(90deg);z-index:999;}
#productspage ul{list-style:none;width:20%;position:absolute;}
#productspage ul li {font-size:24px;text-align:center; background:silver;color:white;border-radius:6px;border:1px solid aquamarine;margin-top:20px;}
#productspage ul a:hover{color:white;}



</style>
<script>
var images=["b12.jpg","e32.jpg","b13.jpg","b14.jpg","b15.jpg","b16.jpg","b17.jpg","b18.jpg","b19.jpg","b20.jpg","b21.jpg","b22.jpg","b23.jpg","b24.jpg","b25.jpg","b26.jpg","b27.jpg","b28.jpg","b29.jpg","b30.jpg","b31.jpg","b32.jpg","b33.jpg","b34.jpg","b35.jpg","b36.jpg","b37.jpg","b38.jpg","b39.jpg"];
var i=0;
function next()
{
var img=document.getElementById("img");
i++;
if(i==images.length)
{
	i=0;
}
img.src="images/"+images[i];
}
function pev()
{
var img=document.getElementById("img");

if(i==0)
{
	i=images.length;
}
i--;
img.src="images/"+images[i];
}
function move()
{
	var img=document.getElementById("img");
	i++;
	if(i==images.length)
	{
		i=0;
	}
	window.setTimeout("move()",5000);
	img.src="images/"+images[i];
	
	}
</script>
<?php include"BSlinks.html"; ?>
<meta charset="UTF-8">
<link href="css/style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="move()" style="overflow-x:hidden;">
<div class="container-fluid">
<?php include "header.html";?>
<div class="marqu"class="row">
<div id="marqudata"class="col-sm-8"><marquee ><img src="images/logo.png"height="100%"/></marquee></div>
</div>
<div class="banner"class="row">
<div id="bimg"class="col-sm-12">
	<span id="productspage"> 
	<ul>
<a href="woman"><li>MOMMY</li></a>
<a href="kids"><li>KIDS</li></a>
	</ul>
	</span>
<img id="img" src="images/e32.jpg"height="90%"/>
<button onclick="pev()"style="height:40px;width:30px;border-radius:40%;font-size:20px;position:absolute;top:250px;left:3%;"><</button>
<button onclick="next()"style="height:40px;width:30px;border-radius:40%;font-size:20px;position:absolute;top:250px;left:92%;">></button>
</div>
</div>
<?php include "footer.html";?>
</div>
<button id="btneq" class="btn btn-primary" onclick="managePopup(this,dveq)">Enquiry</button>
<div id="dveq" style="width:250px;height:400px;opacity:0.9;background-image:url('images/himg.jpg');background-size:cover;position:absolute;top:200px;left:15px;border-radius:10px;border:1px solid maroon;padding:10px;display:none;">
<p class="text-center"style="text-shadow:0 0 3px aqua, 0 0 5px aqua;">May I help you?</p>
<hr style="background-color:black;margin:-14px 20px 8px 20px;padding:0px;"/>
<form action="saveenquiry.php" method="post">
<input type="text" class="form-control" name="name" placeholder=" Enter Name*" style="margin-bottom:8px;"  required="ture"/>
<input type="email" class="form-control" name="email" placeholder="What's Email Id*" style="margin-bottom:8px;"  required="ture"/>
<input type="number" class="form-control" name="mobno" placeholder="Mobile No*" style="margin-bottom:8px;" />
<input type="text" class="form-control" name="subject" placeholder="SUBJECT" style="margin-bottom:8px;" />
<textarea class="form-control" name="message" placeholder="Type your message here..." rows="4" style="margin-bottom:8px;" required="ture"></textarea>
<input type="submit" value="Submit"  name="esave"class="btn btn-success form-control" />

</form>
</div>
 <script>
 function managePopup(btn,dv)
 {
	 var status=dv.style.display;
	 if(status=="none")
		 dv.style.display="block";
	 else
		 dv.style.display="none"; cx
 }
</script>
<a  id="fb"href="feedbackform"><button id="btnfdb" class="btn btn-primary" style="background-color:#1ABC9C;color:white;position:fixed;top:500px;left:95%;transform:rotate(90deg);z-index:999">Feedback</button></a>
 
</body>
</html>