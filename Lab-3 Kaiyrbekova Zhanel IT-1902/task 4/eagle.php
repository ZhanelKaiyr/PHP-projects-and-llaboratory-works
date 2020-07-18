<?php
include 'animals.php';
class eagle extends Animal{

    public function information(){
        print 'Eagle is the common name for many large birds of prey of the family Accipitridae. Eagles belong to several groups of genera, not all of which are closely related. Most of the 60 species of eagle are from Eurasia and Africa. Outside this area, just 14 species can be found—2 in North America, 9 in Central and South America, and 3 in Australia.';
        print "<br>";
        print 'Eagles are large, powerfully built birds of prey, with heavy heads and beaks. Even the smallest eagles, such as the booted eagle (Aquila pennata), which is comparable in size to a common buzzard (Buteo buteo) or red-tailed hawk (B. jamaicensis), have relatively longer and more evenly broad wings, and more direct, faster flight – despite the reduced size of aerodynamic feathers. Most eagles are larger than any other raptors apart from some vultures. The smallest species of eagle is the South Nicobar serpent eagle (Spilornis klossi), at 450 g (0.99 lb) and 40 cm (16 in). The largest species are discussed below. Like all birds of prey, eagles have very large, hooked beaks for ripping flesh from their prey, strong, muscular legs, and powerful talons. The beak is typically heavier than that of most other birds of prey. Eagles\' eyes are extremely powerful. It is estimated that the martial eagle, whose eye is more than twice as long as a human eye, has a visual acuity 3.0 to 3.6 times that of humans. This acuity enables eagles to spot potential prey from a very long distance. This keen eyesight is primarily attributed to their extremely large pupils which ensure minimal diffraction (scattering) of the incoming light. The female of all known species of eagles is larger than the male.';
    }

    public function Name(){
        echo '<h1>This is '.__CLASS__.'</h1>';
    }
}
$eagle =  new eagle ("Aves","Present");
$eagle->Name();
$eagle->information();

?>