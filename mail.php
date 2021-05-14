<?php
$host="localhost";
$db="admin_myblog";
$admin="admin_admin";
$adminpass="NFVOf1Qnnq";
$conn=@mysql_connect($host,$admin,$adminpass) or die("Mysql Baglanamadi");
 
mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");

$a = $_POST["name"];
$b = $_POST["mail"];
$c = $_POST["message"];

		$sql = "insert into mail (name, mail, message) values('".$a."','".$b."','".$c."')";

if (mysql_query($sql))
			{
				header("location: http://berksemerci.com/mailing");  
			}
			else
			{
				echo "Hata : 0x0001"; 
			}

?>