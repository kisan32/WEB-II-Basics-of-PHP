<?php
$user="kisan";
$paw="1234";
if(isset($_SERVER['PHP_AUTH_USER'])&&isset($_SERVER['PHP_AUTH_PW']))
{
    if($_SERVER['PHP_AUTH_USER']==$user && $_SERVER['PHP_AUTH_PW']==$paw)
    {
        echo "Sucessfully Logged in";
    }
    else
    {
        die("Enter the valid information");
    }
}
else
{
    header('www-Authenticate:Basic realm="Restricted area"');
    header('Http/1.0 401 unauthorized');
    die("Please enter your password");
}
?>