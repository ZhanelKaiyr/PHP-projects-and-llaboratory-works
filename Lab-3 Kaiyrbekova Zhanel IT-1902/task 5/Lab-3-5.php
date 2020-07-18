<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tarif</title>
    <style>
        body{
            background-color:lightcoral;
            background-size: cover;
            text-align: center;
            color:darkred;
        }
        .div{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .second,.first,.third{
            display: block;
            background-color:darkgray;
            border-color: darkred;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            width:30%;
            text-align:center;
        }
    </style>
</head>
<body>
<h1 >Traffic </h1>
<div class = "div">
    <div class = "first">
        <h2>30Mb/s</h2>
        <p>Available only internet</p>
        <img src = "int.jpg" alt ="internet" width = "20%" height="20%">
        <br>
        <p><a href ="first.php">Click here</a></p>
    </div>
    <div class = "second">
        <h2>60Mb/s</h2>
        <p>Available Internet and TV</p>
        <img src = "int.jpg" alt ="internet" width = "20%" height="20%">
        <img src = "tv.jpg" alt ="internet" width = "35%" height="30%">
        <br>
        <p><a href ="second.php">Click here</p>
    </div>
    <div class ="third">
        <h2>100Mb/s</h2>
        <p>Available Internet, TV and smartbox</p>
        <img src = "int.jpg" alt ="internet" width = "20%" height="20%">
        <img src = "tv.jpg" alt ="internet" width = "30%" height="15%">
        <img src = "smartbox.jpg" alt ="internet" width = "30%" height="20%">
        <br>
        <p><a href ="third.php">Click here</a></p>
    </div>
</div>
</body>
</html>