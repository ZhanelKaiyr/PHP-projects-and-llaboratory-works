<?php
include 'animals.php';
class zebra extends Animal{

    public function information(){
        print 'Zebras (/ˈziːbrə/ ZEE-brə, /ˈzɛbrə/ ZEB-rə) are several species of African equids (horse family) united by their distinctive black-and-white striped coats. Their stripes come in different patterns, unique to each individual. They are generally social animals that live in small harems to large herds. Unlike their closest relatives, horses and donkeys, zebras have never been truly domesticated.';
        print "<br>";
        print 'There are three species of zebras: the plains zebra, the mountain zebra and the Grévy\'s zebra. The plains zebra and the mountain zebra belong to the subgenus Hippotigris, while Grévy\'s zebra is the sole species of subgenus Dolichohippus. The latter resembles an ass, to which zebras are closely related, while the former two look more horse-like. All three belong to the genus Equus, along with other living equids.';
    }

    public function Name(){
        echo '<h1>This is '.__CLASS__.'</h1>';
    }
}
$z = new zebra("Mammalia","Neogene–present");
$z->Name();
$z->information();

?>