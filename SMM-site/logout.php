<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta charset="utf-8">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

	<title>Digital</title>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,300,800italic,700,300italic,700italic,400italic' rel='stylesheet' type='text/css'>
	
	<link href='http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>	
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/carousel.css" rel="stylesheet" type="text/css"/>
	<link href="css/animate.min.css" rel="stylesheet" type="text/css"/>	
	<link href="css/simple-line-icons.css" rel="stylesheet" type="text/css"/>

	<link href="css/style1.css" rel="stylesheet" type="text/css"/>
	<link href="css/responsive.css" rel="stylesheet" type="text/css"/>	
</head>
    <body>
        <div>
            <?php
                require 'header2.php';
            ?>
            <br>
            

            <div class="container">
                <div class="row">
                    <div class="col-xs-6 smm-panel-bye">
                        <div class="panel panel-primary panel-heading2">
                            <div class="panel-body ">
                                <p style="color: black;">Вы вышли из системы. <a style="color: #6307af;"  href="login.php">Войти снова.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>
