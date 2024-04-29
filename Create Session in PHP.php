<?php
session_start();
$name="kisan";
$value="Manager";
$_SESSION[$name]=$value;
echo "Session Set sucessfully";
?>