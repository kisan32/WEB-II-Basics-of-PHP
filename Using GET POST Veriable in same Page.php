<html>
    <head>
        <title>Form</title>
    </head>
    <body>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"> <!--if we can use here get and post both-->
                <fieldset>
                    <legend>USER INFORMATION</legend>
                    First Name:<input type="text" name="fname"><br><br>
                    Last Name:<input type="text" name="lname"><br><br>
                    Age:<input type="number" name="age"><br><br>
                    <input type="submit" name="save">
                </fieldset>
                    
        </form>
        <?php 
        if(isset($_POST['save']))
        {
           echo "<pre>";
           print_r($_POST);
           echo "</pre>";
        }
        ?>
    </body>
</html>
