<?php
//form1.php


/* if theres data - show it
if not, show the form */

if(isset($_POST['FirstName']))
{
  echo $_POST['FirstName'];

}else{
echo '<form action="" method="post">
First Name: <input type="text" name="FirstName /"> <br>
<input type="submit" />



</form>';

}

 ?>
