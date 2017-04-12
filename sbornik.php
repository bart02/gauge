<?php define("pagename", "Сборник задач"); ?>
<?php require_once 'assets/headerv.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" integrity="sha384-wITovz90syo1dJWVh32uuETPVEtGigN07tkttEqPv+uR2SE/mbQcG7ATL28aI9H0" crossorigin="anonymous">
<?php require_once 'assets/headern.php'; ?>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                Простые 
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#sunday" onclick="titl(this)">В солнечный день</a></li>
                <li><a data-toggle="tab" href="#snimok" onclick="titl(this)">С помощью снимка</a></li>
                <li><a data-toggle="tab" href="#prymaya" onclick="titl(this)">Препятствие на прямой</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                Средние 
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#derevo" onclick="titl(this)">Высота дерева</a></li>
                <li><a data-toggle="tab" href="#prud" onclick="titl(this)">Диаметр пруда</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                Сложные 
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#angle" onclick="titl(this)">Определение величины угла</a></li>
                <li><a data-toggle="tab" href="#river" onclick="titl(this)">Измерение глубины реки</a></li>
            </ul>
        </li>
    </ul>

    <div class="tab-content">
        <div id="default" class="tab-pane fade in active">
            <h3>Как просмотреть задачи?</h3>
            <p>Для просмотра задач, используйте панель вкладок наверху</p>
        </div>
        <div id="sunday" class="tab-pane fade">
            <h3>В солнечный день</h3>
            <h4>Задача</h4>
            <p class="text-justify">Как по длине тени, падающей от дерева в солнечный день, определить высоту этого дерева?</p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#csunday">
                            Решение
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="csunday" class="panel-collapse collapse">
                    <div class="panel-body text-justify">
                        Так как лучи солнца можно считать практически параллельными, то тень от дерева во столько же раз длиннее тени от какого-либо шеста, во сколько раз дерево выше шеста. Поэтому, установив вертикально шест известной высоты а и, измерив отношение k длины тени от дерева к длине тени от шеста, мы вычислим искомую высоту дерева ka.
                    </div>
                </div>
            </div>
        </div>

        <div id="snimok" class="tab-pane fade">
            <h3>С помощью снимка</h3>
            <h4>Задача</h4>
            <p class="text-justify">
                В вашем городе установлен большой памятник. К вам в руки попала почтовая карточка с фотографией этого памятника, сделанной с почтительного расстояния от него. Можно ли воспользоваться этим снимком для определения высоты памятника?
            </p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#csnimok">
                            Решение
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="csnimok" class="panel-collapse collapse">
                    <div class="panel-body text-justify">
                        Для приблизительного нахождения высоты памятника по снимку можно выбрать две точки, расположенные у фундамента этого памятника, и измерить расстояние между ними на фотографии и на местности (второе расстояние нас интересует скорее не в чистом виде, а как проекция на прямую, перпендикулярную направлению, в котором был сфотографирован памятник). Найдя отношение k первого из расстояний ко второму, мы узнаем масштаб снимка, после чего останется замерить на нем высоту памятника и поделить ее на k.
                    </div>
                </div>
            </div>
        </div>

        <div id="prymaya" class="tab-pane fade">
            <h3>Препятствие на прямой</h3>
            <h4>Задача</h4>
            <p class="text-justify">
                Вам понадобилось измерить на местности расстояние между двумя объектами, разделенными зданием или другим препятствием, не позволяющим непосредственно проложить прямую между этими объектами. Как тем не менее можно произвести указанное измерение?
            </p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#cprymaya">
                            Решение
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="cprymaya" class="panel-collapse collapse">
                    <div class="panel-body text-justify">
                        <img src="images/prymaya.jpg" class="img-responsive pull-left img-thumbnail">
                        Пусть A и B — данные точки на местности, между которыми определяется расстояние. Выберем точку C, из которой видны обе точки A и B (рис. 13). На продолжении отрезка AC за точку C отметим точку D на расстоянии AC от точки C. Аналогично на продолжении отрезка BC за точку C отметим точку E, для которой CE=BC. Тогда отрезки ED и АВ равны, поскольку они симметричны относительно точки С. Если же из-за недостатка места точки E и D выйдут за пределы досягаемости, то их можно в определенное число раз приблизить к точке С. Тогда отрезок ED будет в то же число раз короче отрезка АВ, так как треугольники ABC и DEC будут подобны.
                    </div>
                </div>
            </div>
        </div>

        <div id="derevo" class="tab-pane fade">
            <h3>Высота дерева</h3>
            <h4>Задача</h4>
            <p class="text-justify">
                Укажите способ, как измерить высоту дерева, не взбираясь на него и не прибегая к помощи теней.
            </p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#cderevo">
                            Решение
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="cderevo" class="panel-collapse collapse">
                    <div class="panel-body text-justify">
                        <img src="images/derevo.jpg" class="img-responsive pull-left img-thumbnail">
                        Установив вертикальный шест на некотором расстоянии от дерева, нужно стать в такую точку, из которой верхний конец шеста загораживает в точности верхушку дерева. Тогда, если высота части шеста над уровнем глаз равна а, а расстояния от глаз по горизонтали до шеста и до дерева равны b и y соответственно, то из подобия треугольников можно найти высоту х дерева над уровнем глаз:
                        <div class="example tex" data-expr="\frac{a}{x} = \frac{b}{y}"></div>
                        <div class="example tex" data-expr="x = \frac{{ya}}{b}"></div>
                        Наконец, зная свой рост h до уровня глаз, получаем полную высоту дерева:
                        <div class="example tex" data-expr="h + x = h + \frac{{ya}}{b}"></div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#kderevo">
                            Калькулятор
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="kderevo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="example tex" data-expr="h + x = h + \frac{{ya}}{b}"></div>
                        <img src="images/derevo.jpg" class="img-responsive pull-left img-thumbnail" style="margin-bottom: 50px;">
                        <div class="input-group">
                            <span class="input-group-addon">a</span>
                            <input type="text" id="kderevoa" class="form-control" placeholder="Высота части шеста над уровнем глаз равна">
                        </div>
                        <br />
                        <div class="input-group">
                            <span class="input-group-addon">b</span>
                            <input type="text" id="kderevob" class="form-control" placeholder="Расстояния от глаз по горизонтали до шеста">
                        </div>
                        <br />
                        <div class="input-group">
                            <span class="input-group-addon">y</span>
                            <input type="text" id="kderevoy" class="form-control" placeholder="Расстояния от глаз по горизонтали до дерева">
                        </div>
                        <br />
                        <div class="input-group">
                            <span class="input-group-addon">h</span>
                            <input type="text" id="kderevoh" class="form-control" placeholder="Ваш рост">
                        </div>
                        <br />
                        <button type="submit" class="btn btn-default" onclick="rderevo();">Решить</button>
                        <br /><br />
                        <div class="example" id="frderevo"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="prud" class="tab-pane fade">
            <h3>Диаметр пруда</h3>
            <h4>Задача</h4>
            <p class="text-justify">
                Перед вами раскинулся огромный пруд круглой формы, обойти который по окружности вы не можете из-за имеющихся на его берегу различных препятствий в нескольких местах. Кроме того, вам представляется затруднительным измерять расстояние между какими-либо точками, если только соединяющий их отрезок проходит над водой. Можно ли при таких ограничениях измерить диаметр пруда?
            </p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#cprud">
                            Решение
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="cprud" class="panel-collapse collapse">
                    <div class="panel-body text-justify">
                        <img src="images/prud.jpg" class="img-responsive pull-left img-thumbnail">
                        Встав в точку A на некотором расстоянии от пруда (рис. 16), можно расположить перед собой горизонтальную палку длины a так, чтобы расстояния от обоих ее концов до одного глаза (второй глаз при этом лучше закрыть) были равны одному и тому же значению b, а сами концы палки зрительно совместились с крайними точками пруда, видимыми из точки А. Тогда, измерив расстояние у от А до ближайшей точки пруда по прямой, проходящей через середину палки, можно вычислить радиус х пруда, а значит, и его диаметр 2х. Действительно, из подобия соответствующих прямоугольных треугольников находим
                        <div class="example tex" data-expr="\frac{x}{{x + y}} = \frac{{{\textstyle{a \over 2}}}}{b}"></div>
                        <div class="example tex" data-expr="2bx = ax + ay"></div>
                        <div class="example tex" data-expr="x = y\frac{a}{{2b - a}}"></div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#kprud">
                            Калькулятор
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="kprud" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="example tex" data-expr="x = r"></div>
                        <div class="example tex" data-expr="r = y\frac{a}{{2b - a}}"></div>
                        <img src="images/prud.jpg" class="img-responsive pull-left img-thumbnail" style="margin-bottom: 50px;">
                        <div class="input-group">
                            <span class="input-group-addon">y</span>
                            <input type="text" id="kprudy" class="form-control" placeholder="Расстояние до ближайшей точки пруда">
                        </div>
                        <br />
                        <div class="input-group">
                            <span class="input-group-addon">a</span>
                            <input type="text" id="kpruda" class="form-control" placeholder="Длина палки">
                        </div>
                        <br />
                        <div class="input-group">
                            <span class="input-group-addon">b</span>
                            <input type="text" id="kprudb" class="form-control" placeholder="Расстояние от концов палки до глаза">
                        </div>
                        <br />
                        <button type="submit" class="btn btn-default" onclick="rprud();">Решить</button>
                        <br /><br />
                        <div class="example" id="frprud"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="angle" class="tab-pane fade">
            <h3>Определение величины угла</h3>
            <h4>Задача</h4>
            <p class="text-justify">Как определить угол солнца на местности?</p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#cangle">
                            Решение
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="cangle" class="panel-collapse collapse">
                    <div class="panel-body text-justify">
                        <img src="images/angle.jpg" class="img-responsive pull-left img-thumbnail">
                        Установив вертикально шест известной высоты AB и, измерив его тень AC, находим синус угла C
                        <div class="example tex" data-expr="\sin \angle C = \frac{{AB}}{{AC}}"></div>
                        AC находим по теореме Пифагора
                        <div class="example tex" data-expr="AC = \sqrt {AB^2 + BC^2}"></div>
                        <div class="example tex" data-expr="\sin \angle C = \frac{{AB}}{{\sqrt {AB^2 + BC^2}}}"></div>
                        Далее найдем арксинус синуса угла C и переведем его в градусы
                        <div class="example tex" data-expr="\angle x = \arcsin \left( \frac{{AB}}{{\sqrt {A{B^2} + B{C^2}}}} \right) * \frac{{{{180}^ \circ }}}{\pi }"></div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#kangle">
                            Калькулятор
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="kangle" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="example tex" data-expr="\angle x = \arcsin \left( \frac{{AB}}{{\sqrt {A{B^2} + B{C^2}}}} \right) * \frac{{{{180}^ \circ }}}{\pi }"></div>
                        <img src="images/angle.jpg" class="img-responsive pull-left img-thumbnail" style="margin-bottom: 50px;">
                        <div class="input-group">
                            <span class="input-group-addon">AB</span>
                            <input type="text" id="kangleab" class="form-control" placeholder="Высота шеста">
                        </div>
                        <br />
                        <div class="input-group">
                            <span class="input-group-addon">BC</span>
                            <input type="text" id="kanglebc" class="form-control" placeholder="Тень от шеста">
                        </div>
                        <br />
                        <button type="submit" class="btn btn-default" onclick="rangle();">Решить</button>
                        <br /><br />
                        <div class="example" id="frangle"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="river" class="tab-pane fade">
            <h3>Измерение глубины реки</h3>
            <h4>Задача</h4>
            <p class="text-justify">Как измерить глубину реки, оставаясь на берегу реки?</p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#criver">
                            Решение
                            <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="criver" class="panel-collapse collapse">
                    <div class="panel-body text-justify">
                        <img src="images/river.jpg" class="img-responsive pull-left img-thumbnail">
                        Известен такой способ. К грузилу привязывают две бечевки разной длины (пусть b и c), а на их концы поплавки. Всю эту конструкцию бросают в воду. Затем измеряют расстояние между поплавками (пусть оно равно a), когда их отнесёт течением. 
                        <div class="example tex" data-expr="p = \frac{{a + b + c}}{2}"></div>
                        <div class="example tex" data-expr="{S_{\Delta MNK}} = \sqrt {p(p - a)(p - b)(p - c)}"></div>
                        <div class="example tex" data-expr="{S_{\Delta MNK}} = \frac{{ah}}{2}"></div>
                        <div class="example tex" data-expr="\sqrt {p(p - a)(p - b)(p - c)} = \frac{{ah}}{2}"></div>
                        <div class="example tex" data-expr="h = \frac{{2\sqrt {p(p - a)(p - b)(p - c)} }}{a}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php require_once 'assets/footerv.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js" integrity="sha384-/y1Nn9+QQAipbNQWU65krzJralCnuOasHncUFXGkdwntGeSvQicrYkiUBwsgUqc1" crossorigin="anonymous"></script>
