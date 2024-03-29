<?php
	$tenmaychu = 'localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='db_epicgames';
	$conn=new MySQLi($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	$conn->select_db($csdl) or die('Chưa có CSDL');
	$conn->query("SET NAMES 'utf8'");
?>