<?php  require 'test_login.php'; ?>

<head>
    <meta charset="utf-8" />

    <title>Trip by auto</title>
	
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/font-awesome.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/site.css" rel="stylesheet">
    
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/jquery.form.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/main.js"></script>
    
    <style>
   body {
    background: url(public/images/2.jpg) no-repeat fixed;
    background-size: 100%;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    color: #fff;
   }
    </style>
    </head>
<body>  
    
   <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">TBAuto</a>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <li><a href="rent.php">Аренда</a></li>
                    <li><a href="perevozki.php">Перевозки</a></li>
                </ul>
                <?php
                if (isset($_SESSION['id']) )
                {
                    ?>
                    <a href="admin.php"></a>
                    <form
                    class="navbar-form navbar-right hidden-sm">
                    <div  class="form-group"
                         style="color: greenyellow;">Вы авторизированы
                            <button type="submit" name="logout" class="form-control" class="btn btn-primary" value="<?php require 'logout.php'?>">
                            <i class="fa fa-sign-in"></i> Выход
                                </button>
                    </div>
            </form>
                    <?php
                }
                else
                {
                ?>    
                <form method="post" action="#" 
                      class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <input type="text" name="login" class="form-control" placeholder="Имя пользователя" required value="<?php echo @$data['login']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Пароль" required value="<?php echo @$data['password']; ?>">
                    </div>
                    <button type="submit" name="enter" value="Enter" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i> Войти
                    </button>
                </form>
                <?php  } ?>
            </div>
        </div>
    </div>
    <img src="/public/images/1.jpg" alt="" width="100%">
           
    
    
    