<?php
function printHeader(){
    echo"<h3>SID:C113181117</h3> ";
    echo "<h3>Name:許博凱</h3>";
    echo "<h3>EX05</h3>";
}
printHeader();
function printFooter(){
    echo "<hr>";
}printFooter();
function callfunc1(Closure $closure)
{
    $closure();
}
function callfunc2(callable $callback)
{
    $callback();
}
$hello = function () {
    echo "Hello World!<br/>";
};
$hi = function () {
    echo "Hi there!<br/>";
};
callfunc1($hello);
callfunc2($hi);
callfunc1($hello);