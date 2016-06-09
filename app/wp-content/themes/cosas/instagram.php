<?php
function actualiza($id,$url,$likes,$comments,$link,$mysqli){
  $result_url = $mysqli->query('UPDATE instagram_fotos SET url = "'.$url.'" ,likes = "'.$likes.'", comments="'.$comments.'", link="'.$link.'" WHERE id ='.$id.' ');
}

function actualiza_fotos($mysqli){
    $client_id = '55672867.d9e010f.5413c2d00e404b2aa24e012d58f4c8fc';
    $json_user_url='https://api.instagram.com/v1/users/55672867/media/recent/?access_token='.$client_id;
    $json_user= @file_get_contents($json_user_url);
    $links_user_url= json_decode($json_user);
    $count_media_recent= count($links_user_url->data);
    $i=0;
    do{
          $id=$i+1;
          $url=$links_user_url->data[$i]->images->low_resolution->url;
          $likes=$links_user_url->data[$i]->likes->count;
          $comments=$links_user_url->data[$i]->comments->count;
          $link=$links_user_url->data[$i]->link;
          actualiza($id,$url,$likes,$comments,$link,$mysqli);
          $i++;
    }while($i<$count_media_recent);
    return $insta_array;
}


//Obtengo Conexión
$mysqli = mysqli_connect('localhost','cosas_user','p6lt?w0t1r^w','cosas_content') or die("Error " . mysqli_error($link)); 
$mysqli->set_charset('utf8_bin');

//Actualizo en BD
date_default_timezone_set('America/Santiago');
if(date('H')>'8' && date('H')<'14'){
  $result = $mysqli->query("SELECT DISTINCT renueva FROM instagram_fotos");
  $row= mysqli_fetch_array($result, MYSQLI_BOTH); 
  if($row[0]=='0'){
    actualiza_fotos($mysqli);
    $result2 = $mysqli->query("UPDATE instagram_fotos SET renueva='1'");
  }
}elseif(date('H')>='14' && date('H')<'18'){
  $result = $mysqli->query("SELECT DISTINCT renueva FROM instagram_fotos");
  $row= mysqli_fetch_array($result, MYSQLI_BOTH); 
  if($row[0]=='1'||$row[0]=='0'){
    actualiza_fotos($mysqli);
    $result2 = $mysqli->query("UPDATE instagram_fotos SET renueva='0'");
  }
}


$result = $mysqli->query("SELECT * FROM instagram_fotos ORDER by likes DESC ");
$row= mysqli_fetch_array($result, MYSQLI_BOTH);

//Muestro Datos
$rango_grandes = range(0, 4);   //rango para el random
shuffle($rango_grandes);        //guardo aleatoriamente en array
$rango_chicas = range(5, 19);   //rango para el random
shuffle($rango_chicas);        //guardo aleatoriamente en array
$i=0;
do{
  if($i==$rango_grandes[0]){
    $url_imagen1 = $row['url'];
    $likes_imagen1=$row['likes'];
    $comments_imagen1=$row['comments'];
      $link_imagen1=$row[4];
  }else if($i==$rango_grandes[1]){
    $url_imagen2 = $row['url'];
    $likes_imagen2=$row['likes'];
    $comments_imagen2=$row['comments'];
      $link_imagen2=$row[4];
  }else if($i==$rango_grandes[2]){
    $url_imagen3 = $row['url'];
    $likes_imagen3=$row['likes'];
    $comments_imagen3=$row['comments'];
      $link_imagen3=$row[4];
  }else if($i==$rango_chicas[0]){
    $url_imagen_chica1=$row['url'];
    $likes_imagen_chica1=$row['likes'];
    $comments_imagen_chica1=$row['comments'];
      $link_imagen_chica1=$row[4];
  }else if($i==$rango_chicas[1]){
    $url_imagen_chica1=$row['url'];
    $likes_imagen_chica1=$row['likes'];
    $comments_imagen_chica1=$row['comments'];
      $link_imagen_chica1=$row[4];
  }else if($i==$rango_chicas[2]){
    $url_imagen_chica2=$row['url'];
    $likes_imagen_chica2=$row['likes'];
    $comments_imagen_chica2=$row['comments'];
      $link_imagen_chica2=$row[4];
  }else if($i==$rango_chicas[3]){
    $url_imagen_chica3=$row['url'];
    $likes_imagen_chica3=$row['likes'];
    $comments_imagen_chica3=$row['comments'];
      $link_imagen_chica3=$row[4];
  }else if($i==$rango_chicas[4]){
    $url_imagen_chica4=$row['url'];
    $likes_imagen_chica4=$row['likes'];
    $comments_imagen_chica4=$row['comments'];
      $link_imagen_chica4=$row[4];
  }else if($i==$rango_chicas[5]){
    $url_imagen_chica5=$row['url'];
    $likes_imagen_chica5=$row['likes'];
    $comments_imagen_chica5=$row['comments'];
      $link_imagen_chica5=$row[4];
  }else if($i==$rango_chicas[6]){
    $url_imagen_chica6=$row['url'];
    $likes_imagen_chica6=$row['likes'];
    $comments_imagen_chica6=$row['comments'];
      $link_imagen_chica6=$row[4];
  }else if($i==$rango_chicas[7]){
    $url_imagen_chica7=$row['url'];
    $likes_imagen_chica7=$row['likes'];
    $comments_imagen_chica7=$row['comments'];
      $link_imagen_chica7=$row[4];
  }else if($i==$rango_chicas[8]){
    $url_imagen_chica8=$row['url'];
    $likes_imagen_chica8=$row['likes'];
    $comments_imagen_chica8=$row['comments'];
      $link_imagen_chica8=$row[4];
  }else if($i==$rango_chicas[9]){
    $url_imagen_chica9=$row['url'];
    $likes_imagen_chica9=$row['likes'];
    $comments_imagen_chica9=$row['comments'];
      $link_imagen_chica9=$row[4];
  }else if($i==$rango_chicas[10]){
    $url_imagen_chica10=$row['url'];
    $likes_imagen_chica10=$row['likes'];
    $comments_imagen_chica10=$row['comments'];
      $link_imagen_chica10=$row[4];
  }else if($i==$rango_chicas[11]){
    $url_imagen_chica11=$row['url'];
    $likes_imagen_chica11=$row['likes'];
    $comments_imagen_chica11=$row['comments'];
      $link_imagen_chica11=$row[4];
  }else if($i==$rango_chicas[12]){
    $url_imagen_chica12=$row['url'];
    $likes_imagen_chica12=$row['likes'];
    $comments_imagen_chica12=$row['comments'];
      $link_imagen_chica12=$row[4];
  }else if($i==$rango_chicas[13]){
    $url_imagen_chica13=$row['url'];
    $likes_imagen_chica13=$row['likes'];
    $comments_imagen_chica13=$row['comments'];
      $link_imagen_chica13=$row[4];
  }

  $i++;
}while($row=mysqli_fetch_array($result));
echo "<div class='gridInst insBig' style='background-image:url(".$url_imagen2.")'><div class='instaHover'><a href='".$link_imagen2."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen2."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen2."</span></a></div></div>";

