<?php
//form1.php


/* if theres data - show it
if not, show the form */

if(isset($_POST['FirstName']))
{
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';

}else{
echo '<form action="" method="post">
<label>
First Name: <br>
 <input
  type="text"
  name="FirstName"
  placeholder="Put First Name Here"
  required="required"
  size="30"
  maxlength="60"
  autofocus
  title="First Name is Required"
  tabindex="10"
  />
</label>

<br>

<label>
Last Name: <br>
 <input
  type="text"
  name="LastName"
  placeholder="Put Last Name Here"
  required="required"
  size="30"
  maxlength="60"
  autofocus
  title="Last Name is Required"
  tabindex="20"
  />
</label>

<label> <br>
    <input type="radio" name="FavColor" value="red" />Red <br>
    <input type="radio" name="FavColor" value="blue" />Blue<br>
    <input type="radio" name="FavColor" value="yellow" />Yellow<br>
</label>

 <br>
<input type="submit" />



</form>';

}

 ?>
