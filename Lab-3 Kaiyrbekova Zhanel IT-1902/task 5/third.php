<?php
include 'main.php';

class third extends main
{
    public function inff(){
        if ($_POST["traffic"] == 90) {
            print '<p><img src = "int.jpg" alt = "internet" width ="20%" height ="20%"</p>';
            print '<p><img src = "tv.jpg" alt = "TV" width ="20%" height ="15%"</p>';
            print '<p><img src = "smartbox.jpg" alt = "Smartbox" width ="20%" height ="20%"</p>';
            print '<p>This traffic include Internet,TV and smartbox </p>';
        }
    }
}
$t = new third();
$t->inff();