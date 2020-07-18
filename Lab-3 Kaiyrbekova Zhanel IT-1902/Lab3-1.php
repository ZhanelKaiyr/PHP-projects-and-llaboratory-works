<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 3 task 1</title>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="username">username</label>
    <input type="text" name="username" id="username"><br><br>
    <label for="password">password</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Submit">
</form>
<?php
if (!empty($_POST)) {
    if( $_POST["username"]=="covid19" && $_POST["password"]=="ketket"){
        echo "Welcome:". $_POST["username"];
    }
    else echo "Data was entered incorrectly";
}
?>
</body>
</html>