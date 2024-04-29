<?php
$cookie_name="user";
$cookie_value="Ram";
setcookie($cookie_name,$cookie_value,time()+60,"/");
if(isset($_COOKIE[$cookie_name]))
{
    echo $_COOKIE[$cookie_name];
}
else
{
    echo "Cookie not set";
}
?>