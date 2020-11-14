<?php

function clcVolume($depth, $width, $height){
    return $depth * $width * $height;
}

echo clcVolume(5, 10, 8);
?>