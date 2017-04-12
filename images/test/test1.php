<?php
$img="test1.jpg";
$pic = ImageCreateFromjpeg($img); //открываем рисунок в формате JPEG
Header("Content-type: image/jpeg"); //указываем на тип передаваемых данных
$color=ImageColorAllocate($pic, 0, 0, 0); //получаем идентификатор цвета
/* определяем место размещения текста по вертикали и горизонтали */
$font = "../../assets/Arial-Regular.ttf";
/* выводим текст на изображение */
ImageTTFtext($pic, 11, 0, 60, 218, $color, $font, $_GET['a'] . " см");
ImageTTFtext($pic, 11, 0, 155, 85, $color, $font, $_GET['b'] . " см");
ImageTTFtext($pic, 11, 0, 245, 70, $color, $font, $_GET['c'] . " см");
Imagejpeg($pic); //сохраняем рисунок в формате JPEG
ImageDestroy($pic); //освобождаем память и закрываем изображение
?>