<?php
unlink('counterr.txt');
$fp = fopen("counterr.txt", "a"); 
$mytext = "Это строку необходимо нам записать\r\n";
$test = fwrite($fp, $mytext);
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fp);
echo "\n\n"
?>