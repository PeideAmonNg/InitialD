<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="shortcut icon" href="favicon.ico" />
        <title>Initial D</title>
    </head>
    
    <style>
        img:hover{
            background-color: yellow;
        }
        
        .image:hover > .overlay {
            width:100%;
            height:100%;
            position:absolute;
            background-color:#000;
            opacity:0.5;
            border-radius:30px;
        }
        .space{
            margin: 5%;
        }
        body{
            font-family:Georgia, 'Arial', serif;
        }
    </style>
    

    <body>
        <div class="space">
        </div>
        <h1 class="title text-center"><b>Takumi opponents</b></h1>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center image">
                    <div class="overlay"></div>
                    <img src="evo8.png" class="img-responsive center-block" alt="Responsive image">
                    Evo 8
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center image">
                    <div class="overlay"></div>
                    <img src="rx7.png" class="img-responsive center-block" alt="Responsive image">
                    RX-7
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center image">
                    <div class="overlay"></div>
                    <img src="s15.png" class="img-responsive center-block" alt="Responsive image">
                    Wrx
                </div>
            </div>        
        </div>
    </body>

    



</html>