<?php

    $nombre = 0;
    $increment = 1;

while ($nombre != 1337)
{ 

if ($nombre == 42) 
    echo "<b><u>$nombre</b></u><br />";

else
    echo $nombre."</br>";
    $nombre = $nombre + $increment;
}

?>