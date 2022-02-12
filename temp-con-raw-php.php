<?php
/*
Title: Just PHP version of a temp converter
Author: Derek Howe
Notes: Built file in justs PHP bebore looking how to run via PHP's command line interpreter and use the Symfony Console library.   
*/

class TempConverter 
{
    
    //method to calculate from celsius to fahrenheit with a default room temp
    function clac_fahrenheit($value = 20) 
    {
        return ((9/5) * $value) + (32);
    }
    //method to calculate from fahrenheit to celsius with a default room temp
    function clac_celsius($value = 68) 
    {
        return ($value - 32) * (5/9);
    }

}

//Values to come from UI are hard coded for example
$convertTo = 'fahrenheit';
// $convertTo = 'celsius';
$tempUnit = '32.5';

$tempConverter = new TempConverter;

if(isset($tempUnit) && is_numeric($tempUnit)){
    if($convertTo === 'fahrenheit'){
        echo $tempConverter->clac_fahrenheit($tempUnit);
    }else if($convertTo === 'celsius'){
        echo $tempConverter->clac_celsius();
    }else{
        echo 'No temperature scale set.';
    }
}else{
    echo 'No temperature unit set or is set wrong';
}

?>