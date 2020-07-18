<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color:lightcoral;
            background-size: cover;
            color:darkred;
            font-size: 20px;
        }
        form {
            margin:10px;
            padding:10px;
            width: 50px;
        }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
   <label> Name:<br> <input type="text" name="name"><br>
   <label>Surname:</label> <br> <input type ="text" name ="surname"><br>
       <label>E-mail:</label><br> <input type="text" name="email"><br>
       <label>Number:</label><br> <input type = "number" name ="number"><br>
       <label>Traffic:</label><br> <input type = "number" name = "traffic"><br>
    <input type="submit" name = "submit">
</form></body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo 'Welcome' . ' ' . $_POST["name"];
    echo '<br>';
    echo 'Your Surname:'.' '.$_POST["surname"];
    echo '<br>';
    echo 'Your email address is:' . $_POST["email"];
    echo '<br>';
    echo 'Your number:'.' '.$_POST["number"];
    echo '<br>';
    echo 'Traffic:';
    echo $_POST["traffic"];
}
class firstt
{
    public function __construct()
    {
        print '<p>Choose traffic and register to the page</p>';
    }
    public function __destruct()
    {

        print '<p>Thank you</p>';
    }
}