<?php
 function logged_in () {
 if (isset($_SESSION['email']) && isset($_SESSION['fname'])) {
 return true;
 } else {
 return false;
 }
 }

?>
