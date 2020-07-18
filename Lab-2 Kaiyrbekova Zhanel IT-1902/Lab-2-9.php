<?php
$universities = array(
    array('name' => 'Astana IT University', 'city' => 'Nur-Sultan', 'country' => 'Kazakhstan'),
    array('name' => 'KBTU', 'city' => 'Almaty', 'country' => 'Kazakhstan'),
    array('name' => 'SDU', 'city' => 'Almaty', 'country' => 'Kazakhstan'),
    array('name' => 'KIMEP', 'city' => 'Almaty', 'country' => 'Kazakhstan'),
    array('name' => 'MSU', 'city' => 'Moscow', 'country' => 'Russia'),
    array('name' => 'Harvard', 'city' => 'Boston', 'country' => 'USA'),
    array('name' => 'Stanford', 'city' => 'California', 'country' => 'USA'),
    array('name' => 'Oxford', 'city' => 'Oxford', 'country' => 'UK'));

function value_compare_func($a, $b) {
    return strcasecmp($a['city'], $b['city']);
};
uasort($universities, 'value_compare_func');
print '<table border=2px, style="border-collapse: collapse">';
foreach ($universities as $key) {
    print '<tr><td>' . $key['name'] . '</td><td>' . $key['city'] . '</td><td>' . $key['country'] . '</td></tr>';
}
print "</table>";
?>
