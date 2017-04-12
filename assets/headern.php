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
                        <li <?php if ($_SERVER['PHP_SELF'] == "/test.php") { ?> class="active"<?php } ?> ><a href="/test.php">Тест</a></li>
                        <!--<li <?php if ($_SERVER['PHP_SELF'] == "/calc.php") { ?> class="active"<?php } ?> ><a href="/calc.php">Калькуляторы</a></li>-->
                        <!--<li <?php if ($_SERVER['PHP_SELF'] == "/info.php") { ?> class="active"<?php } ?> ><a href="/info.php">Информация</a></li>-->
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
        