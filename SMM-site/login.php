<?php
    require 'connection.php';
    session_start();
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
            <br><br><br>
     
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 smm-panel-bye">
                        <div class="panel panel-primary panel-heading2">
                            <div class="panel-body ">
                            <div class="panel-heading">
                            <h1 style="color: black;"><b>Вход</b></h1>
                            </div>
                            <div class="panel-body">
                                <p style="color: black;">Авторизуйтесь, чтобы совершить покупку.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Пароль (мин. 6 символов)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Войти" class="btn smm-btn-bye">
                                    </div>
                                </form>
                            </div>
                            <div style="color: black;" class="panel-footer">Еще нет учетной записи? <a href="signup.php">Зарегестрироваться</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
