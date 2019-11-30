<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JohnZengin-Subscribe</title>
    <link rel="stylesheet" href="/css/app.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: white;
        }
        p{
            margin: 0;
            padding: 0;
        }
        a{

            color:white;
            text-decoration: none;

        }
        a:hover{
            color:white;
            text-decoration: none;
        }
        i{
            margin: 0;
            padding: 15px;
        }
        h4{
            margin: 0;
            padding: 15px;

        }

        #header{
            width:100%;
            background-color:#2c3e50;
            height:60px;
            color:white;
            margin: 0;
            padding: 0;

        }

        .mainheader{
            padding-top: 5%;
            color:#2c3e50;
            text-align: center;
            font-family: Arial;
        }
        .underheader{
            padding:5px;
            font-size:20px;
            font-family: Arial;
            color:#2c3e50;
            text-align: center;
        }


        h1{
            color:#2c3e50;
        }
        #cacc { background-color:#2c3e50; color:white; text-align:center; font-size: 15px; border:none; padding:8px; border-radius:5px;}
        #cacc:hover {box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.13);}


    </style>
</head>
<body>
<div id="header" >
    <div class="row">
        <div class="col">
            <a href="http://johnzengin.com/"><h4>John Zengin</h4></a>
        </div>
        <div class="col">

            <div  style="float:right">
                <a href="https://www.instagram.com/johnzengin"> <i class="fa fa-instagram" style="font-size:24px"></i></a>
                <a href="https://twitter.com/realjohnzengin">   <i class="fa fa-twitter" style="font-size:24px"></i></a>
                <a href="https://www.facebook.com/can.zengin.399041"> <i class="fa fa-facebook" style="font-size:24px"></i></a>
                <a href="https://github.com/johnzengin"> <i class="fa fa-github" style="font-size:24px"></i></a>
            </div>
        </div>
    </div>
</div>


    <div style="background-color: white; ">
        <h1 class="mainheader">Get Notified To See Newest Posts.</h1>
        <p class="underheader">If I spam you, you can spam me.My daily checked email is: johnzengin@outlook.com.So it is your turn to give me your main email.</p>
    </div>
<br><br><br>
<form name="sentMessage" id="contactForm" novalidate>

    <div class="col-md-6">
    </div>
        <div  style="margin-left:10%" class="form-group">
            <input style="width:90%;text-align:center" type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
    <p class="help-block text-danger"></p>
    </div>
    <div style="margin-left:10%" class="form-group">

            <input style="width:90%;text-align:center" type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
        <p class="help-block text-danger"></p>
    </div>



    <div class="clearfix"></div>
    <div class="col-lg-12 text-center">
        <div id="success"></div><br><br>
        <button type="submit" id="cacc">Subscribe</button><br><br><br><br>
    </div>

</form>

<br><br>
<footer>
    <div style="text-align: center"class="footer">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy;JohnZengin</span>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <a href="contact" style="color:#2c3e50">   <p>Contact With Me.Let's Work Together</p></a>
            </div>

        </div>
    </div>
</footer>

</body>
</html>
