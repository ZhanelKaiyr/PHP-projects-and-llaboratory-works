<?php
include 'main.php';

class second extends main
{
    public function inf()
    {
        if ($_POST["traffic"] == 60) {
            print '<p><img src = "int.jpg" alt = "internet" width ="20%" height ="20%"</p>';
            print '<p><img src = "tv.jpg" alt = "TV" width ="25%" height ="15%"</p>';
            print '<p>This traffic include Internet and TV</p>';
        }

    }
}
$s = new inff();
$s->inf();