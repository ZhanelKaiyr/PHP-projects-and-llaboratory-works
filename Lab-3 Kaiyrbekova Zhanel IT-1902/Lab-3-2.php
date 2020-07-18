
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3 task 2</title>
</head>
<body>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="name">Name:</label>
    <?php
    $name = array("Aruzhan", "Zhanel", "Marzhan", "Zhansaya", "Alizhan", "Alikhan", "Assem");
        print '<select name="name">';
        for ($i = 0; $i<count($name); $i++){
            print "<option >".$name[$i]."</option>";
        }
        print'</select> ';

 echo " <input type=\"submit\" value=\"Submit\">";
 if(isset($_GET["name"])){
        echo "<p>Hello,Welcome to the page " . $_GET["name"] . "!  </p>";
    }


    ?>
</form>


</body>
</html>