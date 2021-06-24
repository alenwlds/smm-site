<nav class=" navbar-inverse navabar-fixed-top">

               <div id="sticky-menu" class="sticky-navigation">
				<div class="logo-container">
					<div class="container">
						<div class="row">
							<div id="navigation" class="col-md-8 navbar top-navbar no-padding">
								<div class="navbar-header nav-respons">
									<button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<nav id="myNavbar" role="navigation" class="collapse smm-nav navbar-collapse bs-navbar-collapse no-padding">
									<ul class="nav navbar-nav navbar-left uppercase">
										<li><a href="#about" class="scroll">Главная</a></li>
										<li><a href="#services" class="scroll">Условия</a></li>
                                        <li><a href="#pricing" class="scroll">Услуги</a></li>
										<li><a href="#reviews" class="scroll">Отзывы</a></li>
										<li><a href="#contact-us" class="scroll">Контакты</a></li>
									</ul>

                                    <ul class="nav navbar-nav navbar-right uppercase">
                                    <?php
                                if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php" class="scroll" ><span class="glyphicon glyphicon-shopping-cart"></span> Корзина</a></li>
                           <li><a href="settings.php" class="scroll"><span class="glyphicon glyphicon-cog"></span> Настройки</a></li>
                           <li><a href="logout.php" class="scroll"><span class="glyphicon glyphicon-log-out"></span> Выйти</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php" class="scroll" ><span class="glyphicon glyphicon-user"></span>Зарегистрироваться</a></li>
                           <li><a href="login.php" class="scroll" ><span class="glyphicon glyphicon-log-in"></span>Войти</a></li>
                           <?php
                           }
                           ?>
                                    </ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
</nav>