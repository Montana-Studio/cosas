<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

//$mysqli = mysqli_connect('localhost','root','root','cosas1') or die("Error " . mysqli_error($link));

if($nombre == null || $correo == null || $nombre == '' || $correo == ''){
	echo 'false';
}else{
	$mysqli = mysqli_connect('localhost','cosas_user','p6lt?w0t1r^w','cosas_content') or die("Error " . mysqli_error($link)); 
	$mysqli->set_charset('utf8_bin');
	$query_existe = $mysqli->query("SELECT * FROM newsletter_casas WHERE correo = '".$correo."'");
	 $row_count_existe = $query_existe->num_rows;

	 if($row_count_existe>0){
	 	echo 'existe';
	 }else{
	 	$results = $mysqli->query("INSERT INTO newsletter_casas (nombre,correo) VALUES ('".$nombre."','".$correo."')");
		if($results){
			echo 'exito';
		}else{
			echo 'false';
		}
	 }
}
?>