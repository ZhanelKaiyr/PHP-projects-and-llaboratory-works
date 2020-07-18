<?php

include 'main.php';

class first extends main{
public function information()
{
if ($_POST["traffic"] == 30) {
print '<p><img src = "int.jpg" alt = "internet" width ="35%" height ="40%"</p>';
print '<p>This traffic include Internet</p>';
}
}
}

$f = new first();
$f->information();
?>