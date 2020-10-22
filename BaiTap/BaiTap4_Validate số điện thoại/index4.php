<?php
function checkNumberPhone($str){
    $regex = '/^\([0-9]{2}\)+-\([0]{1}[0-9]{9}\)$/';
    if (preg_match($regex,$str)){
        echo "Validate";
    }else{
        echo 'Invaliddate';
    }
}
checkNumberPhone( '(84)-(0978489648)');
echo "<br>";
checkNumberPhone( ': (a8)-(22222222)');