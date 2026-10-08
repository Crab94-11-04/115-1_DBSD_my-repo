<?php
$total = 0;
for ( $i = 1; $i <= 15; $i++ ) {
if ( ($i % 2) == 1 ) 
    continue;
echo "|" . $i;
$total += $i;
}
