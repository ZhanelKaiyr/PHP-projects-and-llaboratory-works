<?php
print "sort-sort arrays in ascending order";
$people = array('Zhanel','Aruzhan','Zhansaya','Marzhan','Umit');
sort($people);
for($i = 0; $i < count($people); $i++) {
    echo $people[$i];
    echo "<br>";
}
print "rsort() - sort arrays in descending order";
echo "<br>";
rsort($people);
for($i = 0; $i < count($people); $i++) {
    echo $people[$i];
    echo "<br>";
}

print "ksort() - sort associative arrays in ascending order, according to the key";
echo "<br>";
$people = array(1=>'Zhanel',100=>'Aruzhan',4=>'Zhansaya',45=>'Marzhan',55=>'Umit');
ksort($people);
foreach ($people as $key => $value) {
    echo "ID = " . $key . "   Name= " . $value;
    echo "<br>";
}
echo "<br>";
print "asort() - sort associative arrays in ascending order, according to the value";
echo "<br>";
$people = array(1=>'Zhanel',100=>'Aruzhan',4=>'Zhansaya',45=>'Marzhan',55=>'Umit');
asort($people);
foreach ($people as $key => $value) {
echo "ID = " . $key . "   Name= " . $value;
echo "<br>";
}
echo "<br>";

print "arsort() - sort associative arrays in descending order, according to the value";
echo "<br>";
$people = array(1=>'Zhanel',100=>'Aruzhan',4=>'Zhansaya',45=>'Marzhan',55=>'Umit');
arsort($people);
foreach ($people as $key => $value) {
echo "ID = " . $key . "   Name= " . $value;
echo "<br>";
}
echo "<br>";

print "krsort() - sort associative arrays in descending order, according to the key";
echo "<br>";
$people = array(1=>'Zhanel',100=>'Aruzhan',4=>'Zhansaya',45=>'Marzhan',55=>'Umit');
krsort($people);
foreach ($people as $key => $value) {
    echo "ID = " . $key . "   Name= " . $value;
    echo "<br>";
}
echo "<br>";
?>


