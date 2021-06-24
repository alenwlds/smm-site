<?php
    session_start();
    require 'check_if_added.php';
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

            <div class="container">
                <div class="jumbotron2">
                    <h2 style="color: black; text-align:center; margin-bottom: 50px;">Концепция</h2>
                   <div class="smm-shop-sale">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;" >Разработка идеи коммуникации</h3>  </a>
                                    <p>Цена: 2600</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block smm-btn-bye" name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Определение визуального стиля сообществ</h3></a>
                                    <p>Цена: 2000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block smm-btn-bye" name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Разработка механик активаций</h3> </a>
                                    <p>Цена: 5000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block smm-btn-bye" name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div> 

                <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a style="width: 250px; margin-left: 460px; margin-top: 50px;" href="cart_add.php?id=13" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Купить весь пакет</a>
                                                <?php
                                            }
                                        }
                                        ?>
                </div>
                
            </div>

            <div class="container">
                <div class="jumbotron2">
                    <h2 style="color: black; text-align:center; margin-bottom: 50px;">Тактика</h2>
                    <div class="smm-shop-sale">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Разработка SMM-стратегии</h3> </a>
                                    <p>Цена: 4000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Полный комплекс планирования (от контент-планов до медиапланов)</h3></a>
                                    <p>Цена: 8000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                                    </div>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a style="width: 250px; margin-left: 460px; margin-top: 50px;" href="cart_add.php?id=14" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Купить весь пакет</a>
                                                <?php
                                            }
                                        }
                                        ?>
                </div>
                </div>
            </div>

            <div class="container">
                <div class="jumbotron2">
                    <h2 style="color: black; text-align:center; margin-bottom: 50px;">Продакшн</h2>
                    <div class="smm-shop-sale">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Создание сообществ с нуля</h3></a>
                                    <p>Цена: 7000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Разработка постов для сообществ</h3></a>
                                    <p>Цена: 8000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Разработка визуало, как статичных, так и motion</h3></a>
                                    <p>Цена: 1800</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Сложный продакшн (фото, видео, подкасты, стриминг)</h3></a>
                                    <p>Цена: 3500</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзинуt</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    </div>
                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a style="width: 250px; margin-left: 460px; margin-top: 50px;" href="cart_add.php?id=15" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Купить весь пакет</a>
                                                <?php
                                            }
                                        }
                                        ?>
                </div>
                </div>
            </div>

            <div class="container">
                <div class="jumbotron2">
                    <h2 style="color: black; text-align:center; margin-bottom: 50px;">Дистрибуция</h2>
                    <div class="smm-shop-sale">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Запуск и управление таргетированной рекламой</h3> </a>
                                    <p>Цена: 10000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"><h3 style="color: black;">Организация выходов у лидеров мнений</h3></a>
                                    <p>Цена: 9000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <center>
                                <div class="caption">
                                <a href="cart.php"> <h3 style="color: black;">Посевы в тематических сообществах</h3></a>
                                    <p>Цена: 2200</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Добавить в корзину</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    </div>
                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Купить</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Добавлено в корзину</a>';
                                            }else{
                                                ?>
                                                <a style="width: 250px; margin-left: 460px; margin-top: 50px;" href="cart_add.php?id=16" class="btn btn-block smm-btn-bye " name="add" value="add" class="btn btn-block btr-primary">Купить весь пакет</a>
                                                <?php
                                            }
                                        }
                                        ?>
                </div>

                </div>
            </div>

            <div id="footer" class="footer-section">
			<div class="footer-bg">
				<div class="container">
					<div class="row">
						<div class="center-block">
							<p class="text-center">&copy; 2021 LYNEWEH</p>
						</div>
					</div>
				</div>
			</div>
		</div>

        </div>
        
    </body>
</html>
