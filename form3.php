<?php
//form1.php

/* if(isset($_POST['submit']))
{
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>'; */

$TempConvert = (int) $_POST['TempConvert'];

switch($TempConvert){
    case 1:
        echo 'F to C';
    break;
        
    case 2: 
        echo 'C to F';
        break;
        
    default:
        echo 'Something has gone wrong';
/*
}else{ */
echo '<form action="" method="post">

<label> <br>
    <input type="radio" name="TempConvert" value="red" />F to C <br>
    <input type="radio" name="TempConvert" value="blue" />C to F <br>
    <input type="radio" name="TempConvert" value="yellow" />F to K<br>
</label> <br>

<input type="submit" name="submit" />
</form>';
}

 ?>
