<?php
include 'animals.php';
class alpaca extends Animal{

    public function information(){
        print 'The alpaca (Vicugna pacos) is a species of South American camelid descended from the vicuña. It is similar to, and often confused with, the llama. However, alpacas are often noticeably smaller than llamas. The two animals are closely related and can successfully cross-breed. Alpacas and llamas are related to the guanaco. There are two breeds of alpaca: the Suri alpaca and the Huacaya alpaca.';

print 'Alpacas are kept in herds that graze on the level heights of the Andes of Southern Peru, Western Bolivia, Ecuador, and Northern Chile at an altitude of 3,500 m (11,500 ft) to 5,000 m (16,000 ft) above sea level.[1] Alpacas are considerably smaller than llamas, and unlike llamas, they were not bred to be working animals but were bred specifically for their fiber. Alpaca fiber is used for making knitted and woven items, similar to sheep\'s wool. These items include blankets, sweaters, hats, gloves, scarves, a wide variety of textiles and ponchos in South America, and sweaters, socks, coats and bedding in other parts of the world. The fiber comes in more than 52 natural colors as classified in Peru, 12 as classified in Australia, and 16 as classified in the United States.';
    }
    public function Name(){
        echo '<h1>This is '.__CLASS__.'</h1>';
    }
}
$alpaca = new alpaca("Mammalia","Present");
$alpaca->Name();
$alpaca->information();

?>
