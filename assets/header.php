<?php require_once 'const.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php if (defined("pagename")): @$title .= pagename . " - ";  endif; @$title .= sitename; echo $title?></title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><?php echo strtoupper($_SERVER['SERVER_NAME']); ?></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--Элемент с классом active отображает ссылку подсвеченной -->
                        <li <?php if ($_SERVER['PHP_SELF'] == "/index.php") { ?> class="active"<?php } ?> ><a href="/">Главная</a></li>
                        <li <?php if ($_SERVER['PHP_SELF'] == "/sbornik.php") { ?> class="active"<?php } ?> ><a href="/sbornik.php">Сборник задач</a></li>
                        <!--<li <?php if ($_SERVER['PHP_SELF'] == "/calc.php") { ?> class="active"<?php } ?> ><a href="/calc.php">Калькуляторы</a></li>-->
                        <li <?php if ($_SERVER['PHP_SELF'] == "/info.php") { ?> class="active"<?php } ?> ><a href="/info.php">Информация</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>