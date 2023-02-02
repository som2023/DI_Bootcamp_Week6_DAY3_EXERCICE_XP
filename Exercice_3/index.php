
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_3</title>
</head>
<body>
<form action="" method="post">
  <div class="nombre">
    <p> PHP Test ternaire</p>
    <label for="">Number </label><input type="text" name="val" placeholder="entrer un nombre svp"/>
    <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
if ( isset ($_POST['btnok'])) {
  $value=$_POST['val'];
   
  if($value=="")
  {
    echo 'Veillez renseigner tous les champs svp';
  }else
  {
 
    function ternary_Test($tern){
      $result = $tern > 30
      ? "est plus grand que 30"
      : ($tern > 20
      ? "est plus grand que 20"
      : ($tern >10
      ? "est plus grand que 10"
      : "Entrez un nombre au moins supérieur à 10 !")); 
      echo $tern." : ".$result."\n";
      }
      ternary_Test($value);
}
}
?>
 

</body>
</html>
