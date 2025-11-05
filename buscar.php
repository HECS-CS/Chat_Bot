<?php
$p = $_POST['mensaje'];
if ($p != "") {
  $usuario = "if0_39324056";
  $contrabd = "H336xsxPfDVaa0";
  $nbd = "if0_39324056";
  $s = "sql207.infinityfree.com";
  $conex = mysqli_connect($s, $usuario, $contrabd, $nbd);
  if ($conex == true) {
    $insert = "SELECT respuesta FROM respuestas WHERE pregunta LIKE '%$p%' ";
    $r = mysqli_query($conex, $insert);
    foreach ($r as $fila) {
      echo $fila['respuesta'];
    }
  }
  else {
    echo "no";
  }
}
else {
  echo "no has preguntado nada";
}
?>
