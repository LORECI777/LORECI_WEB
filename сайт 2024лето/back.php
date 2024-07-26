<!DOCTYPE html>
<html>
<head>
    <title>Моя первая веб-страничка</title>
    <link rel="stylesheet" type="text/css" href="stilll.css"> 
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>

<body>
<header>
    <img src="logo1.jpeg" width="150" align="left" hspace="50">
    <h1 align=center>Добро пожаловать в магазин LORECI</h1>
</header>

<div id="menu">
<ul>
    <li><h5><a href="loreci.html">&raquo; Главная</a></h5></li>
    <li><h5><a href="onas.html">&raquo; О нас</a></h5></li>
    <li><h5><a href="cont.html">&raquo; Контакты</a></h5></li>
    <li><h5><a href="back.html">&raquo; Обратная связь</a></h5></li>
</ul>

</div>

<main>
<h2><i>ОБРАТНАЯ СВЯЗЬ:</i></h2>
<form name="form1" method="post" action="test.php">
    <p>Имя: <input type="text" name="name" placeholder="Введите имя"/></p>
    <p>Ваш Email: <input type="text" name="email" placeholder="Введите email"/></p>
    <p>Сообщение <textarea name="message" placeholder="Введите сообщение"></textarea> (поле сообщения)</p>
    <p><input type="submit" value="Отправить"></p>
</form>

<?php
/* Подключаемся к базе данных */
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "praktika");

/* Выбираем данные */
$sql = "SELECT name, email, message FROM base";
$result = mysqli_query($link, $sql);

while ($line = mysqli_fetch_row($result)) {
    echo "<b>Имя:</b>" . $line . "<br>";
    echo "<b>Email:</b>" . $line . "<br>";
    echo "<b>Сообщение:</b>" . $line . "<br><br>";
}
?>

</main>
</body>
</html>