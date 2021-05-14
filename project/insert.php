<?php
$host="localhost";
$db="admin_myblog";
$admin="zadmin_admin";
$adminpass="NFVOf1Qnnq";
$conn=@mysql_connect($host,$admin,$adminpass) or die("Mysql Baglanamadi");

mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");

$title = $_POST["title"];
$read = $_POST["read"];
$link = $_POST["link"];

		$sql = "insert into project (tit, txt, link) values('".$title."','".$read."','".$link."')";

if (mysql_query($sql))
			{
				echo "Kayıt Tamamlandı !";
				header("location: ".$_SERVER['HTTP_REFERER']."");  
			}
			else
			{
				echo "Hata : 0x0001";
			}

?>
