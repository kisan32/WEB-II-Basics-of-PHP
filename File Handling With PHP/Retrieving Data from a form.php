<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>USER DATA</legend>
            Name: <input type="text" name="name"><br><br>
            Age: <input type="age" name="age"><br><br>
            comment:
            <textarea name="com" id="comment" cols="30" rows="10"></textarea><br><br>
            <input type="submit" name="submit">
        </fieldset>
        </form>

    <?php
if(isset($_POST['submit']))
{
    $n=$_POST['name'];
    $a=$_POST['age'];
    $c=$_POST['com'];
    $data=$n.$a.$c;
    $file="read.txt";
    $f=fopen($file,"w") or die("Cannot Open the file");
    fwrite($f,$data);
    fclose($f);
}
?>
    </body>
</html>
