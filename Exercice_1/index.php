
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_1</title>
</head>
<body>
<form action="" method="post">
  <div class="nombre">
    <p>Droit au vote</p>
    <label for="">AGE</label><input type="text" name="age" placeholder="entrer votre age svp"/>
   <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
if ( isset ($_POST['btnok'])) {
  $age=$_POST['age'];
  function age_votant($min_age)
  {
    if($min_age>=18)
	{
			echo 'vous avez droit au vote';
	}
	else
	{
		echo 'vous n\'avez pas l\'age pour voter';
	}
     
 }
   echo age_votant($age);
}
?>

</body>
</html>
