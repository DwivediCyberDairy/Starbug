<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
          body h2{margin-top:40px;font-size:40px;}  
        .feedback{min-height:300px;margin:60px 0px;text-align:center;}
        #sp{float:left;min-height:300px;}
        #feedbackdata{float:left;background:rgb(149 200 222);opacity:0.7;min-height:300px;border-radius:30px;border:1px solid aqua;}
        #fdform{margin:20px 40px;}
        #fdform input{margin-bottom:25px;}
        </style>
        <title></title>

        <?php include"BSlinks.html"; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background-image:url('images/fdk.jpg');background-size:cover;background-repeat:no-repeat;overflow-x:hidden;">
         <h2 class="text-center">Hi WELCOME <sub>Dear Clint Please fill..</sub></h2>
            <div class="container-fluid">
                <div class="feedback"class="row">
                    <div id="sp"class="col-sm-3"></div>
                        <div id="feedbackdata"class="col-sm-6">

                            <form id="fdform" action="savefeedback.php"method="POST"><h3 class="text-center">Feedback Form</h3>
                             <input type="text"name="name"class="form-control"placeholder="Please Enter your name* "required="ture"/>
                             <input type="email"name="email" class="form-control"placeholder="Email-Id*"required="ture"/>
                             <textarea type="text"row="4"name="message"class="form-control"placeholder="Type Your  Message*"required="ture"></textarea>
                             <button type="submit"name="fsave"class="btn btn-primary"style="margin-top:20px;">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <button type="reset" class="btn btn-danger"style="margin-top:20px;">Reset</button>
                            </form>
                            
                         </div>
                         
                    <div id="sp"class="col-sm-3"><a href="index"><button class="btn btn-primary">< Go_BACK</button></a></div>
                </div>
            </div>
    </body>
</html>

