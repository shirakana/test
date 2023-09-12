<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$pdo ->exec("insert into keijiban(hundlename,title,comments) values('".$_POST['hundlename']."','".$_POST['title']."','".$_POST['comments']."');");
header("Location:http://localhost/keijiban/index.php");
?>