echo "<div class='gridInst instSmall1' style='background-image:url(".$url_imagen_chica1.")'><div class='instaHover'><a href='".$link_imagen_chica1."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica1."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica1."</span></a></div></div>";
echo "<div class='gridInst instSmall2' style='background-image:url(".$url_imagen_chica2.")'><div class='instaHover'><a href='".$link_imagen_chica2."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica2."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica2."</span></a></div></div>";
echo "<div class='gridInst instSmall3' style='background-image:url(".$url_imagen_chica3.")'><div class='instaHover'><a href='".$link_imagen_chica3."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica3."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica3."</span></a></div></div>";

echo "<div class='gridInst insBig' style='background-image:url(".$url_imagen1.")'><div class='instaHover'><a href='".$link_imagen1."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen1."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen1."</span></a></div></div>";

echo "<div class='gridInst instSmall4' style='background-image:url(".$url_imagen_chica4.")'><div class='instaHover'><a href='".$link_imagen_chica4."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica4."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica4."</span></a></div></div>";
echo "<div class='gridInst instSmall5' style='background-image:url(".$url_imagen_chica5.")'><div class='instaHover'><a href='".$link_imagen_chica5."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica5."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica5."</span></a></div></div>";
echo "<div class='gridInst instSmall6' style='background-image:url(".$url_imagen_chica6.")'><div class='instaHover'><a href='".$link_imagen_chica6."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica6."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica6."</span></a></div></div>";
echo "<div class='gridInst instSmall7' style='background-image:url(".$url_imagen_chica7.")'><div class='instaHover'><a href='".$link_imagen_chica7."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica7."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica7."</span></a></div></div>";

echo "<div class='gridInst instSmall8' style='background-image:url(".$url_imagen_chica8.")'><div class='instaHover'><a href='".$link_imagen_chica8."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica8."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica8."</span></a></div></div>";

echo "<div class='gridInst insBig' style='background-image:url(".$url_imagen3.")'><div class='instaHover'><a href='".$link_imagen3."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen3."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen3."</span></a></div></div>";

echo "<div class='gridInst instSmall9' style='background-image:url(".$url_imagen_chica9.")'><div class='instaHover'><a href='".$link_imagen_chica9."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica9."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica9."</span></a></div></div>";
echo "<div class='gridInst instSmall10' style='background-image:url(".$url_imagen_chica10.")'><div class='instaHover'><a href='".$link_imagen_chica10."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica10."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica10."</span></a></div></div>";
echo "<div class='gridInst instSmall11' style='background-image:url(".$url_imagen_chica11.")'><div class='instaHover'><a href='".$link_imagen_chica11."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica11."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica11."</span></a></div></div>";
echo "<div class='gridInst instSmall12' style='background-image:url(".$url_imagen_chica12.")'><div class='instaHover'><a href='".$link_imagen_chica12."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica12."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica12."</span></a></div></div>";
echo "<div class='gridInst instSmall13' style='background-image:url(".$url_imagen_chica13.")'><div class='instaHover'><a href='".$link_imagen_chica13."' target='_blank'><span><i class='fa fa-heart'></i> ".$likes_imagen_chica13."</span> <span><i class='fa fa-comment'></i> ".$comments_imagen_chica13."</span></a></div></div>";
?>