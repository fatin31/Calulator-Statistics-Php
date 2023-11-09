<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = $_POST["numbers"];
    $numbers = preg_split('/[\s,]+/',$input);
    $numbers = array_filter($numbers,function($value){
        return is_numeric($value);
    });
    if(count($numbers)>0){
        $mean = array_sum($numbers)/count($numbers);
        echo"Mean: $mean<br>";
        $mode = array_count_values($numbers);
        $mode = array_keys($mode,max($mode));
        $range = max($numbers)- min($numbers);
        echo "Mode: $mode<br>";
        echo"Range: $range<br>";
        
    }else{
        echo"Please enter valid numbers";

    }



}
?>