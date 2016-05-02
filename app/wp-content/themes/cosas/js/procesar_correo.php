<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

$mysqli = mysqli_connect('localhost','cosas_user','p6lt?w0t1r^w','cosas_content') or die("Error " . mysqli_error($link)); 
//$mysqli = mysqli_connect('localhost','root','root','cosas1') or die("Error " . mysqli_error($link));
$mysqli->set_charset('utf8_bin');
$results = $mysqli->query("INSERT INTO newsletter_cosas (nombre,correo) VALUES ('".$nombre."','".$correo."')");
if($results){
	echo 'exito';
}else{
	echo 'false';
}
?>