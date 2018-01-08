<?php

$a = '1234';

if ((strpos($a, '1') or strpos($a, '2') or strpos($a, '3') or strpos($a, '4') or strpos($a, '5')
   or strpos($a, '6') or strpos($a, '7') or strpos($a, '8') or strpos($a, '9') or strpos($a,'0')) !== false) {
    echo 'true';
}else{
  echo 'eror'; 
}