
<?php
$font2="Arial";
$font1="Times New Roman";
$color1="lightgrey";
$color2="lightcyan";
$color3="lightblue";
print $Syle=<<<htmlblock
<style>
     .first{
            background-color: $color1;
            font-family:$font1;
        }
        .second{
            background-color:$color2;
            font-family:$font2;
        }
        .third{
            background-color:$color3;
            font-family:$font2;
        }
        </style>
htmlblock;
$variable= ['Name' => 'Group',
    'Zhanel' => 'IT-1902',
    'Adlet'=>'IT-1906',
    'Marzhan'=>'IT-1902'];
print "<table border=2px>";
    foreach ($variable as $key => $value){
        if($value=="Group")print "<tr  class='first'><td >$key</td><td >$value</td></tr>";
        if($value=="IT-1902") print "<tr  class='second'><td >$key</td><td >$value</td></tr>";
            if($value=="IT-1906")print "<tr  class='third'><td >$key</td><td >$value</td></tr>";
    }
    print "</table>";
    ?>