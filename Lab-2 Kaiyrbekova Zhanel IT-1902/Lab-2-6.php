<?php
$variables= array('Name', 'Zhanel','Adlet','Marzhan','Lyazzat');
print '<table border="2px">';

for ($i=0;$i<count($variables);$i++){
    if($i%2==0){
        echo "<tr style=\"background-color: lightblue\"><td>$i</td><td>$variables[$i]</td></tr>";
    }
    else {
        echo "<tr style=\"background-color: lightpink\"><td>$i</td><td>$variables[$i]</td></tr>";
    }
}
print '</table>'
?>