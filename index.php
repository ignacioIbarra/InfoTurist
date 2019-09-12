<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Pucon Go</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/coming-sssoon.css" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square"></i>
                            Share
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                            Tweet
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            Email
                        </a>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <div class="main" style="background-image: url('images/default.jpg')">

        <!--    Change the image source '/images/default.jpg' with your favourite image.     -->

        <div class="cover black" data-color="black"></div>

        <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

        <div class="container">
            <h1 class="logo cursive">
                Bienvebido a una nueva experiencia
            </h1>
            <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
            <div class="content">
                <button type="button" class="btn btn-dark" onclick=" location.href='español/home.php' "><img src="images/flags/ES.png" /> <label class="labelportada">Español</label></button>
                <button type="button" class="btn btn-light" onclick=" location.href='english/home.php' "><img src="images/flags/GB.png" /> <label class="labelportada">English</label></button>
                <button type="button" class="btn btn-light" onclick=" location.href='deutsch/home.php' "><img src="images/flags/DE.png" /> <label class="labelportada">Deutsch</label></button>
                <button type="button" class="btn btn-light" onclick=" location.href='francais/home.php' "><img src="images/flags/FR.png" /> <label class="labelportada">Français</label></button>
                <button type="button" class="btn btn-light" onclick=" location.href='portugues/home.php' "><img src="images/flags/BR.png" /> <label class="labelportada">Português</label></button>
            </div>
        </div>
        <div class="footer">
        </div>
    </div>
</body>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap1.min.js" type="text/javascript"></script>

</html>