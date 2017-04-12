<?php define("pagename", "Главная"); ?>

<?php require_once 'assets/headerv.php'; ?>
<?php require_once 'assets/headern.php'; ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Здравствуйте!</h1>
        <p class="text-justify">Для нахождения расстояний, высот, глубин или других размеров реальных объектов не всегда можно обойтись непосредственным их измерением — во многих случаях такие измерения сопряжены с определенными трудностями, а то и вообще практически невозможны. Однако в своей деятельности человеку приходится порой задумываться над тем, как все-таки можно определить интересующую его величину и как сделать это поточнее.</p>
        <p>Поэтому приветствуем вас на сайте "<?php echo sitename; ?>".</p>
        <p>Внизу вы увидете возможности сайта.</p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-6">
            <h2>Сборник</h2>
            <p>В этом разделе вы найдете задачи по данной теме, а также их решения.</p>
            <p><a class="btn btn-default" href="sbornik.php" role="button">Посмотреть &raquo;</a></p>
        </div>
        <div class="col-md-6">
            <h2>Калькуляторы</h2>
            <p>В Сборнике, на некоторые задачи работают калькуляторы, с помощью которых, введя данные, вы можете получить необходимое вам растояние.</p>
            <p><a class="btn btn-default" href="sbornik.php" role="button">Посмотреть &raquo;</a></p>
        </div>
        <!--<div class="col-md-4">
            <h2>Информация</h2>
            <p>Информация об авторе и данном проекте.</p>
            <p><a class="btn btn-default" href="#" role="button">Посмотреть &raquo;</a></p>
        </div>-->
    </div>
</div>
<?php require_once 'assets/footerv.php';?>
<?php require_once 'assets/footern.php';?>
