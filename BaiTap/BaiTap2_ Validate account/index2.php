<?php
function checkAccount($str){
    $regex = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regex,$str)){
        echo "Valid";
    }else{
        echo "Invalid";
    }
}
echo "<pre>";
checkAccount('123abc_');
checkAccount('_abc123');
checkAccount('123456');
echo '<br>';
checkAccount('12345');
checkAccount('.@');
checkAccount('abcde ');
echo '</pre>';
