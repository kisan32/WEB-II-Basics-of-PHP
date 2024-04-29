<?php
$ser="localhost";
$user="root";
$pass="";
$db="saptagandaki";
$conn=mysqli_connect($ser,$user,$pass,$db);
$sql="INSERT INTO student(id,roll,sname) value(12,1,'Bhagatraj')";
$result=mysqli_query($conn,$sql);
if($conn)
{
    echo "Connected sucessfully";
    if($result)
    {
        echo "Data has been inserted";
    }
    else
    {
        echo "error on data insert";
    }
}
else
{
    die ("Eror has occured ".mysqli_error($con));
}
?>