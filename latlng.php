<?php
function DMStoDEC($deg, $min, $sec)
{
    
    // Converts DMS ( Degrees / minutes / seconds ) 
    // to decimal format longitude / latitude
    
    return $deg + ((($min * 60) + ($sec)) / 3600);
}

?>