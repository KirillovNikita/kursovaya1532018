<?php
require('header.inc');
?>
<meta charset="windows-1251">
<?php
//������� �������� ����� ����������
$name = $_POST['name'];
$e-mail = $_POST['e-mail'];
$message = $_POST['message'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

//������������ � ���� ������
$hostname="localhost";
$user="root";
$password="123";
$db="kirillov";

if(!$link = mysql_connect($hostname, $user, $password))
{
//echo "<br> �� ���� ����������� � �������� ���� ������ <br>";
exit();
}
echo "<br> ���������� � �������� ���� ������ ������ ������� <br>";

if (!mysql_select_db($db, $link))
{
//echo "<br> �� ���� ������� ���� ������ <br>";
exit();
}
else
{
//echo "<br> ����� ���� ������ ������ ������� <br>";
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

echo '<p>����� ��������.<p/>';

?>

<a href = "vieworders_3.php"> ��������� ��������� ��� ���������	����� ������� </a>

</body>
</html>
<?php
require('footer.inc');
?>

