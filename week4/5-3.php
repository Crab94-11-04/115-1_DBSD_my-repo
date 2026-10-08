SID C113181117<BR>
NAME 許博凱<BR>
EX04<BR>
<hr>
<?php
$total = 0;
for ( $i = 1; $i <= 15; $i++ ) {
if ( ($i % 2) == 1 ) 
    continue;
echo "|" . $i;
$total += $i;
}
