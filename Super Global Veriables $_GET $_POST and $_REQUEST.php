<?php
//printing submitted information at once
echo "<pre>";
print_r($_REQUEST); //we can use GET and POST both and REQUEST will work with both get and post variables
echo "</pre>";

// printing submitted informatiob one by one
echo "Name is ".$_REQUEST["fname"]."<br>";
echo "Age is ".$_REQUEST["age"]."<br>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>