<html>
<head>
    <title>Information</title>
    <style>
        body{
            background-color: lightgrey;
            padding: 20px;
            margin: 30px;
            color:darkred;
            text-align: center;
        }
    </style>
</head>
    <?php
class Animal
{
public $class;
public $Temporal_range;

public function __construct($class, $Temporal_range)
{
$this->$class = $class;
$this->$Temporal_range = $Temporal_range;
echo '<h1>Information about our animals.</h1>';
echo '<br>';
echo '<p>Temporal range:'.$Temporal_range. '</p>';
echo '<br>';
echo '<p>Class:'.$class.'</p>';
echo '<br>';
}

public function __destruct()
{
echo '<h1>Goodbye</h1>';
echo '<br>';
}
}
?>


</body>

</html>


