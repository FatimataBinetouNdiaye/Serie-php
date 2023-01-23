<?php
function diviseur($nbre){
    $div=0;
    for ($i=1; $i<=$nbre; $i++){

        if ($nbre%$i ==0 ){ 
            echo " $i \n";
    
        } 
    }
    
}
echo diviseur(21);
?>