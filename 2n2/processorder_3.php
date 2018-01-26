<?php
require('header.inc');
?>
<meta charset="windows-1251">
<?php
//Создать короткие имена переменных
$name = $_POST['name'];
$e-mail = $_POST['e-mail'];
$message = $_POST['message'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

//подключаемся к базе данных
$hostname="localhost";
$user="root";
$password="123";
$db="kirillov";

if(!$link = mysql_connect($hostname, $user, $password))
{
//echo "<br> не могу соединиться с сервером базы данных <br>";
exit();
}
echo "<br> Соединение с сервером базы данных прошло успешно <br>";

if (!mysql_select_db($db, $link))
{
//echo "<br> не могу выбрать базу данных <br>";
exit();
}
else
{
//echo "<br> выбор базы данных прошел успешно <br>";
}

?>


<?php



define('name', 100);
define('e-mail', 100);
define('message', 100);

$date = date('H:i, js F');




$query="insert into zakaz (fio,address,data) values ('$fio', '$address', '$date_1')";
$result=mysql_query ($query);

$query_1="select zakaz.id from zakaz where zakaz.fio ='$fio' ";
$result_1= mysql_query ($query_1);

while ($row=mysql_fetch_array ($result_1)) 
{
$id=$row["id"];
}

$query ="insert into tovar (id,tireqty,oilqty,sparkqty) values ('$id','$tireqty','$oilqty','$sparkqty')";
$result=mysql_query ($query);

echo '<p>Заказ сохранен.<p/>';

?>

<a href = "vieworders_3.php"> Интерфейс персонала для просмотра	файла заказов </a>

</body>
</html>
<?php
require('footer.inc');
?>

