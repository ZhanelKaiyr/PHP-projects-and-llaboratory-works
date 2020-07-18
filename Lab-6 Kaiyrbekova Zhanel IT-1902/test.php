
<!DOCTYPE html>
<html lang="en">
<head>
    <title>task</title>
    <style>
        body {
            background-color: papayawhip;
            font-family: "Times New Roman";
            color: darkred;
            display: grid;
            padding: 10px;
            grid-template-columns: auto auto auto;
        }
     

    </style>
</head>
<body>
<div >
    <form name="triangle" method="get" action="test.php" >
        <label>Side_A:</label><input name="side1"><br>
        <label>Side_B:</label><input name="side2"><br>
        <label>Side_C:</label><input name="side3"><br>
        <label>Color:</label><input name="color1">
        <input type="submit" name="triangle">
    </form>
</div>
<div >
    <form name="rectangle" method="get" action="test.php">
        <label>Width:</label><input name="width">
        <br>
        <label>Height:</label><input name="height">
        <br>
        <label>Color:</label><input name="color2">
        <input type="submit" name="rectangle">

    </form>
</div>
<div >
    <form name='square' method="get" action="test.php">
        <label>Side:</label><input name="side">
        <br>
        <label>Color:</label><input name="color3">
        <input type="submit" name="square">
    </form>
</div>

<?php
require_once "Figure.php";
require_once "Triangle.php";
require_once "Rectangle.php";
require_once"Square.php";

if(isset($_GET['triangle'])) {
    $side1 = $_GET["side1"];
    $side2 = $_GET["side2"];
    $side3 = $_GET["side3"];
    $color=$_GET['color1'];
    $triangle = new Triangle($side1, $side2,$side3);
    echo '<br>';
    echo "Area:" . $triangle->getArea();
    echo "<div style='width: 0; height: 0;  border-left: " .$side1. "px solid transparent;  border-right: " .$side2. "px solid transparent; border-bottom: " .$side3. "px solid ".$color1.";'></div>";
}

if(isset($_GET['rectangle'])) {
    $width = $_GET["width"];
    $height = $_GET["height"];
    $color2 = $_GET["color2"];
    $rectangle1 = new Rectangle ($width, $height);
    echo '<br>';
    echo "Area:" . $rectangle1->getArea();
   echo "<div style='width: " .$width. "px; height: " .$height. "px; background-color: ".$color2.";'></div>";
}
if(isset($_GET['square'])) {
    $side=$_GET['side'];
    $color3=$_GET["color3"];
    $square=new Square($side);
    echo "Area:".$square->getArea();
    echo'<br>';
    echo  "<div style='width: " .$side. "px; height: " .$side. "px; background-color: ".$color3.";'></div>";
}
?>
</body>
</html>