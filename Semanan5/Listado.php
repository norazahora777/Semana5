<!DOCTYPE html>
<html>
<body>

<h2>Unordered List with Disc Bullets</h2>
<ol>
	<?php
$miarchivo = fopen("usuarios.txt", "r"); 
while(!feof($miarchivo)) {
  $objeto =json_decode(fgets($miarchivo));
  echo  "<li>".$objeto->nombre."</li>";
}
fclose($miarchivo);
?>

</ol>

</body>
</html>

