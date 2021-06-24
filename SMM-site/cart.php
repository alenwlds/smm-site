<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
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
            require 'header3.php';
           ?>
            <br>
            
            <div class="container ">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th style="color: black;">Номер услуги</th><th style="color: black;">Название услуги</th><th style="color: black;">Стоимость</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th style="color: black;"><?php echo $counter ?></th><th style="color: black;"><?php echo $row['name']?></th><th style="color: black;"><?php echo $row['price']?></th>
                            <th><a style="color: #8751af8c;" href='cart_remove.php?id=<?php echo $row['id'] ?>'>Удалить</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th style="color: black;">Общая сумма</th><th style="color: black;"> <?php echo $sum;?>₽</th><th><a href="success.php?id=<?php echo $user_id?>" class="btn smm-btn-bye">Купить</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br>
           
        </div>
    </body>
</html>
