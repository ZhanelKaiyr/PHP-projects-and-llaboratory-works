<?php

$universities = array(
    array('Astana IT University', 'Nur-Sultan', 'Kazakhstan'),
array('KBTU','Almaty','Kazakhstan'),
array('SDU','Almaty','Kazakhstan'),
array('KIMEP','Almaty','Kazakhstan'),
array('MSU','Moscow','Russia'),
array('Harvard','Boston','USA'),
array('Stanford','California','USA'),
array('Oxford','Oxford','UK'));
print '<table border=2px, style="border-collapse: collapse">';
for ($i = 0; $i < 8; $i++) {
    print "<tr>";
    for ($j = 0; $j < 3; $j++) {
        print  "<td>".$universities [$i][$j]."</td>";
    }
    print "</tr>";
}
print '</table>';
?>

