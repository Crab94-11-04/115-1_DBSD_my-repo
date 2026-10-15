<?php
function printHeader()
{
    echo"<h3>SID:C113181117 </h3> ";
    echo "<h3>Name:許博凱</h3>";
    echo "<h3>Ex02</h3>";
    
}printHeader();
function printFooter(){
    echo "<hr>";
}printFooter();
function rateExchange($amout, $rate)
{
    $result = $amout * $rate;
    return $result;
}

$rate = rateExchange(1000, 32.5);
echo"money:" . $rate;