<script>
    //katex
    window.onload = function () {
        var b = document.getElementsByClassName("tex");
        Array.prototype.forEach.call(b, function (a) {
            katex.render(a.getAttribute("data-expr"), a)
        })
    };
    
    
    
    function getDecimal(a) {
        var b = "" + a, c = b.indexOf(".");
        if (-1 == c)
            return a;
        b = b.slice(c + 1);
        5 < b.length && (a = a.toFixed(5));
        return a
    }
    ;

    !function (a) {
        a(function () {
            var b = window.location.hash;
            a('.nav-tabs a[href="' + b + '"]').tab("show"), titl(a('.nav-tabs a[href="' + b + '"]'))
        })
    }(jQuery);

    function titl(obj) {
        if ($(obj).text() != "")
            document.title = $(obj).text() + " - " + "<?php echo $title; ?>"
    }
    
    
    
    
//calc
    function rprud() {
        var y = document.getElementById('kprudy').value;
        var a = document.getElementById('kpruda').value;
        var b = document.getElementById('kprudb').value;
        y = parseFloat(y);
        a = parseFloat(a);
        b = parseFloat(b);
        if (isNaN(y) || isNaN(a) || isNaN(b)) {
            alert("Проверьте правильность ввода полей");
            return;
        }
        var result = (y * a) / (2 * b - a);
        result = +result.toFixed(10);
        var dresult = getDecimal(result) * 1;
        if (result == dresult)
            var f = "r = " + y + "\\frac{" + a + "}{{2*" + b + " - " + a + "}} = " + dresult;
        else
            var f = "r = " + y + "\\frac{" + a + "}{{2*" + b + " - " + a + "}} \\approx " + dresult;
        katex.render(f, document.getElementById('frprud'));
    }

    function rderevo() {
        var a = document.getElementById('kderevoa').value;
        var b = document.getElementById('kderevob').value;
        var y = document.getElementById('kderevoy').value;
        var h = document.getElementById('kderevoh').value;
        y = parseFloat(y);
        a = parseFloat(a);
        b = parseFloat(b);
        h = parseFloat(h);
        if (isNaN(y) || isNaN(a) || isNaN(b) || isNaN(h)) {
            alert("Проверьте правильность ввода полей");
            return;
        }
        var result = h + (y * a) / b;
        result = +result.toFixed(10);
        var dresult = getDecimal(result) * 1;
        if (result == dresult)
            var f = "h + x = " + h + " + \\frac{" + y + " * " + a + "}{" + b + "} = " + dresult;
        else
            var f = "h + x = " + h + " + \\frac{" + y + " * " + a + "}{" + b + "} \\approx " + dresult;
        katex.render(f, document.getElementById('frderevo'));
    }
    
    
    function rangle() {
        var ab = document.getElementById('kangleab').value;
        var bc = document.getElementById('kanglebc').value;
        ab = parseFloat(ab);
        bc = parseFloat(bc);
        if (isNaN(ab) || isNaN(bc)) {
            alert("Проверьте правильность ввода полей");
            return;
        }
        var result = Math.asin(ab / Math.sqrt(ab*ab + bc*bc)) * (180 / Math.PI)
        result = +result.toFixed(10);
        var dresult = getDecimal(result) * 1;
        if (result == dresult)
            var f = "\\angle x = \\arcsin \\left( \\frac{{" + ab + "}}{{\\sqrt {" + ab + "^2 + " + bc + "^2}}} \\right) * \\frac{{{{180}^ \\circ }}}{\\pi } = " + dresult;
        else
            var f = "\\angle x = \\arcsin \\left( \\frac{{" + ab + "}}{{\\sqrt {" + ab + "^2 + " + bc + "^2}}} \\right) * \\frac{{{{180}^ \\circ }}}{\\pi } \\approx " + dresult;
        katex.render(f, document.getElementById('frangle'));
    }
</script>
<?php require_once 'assets/footern.php'; ?>
