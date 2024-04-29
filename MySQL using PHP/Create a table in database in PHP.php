<?php
$ser="localhost";
$user="root";
$pass="";
$db="saptagandaki";
$conn=mysqli_connect($ser,$user,$pass,$db);
$sql="CREATE TABLE student(id int, roll int, sname varchar(30))";
$result=mysqli_query($conn,$sql);
if($conn)
{
    echo "Connection Sucessfully";
    if($result)
    {
        echo "Table Created Sucessfully";
    }
    else
    {
        echo "Database connected but table not created";
    }
}
else
{
    die("Error occured".mysqli_error($con));
}


?>