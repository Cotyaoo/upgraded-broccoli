<html>
<body>
<form method="post">
    Имя:  <input type="text" name="username" /><br />
   <!-- Email: <input type="text" name="email" /><br /> -->
    <input type="submit" name="submit" value="Отправь меня!" />
</form>
<?php
echo $_POST['username'];
?>
</body>
</html>