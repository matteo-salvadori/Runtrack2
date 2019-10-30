<?php

    $var=array(200, 204, 173, 98, 171, 404, 459);
    $i=0;
   
    while($i <=6)
    {
    if ($var[$i] % 2 ==0)
    {
        echo "$var[$i] est paire <br>";   
    }

    else
    {
        echo "$var[$i] est impaire <br>"; 
    }
        $i = $i+1;
    }
?>