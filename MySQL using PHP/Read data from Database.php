<?php
$ser="localhost";
$user="root";
$pass="";
$db="saptagandaki";
$conn=mysqli_connect($ser,$user,$pass,$db);
$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql);
if($conn)
{
    echo "successfully connected to database";
    if($result)
    {
        echo "Sucessfully fetch data";
        
    }
    else
    {
        echo "Cannot fetch data";
    }
}
else
{
    echo "Faild connection";
}
?>
<html>
    <body>
        <table>
            <tr>
            <th>Roll</th>
            <th>Name</th>
            <th>Class</th>
            </tr>
            <tr><td></td></tr>
        </table>
    </body>
</html>