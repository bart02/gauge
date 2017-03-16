        <div class="container">
            <hr>

            <footer>
                <p>&copy; <?php echo sitename; ?> - 2017
                    <span class="pull-right">Разработка сайта <a href="https://vk.com/bart02" target="_blank" rel="nofollow">Баталов Артем</a></span></p>
            </footer>
        </div> <!-- /container -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script><?php echo @$footerscript; ?></script>
        
        
        
        <?php if ($_SERVER['PHP_SELF'] == "/sbornik.php") { ?>
        <!--calc-->
        <script>
        function rprud() {
            var y = document.getElementById('y').value;
            var a = document.getElementById('a').value;
            var b = document.getElementById('b').value;
            y = parseFloat(y);
            a = parseFloat(a);
            b = parseFloat(b);
            if (isNaN(y) || isNaN(a) || isNaN(b)) {
                return;
            }
            var result = (y*a)/(2*b-a);
            result = +result.toFixed(10);
            var dresult = getDecimal(result) * 1;
            if (result == dresult) var f = "r = " + y + "\\frac{" + a + "}{{2*" + b + " - " + a + "}} = " + dresult;
            else var f = "r = " + y + "\\frac{" + a + "}{{2*" + b + " - " + a + "}} \\approx " + dresult;
            katex.render(f, document.getElementById('frprud'));
        }
        </script>
        <?php } ?>
    </body>
</html>