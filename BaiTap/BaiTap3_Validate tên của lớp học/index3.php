<?php
function checkNameClass($str){
    $regex =  '/^[APC]{1}[0-9]{4}[G-M]{1}$/';
    if (preg_match($regex,$str)){
        echo "Validate";
    }else{
        echo 'Invalidate';
    }
}
checkNameClass('C0318G');
echo '<br>';
checkNameClass('P0323A');