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
    <h1 class="mainheader">Tell Me What It Is.</h1>
    <p class="underheader">You Can tell or offer me anything you want.I would love to hear what you want to say.</p>
</div>
<br><br><br><br><br>
<form style="margin:20px"name="sentMessage" id="contactForm" novalidate>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12 text-center">
            <div id="success"></div><br><br>
            <button type="submit" id="cacc">Send Message</button>
        </div>
    </div>
</form>

<br><br><br><br><br>
<footer>
    <div style="text-align: center"class="footer">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy;JohnZengin</span>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <a href="subscribe" style="color:#2c3e50">   <p>Subscribe To My Newsletter</p></a>
            </div>

        </div>
    </div>
</footer>

</body>
</html>
