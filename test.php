<?php define("pagename", "Тест"); ?>

<?php require_once 'assets/headerv.php'; ?>
<?php require_once 'assets/headern.php'; ?>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#1">Задача 1</a></li>
        <li><a data-toggle="tab" href="#2">Задача 2</a></li>
        <li><a data-toggle="tab" href="#3">Задача 3</a></li>
        <li><a data-toggle="tab" href="#4" onclick="end();">Задача 4</a></li>
    </ul>

    <div class="tab-content">
        <div id="1" class="tab-pane fade in active">
            <h3>Проектор</h3>
            <?php
            $a = rand(1, 100);
            $b = rand(50, 500);
            $c = rand(100, 500);
            ?>
            <img src="images/test/test1.php?a=<?php echo $b ?>&b=<?php echo $a ?>&c=<?php echo $c ?>" class="img-responsive pull-left img-thumbnail">
            <p class="text-justify">Проектор полностью освещает экран A высотой <?php echo $a ?> см, расположенный на расстоянии <?php echo $b ?> см от проектора. На каком наименьшем расстоянии (в сантиметрах) от проектора нужно расположить экран B высотой <?php echo $c ?> см, чтобы он был полностью освещён, если настройки проектора остаются неизменными? (Ответ округлить до целых)</p>
            <div class="input-group col-xs-12 col-sm-6 col-md-4">
                <span class="input-group-addon">Ответ:</span>
                <input type="number" id="o1" class="form-control" >
                <span class="input-group-addon">см</span>
            </div>
        </div>

        <div id="2" class="tab-pane fade">
            <h3>Высота фонаря</h3>
            <img src="images/test/test2.png" class="img-responsive pull-left img-thumbnail">
            <p class="text-justify">Человек ростом 1,7 м (FE) стоит на расстоянии 8 шагов от столба, на котором висит фонарь (AC). Тень человека (EB) равна 4 шагам. На какой высоте (в метрах) расположен фонарь? (Ответ округлить до целых)</p>
            <div class="input-group col-xs-12 col-sm-6 col-md-4">
                <span class="input-group-addon">Ответ:</span>
                <input type="number" id="o2" class="form-control" >
                <span class="input-group-addon">см</span>
            </div>
        </div>

        <div id="3" class="tab-pane fade">
            <h3>Высота фонаря</h3>
            <img src="images/test/test3.png" class="img-responsive pull-left img-thumbnail">
            <p class="text-justify">На каком расстоянии (в метрах) от фонаря стоит человек ростом 2 м, если длина его тени равна 1 м, высота фонаря 9 м? (Ответ округлить до целых)</p>
            <div class="input-group col-xs-12 col-sm-6 col-md-4">
                <span class="input-group-addon">Ответ:</span>
                <input type="number" id="o3" class="form-control" >
                <span class="input-group-addon">см</span>
            </div>
        </div>

        <div id="4" class="tab-pane fade">
            <h3>Высота фонаря</h3>
            <p class="text-justify">Человек, рост которого равен 1,8 м, стоит на расстоянии 16 м от уличного фонаря. При этом длина тени человека равна 9 м. Определите высоту фонаря (в метрах). (Ответ округлить до целых)</p>
            <img src="images/test/test4.png" class="img-responsive center-block img-thumbnail">
            <br />
            <div class="input-group col-xs-12 col-sm-6 col-md-4 text-center">
                <span class="input-group-addon">Ответ:</span>
                <input type="number" id="o4" class="form-control" >
                <span class="input-group-addon">см</span>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 15px;"><button type="button" id="end" class="btn btn-primary center-block disabled" data-toggle="tooltip" title="Для окончания теста перейдите к последней задаче" data-placement="bottom">Закончить тест</button></div>

<?php require_once 'assets/footerv.php'; ?>
<!-- Скрипт для инициализации элементов на странице, имеющих атрибут data-toggle="tooltip" -->
<script>
// после загрузки страницы
    $(function () {
        // инициализировать все элементы на страницы, имеющих атрибут data-toggle="tooltip", как компоненты tooltip
        $('[data-toggle="tooltip"]').tooltip()
    })

    function end() {
        document.getElementById("end").classList.remove("disabled");
        document.getElementById("end").removeAttribute("data-original-title");
        document.getElementById("end").setAttribute("onclick", "proverka();");
    }

    function declOfNum(number, titles) {
        var cases = [2, 0, 1, 1, 1, 2];
        return titles[ (number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5] ];
    }


    function proverka() {
        var o1 = parseInt(document.getElementById('o1').value);
        var o2 = parseInt(document.getElementById('o2').value);
        var o3 = parseInt(document.getElementById('o3').value);
        var o4 = parseInt(document.getElementById('o4').value);
        if (isNaN(o1) || isNaN(o2) || isNaN(o3) || isNaN(o4)) {
            if (confirm("Вы не заполнили все поля.\n\Вы действительно хотите продолжить?") == false) return;
        }
        var oo1 = <?php echo $c ?> / <?php echo $a ?> * <?php echo $b ?>;
        var ball = 0;
        if (o1 == oo1.toFixed())
            ball = ball + 1;
        if (o2 == 5)
            ball = ball + 1;
        if (o3 == 4)
            ball = ball + 1;
        if (o4 == 5)
            ball = ball + 1;
        alert("Вы заработали " + ball + " " + declOfNum(ball, ['балл', 'балла', 'баллов']));
        location.reload();
    }
</script>
<?php require_once 'assets/footern.php'; ?>