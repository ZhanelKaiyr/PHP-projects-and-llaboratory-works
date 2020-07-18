<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 3 task 3</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <label for="inputage">Age:</label>
    <input type="text" name="age" id="inputage">
    <label for="inputusername">Username:</label>
    <input type="text" name="username" id="inputusername">
    <label for="inputemail">Email:</label>
    <input type="text" name="email" id="inputemail">
    <input type="submit" value="Submit">
</form>

<?php

$age=$_POST["age"];

if (!empty($_POST)){
if((2020-$age)<=1920){
        print "Please, enter realistic age.";
    }
    else {
        echo "<p>Hello,Welcome to the page " . $_GET["name"] . "!  </p>";
    }
}
?>
</body>

