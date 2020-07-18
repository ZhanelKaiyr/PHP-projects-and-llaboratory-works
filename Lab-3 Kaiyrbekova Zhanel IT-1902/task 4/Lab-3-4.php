<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zoo shop</title>
    <style>
        body{
            color:black;
            background-color: lightgrey;
            text-align: center;
        }
        .grid {
            display: grid;
            grid-template-columns: 400px 400px 400px;
            grid-template-rows: 400px 400px 400px;
            grid-gap: 20px;
            padding: 20px 0;
            font-size: 30px;
        }

        .box {
            display: flex;
            flex-direction:column;
            background-color:darkred;
            color: white;
            padding: 20px;
            font-size: 150%;
        }
        div.img{
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
</head>
<body>
<div class="grid">
    <div class="box"><img src ="alpaca.jpg" alt ="alpaca" width= 100% height="100%" href = "alpaca.php"><a href = "alpaca.php">alpaca</a></div>
    <div class="box"><img src ="lion.jpg" alt ="lion" width="100%" height="100%" href = "lion.php"><a href = "lion.php">Lion</a></div>
    <div class="box"><img src ="tiger.jpg" alt ="tiger" width="100%" height="100%" href = "tiger.php"><a href = "tiger.php">Tiger</a></div>
    <div class="box"><img src ="eagle.jpg" alt ="eagle" width="100%" height="100%" href = "eagle.php"><a href = "eagle.php">Eagle</a></div>
    <div class="box"><img src ="zebra.jpg" alt ="zebra" width="100%" height="100%" href = "zebra.php"><a href = "zebra.php">Zebra</a></div>
    <div class="box"><img src ="rabbit.jpg" alt ="rabbit" width="100%" height="100%" href = "rabbit.php"><a href = "rabbit.php">Rabbit</a></div>
</div>

</body>
</html>