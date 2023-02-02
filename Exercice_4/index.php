 
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
    function word_digit($word) {
        $warr = explode(';',$word);
        $result = '';
        foreach($warr as $value){
            switch(trim($value)){
                case 'zero':
                    $result .= '0';
                    break;
                case 'one':
                    $result .= '1';
                    break;
                case 'two':
                    $result .= '2';
                    break;
                case 'three':
                    $result .= '3';
                    break;
                case 'four':
                    $result .= '4';
                    break;
                case 'five':
                    $result .= '5';
                    break;
                case 'six':
                    $result .= '6';
                    break;
                case 'seven':
                    $result .= '7';
                    break;
                case 'eight':
                    $result .= '8';
                    break;
                case 'nine':
                    $result .= '9';
                    break;    
            }
        }
        return $result;
    }
    
    echo word_digit("zero;three;five;six;eight;one")."\n";
    echo word_digit("seven;zero;one")."\n";
    
}
}
?>
 

</body>
</html> 
