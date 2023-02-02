
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_2</title>
</head>
<body>
<form action="" method="post">
  <div class="nombre">
    <p> Calculer de l'aire d'un rectangle</p>
    <label for="">Longueur</label><input type="text" name="longueur" placeholder="entrer la Longueur du rectangle svp"/>
    <label for="">Largeur</label><input type="text" name="largeur" placeholder="entrer la Largeur du rectangle svp"/>
    <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
if ( isset ($_POST['btnok'])) {
  $longueur=$_POST['longueur'];
  $largeur=$_POST['largeur'];
  if($longueur=="" || $largeur=="")
  {
    echo 'Veillez renseigner tous les champs svp';
  }else
  {
  function Aire_rectangle($long_value, $large_value)
  {
    
    $aire = $long_value * $large_value;
   return $aire;
	}
	 echo'l\aire du rectangle est '. Aire_rectangle($longueur, $largeur);
}
}
?>

</body>
</html>
