<?php
function cercle ( $rayon){
    $diametre=($rayon*2);
    $perimetre=($diametre*3.14);
    return "le diametre est $diametre et le perimetre est égal à $perimetre"; 
}
echo cercle(5)
?>