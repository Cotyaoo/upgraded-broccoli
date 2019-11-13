<?php
$filename = 'counterr.txt';
$fp = fopen($filename, "r"); // Открываем файл в режиме записи
$content = fread($fp, filesize($filename));
fclose($fp); //Закрытие файла
echo "$content"
?>