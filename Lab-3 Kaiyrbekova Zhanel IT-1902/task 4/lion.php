<?php
include 'animals.php';
class lion extends Animal{

    public function information(){
print 'The lion (Panthera leo) is a species in the family Felidae; it is a muscular, deep-chested cat with a short, rounded head, a reduced neck and round ears, and a hairy tuft at the end of its tail. It is sexually dimorphic; adult male lions have a prominent mane, which is the most recognisable feature of the species. With a typical head-to-body length of 184–208 cm (72–82 in) they are larger than females at 160–184 cm (63–72 in). It is a social species, forming groups called prides. A lion pride consists of a few adult males, related females and cubs. Groups of female lions usually hunt together, preying mostly on large ungulates. The lion is an apex and keystone predator, although some lions scavenge when opportunities occur, and have been known to hunt humans, although the species typically does not.';
print "<br>";
print 'Typically, the lion inhabits grasslands and savannas, but is absent in dense forests. It is usually more diurnal than other big cats, but when persecuted it adapts to being active at night and at twilight. In the Pleistocene, the lion ranged throughout Eurasia, Africa and North America, but today it has been reduced to fragmented populations in Sub-Saharan Africa and one critically endangered population in western India. It has been listed as Vulnerable on the IUCN Red List since 1996 because populations in African countries have declined by about 43% since the early 1990s. Lion populations are untenable outside designated protected areas. Although the cause of the decline is not fully understood, habitat loss and conflicts with humans are the greatest causes for concern.';    }
    public function Name(){
        echo '<h1>This is '.__CLASS__.'</h1>';
    }
}
$lion = new lion("Mammalia","Pleistocene–Present");
$lion->Name();
$lion->information();

?>