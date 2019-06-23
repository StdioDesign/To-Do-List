<?php 

session_id('t9gdb25lad9gk6495qquavmfu6');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>