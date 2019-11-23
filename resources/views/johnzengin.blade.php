<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
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
            background-color:#2c3e50;
            height:60px;
           color:white;
            margin: 0;
            padding: 0;

        }

        #header_content {
            width:70%;
            background-color:#00B2EE;
            height:120px;
            margin:0 auto;
            text-align:center;}

        #content{
            width:68%;
            background-color:#EBEBEB;
            margin:0 auto;
            padding:20px;}
    </style>
</head>
<body>
<div id="header" >
    <div class="row">
        <div class="col">
            <a href="www.johnzengin.com"><h4>John Zengin</h4></a>
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

</body>
</html>
