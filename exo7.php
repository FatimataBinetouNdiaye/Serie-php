<?php
function parfait($x){
    $compteur=0;
    for ($i=1; $i<$x; $i++){

        if ($x%$i ==0 ){ 
           $compteur=$compteur+$i;
         
        } 
    }
    if ($compteur==$x){ 
        return "le nombre est parfait";
        }
        return "le nombre nest pas parfait";
    
   
}
echo parfait(6);
?>
