<?php
include 'animals.php';
class rabbit extends Animal{

    public function information(){
        print 'Rabbits are small mammals in the family Leporidae of the order Lagomorpha (along with the hare and the pika). Oryctolagus cuniculus includes the European rabbit species and its descendants, the world\'s 305 breeds[1] of domestic rabbit. Sylvilagus includes 13 wild rabbit species, among them the seven types of cottontail. The European rabbit, which has been introduced on every continent except Antarctica, is familiar throughout the world as a wild prey animal and as a domesticated form of livestock and pet. With its widespread effect on ecologies and cultures, the rabbit (or bunny) is, in many areas of the world, a part of daily life—as food, clothing, a companion, and as a source of artistic inspiration.';
        print "<br>";
        print 'Although once considered rodents, lagomorphs like rabbits have been placed in their own, separate family because of a number of traits their rodent cousins lack, like two extra incisors.';
    }

    public function Name(){
        echo '<h1>This is '.__CLASS__.'</h1>';
    }
}
$r = new rabbit("Mammalia","Late Eocene-Holocene, 53–0 Ma ");
$r->Name();
$r->information();

?>