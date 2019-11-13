<html>
<body>
<form method="GET">
Имя: <input type="text" name="name">
Фамилия: <input type="text" name="surname">
<input type="submit" value="Отправить">
</form>

<?php
echo "<br/>name = ". $_GET['name'];
echo "<br/>surname = ". $_GET['surname'];
?>
</body>
</html>