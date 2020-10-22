<?php
function checkEmail($str){

    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp,$str)){
        echo "Valid";
    }else{
        echo "Invalid";
    }
}
checkEmail('a@gmail.com');
echo "<br>";
checkEmail('ab@yahoo.com');
echo "<br>";
checkEmail('abc@hotmail.com');
echo "<br>";
checkEmail('@gmail.com');
echo "<br>";
checkEmail('ab@gmail.');
echo "<br>";
checkEmail('@#abc@gmail.com');