<?php
print '<select name="Celsius">';
for ($celsiusmin = 0, $celsiusmax = 10; $celsiusmin < 100; $celsiusmin += 10, $celsiusmax += 10) {
    print "<option>$celsiusmin-$celsiusmax</option>";
}
print "</select>";
?>