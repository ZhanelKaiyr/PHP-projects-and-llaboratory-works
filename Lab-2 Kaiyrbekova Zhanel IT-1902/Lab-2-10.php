<?php
$universities = array(
    array('name' => 'Astana IT University', 'city' => 'Nur-Sultan', 'country' => 'Kazakhstan','rank'=>1),
    array('name' => 'KBTU', 'city' => 'Almaty', 'country' => 'Kazakhstan','rank'=>10),
    array('name' => 'SDU', 'city' => 'Almaty', 'country' => 'Kazakhstan','rank'=>5),
    array('name' => 'KIMEP', 'city' => 'Almaty', 'country' => 'Kazakhstan','rank'=>7),
    array('name' => 'MSU', 'city' => 'Moscow', 'country' => 'Russia','rank'=>8),
    array('name' => 'Harvard', 'city' => 'Boston', 'country' => 'USA','rank'=>3),
    array('name' => 'Stanford', 'city' => 'California', 'country' => 'USA','rank'=>4),
    array('name' => 'Oxford', 'city' => 'Oxford', 'country' => 'UK','rank'=>2));

function value_compare_func($a, $b) {
    return strcasecmp($a['name'], $b['name']);
};
uasort($universities, 'value_compare_func');
print '<table border=2px, style="border-collapse: collapse">';
foreach ($universities as $key) {
    print '<tr><td>' . $key['name'] . '</td><td>' . $key['city'] . '</td><td>' . $key['country'] . '</td><td>'.$key['rank'].'</td></tr>';
}
print "</table>";
?>
