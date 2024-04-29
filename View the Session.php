<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
if(isset($_SESSION["kisan"]))
{
    echo $_SESSION["kisan"];
}
else
{
    echo "Session not set";
}


?>