<?php
/* Принимаем данные из формы */
$name = $_POST["name"]; 
$email = $_POST["email"];
$message = $_POST["message"];

/* Подключаемся к базе данных */
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "praktika");

/* Записывает данные */ 
$sql = "SELECT id, name, email, comment FROM comment ORDER BY id";
$result = mysqli_query($link, $sql);

while ($line=mysqli_affected_rows($result)){
	echo "<p style='border-top: 3px solid #fbff00; padding: 2%; color: #fbff00;'>$line[1] <span style='color:#444444'>$line[2]</span> </p"
	echo "<p style='padding: 2%; color: aliceblue;'>$line[3]</p><br>";
	}

if (isset($_POST['send'])) {
	$sql = "INSERT INTO comments(name, email, comment) VALUES ('$name', '$email', '$message')";
	$result = mysqli_query($link, $sql);
	header('location: back.php')
}

/* Делаем редирект обратно */
header("Location: " . $_SERVER["HTTP_REFERER"]); 
exit;

?>