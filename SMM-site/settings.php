<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
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
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1 style="color: black; margin-bottom: 40px;">Изменение пароля</h1>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Старый пароль">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="Новый пароль">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Повторите новый пароль">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn smm-btn-bye" value="Изменить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
