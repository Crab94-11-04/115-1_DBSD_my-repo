<?php
$grade = 65;
$result = match(true) {
$grade > 80 => "甲等!<br/>",
$grade >= 70 => "乙等!<br/>",
$grade >= 60 => "丙等!<br/>",
default => "丁等!<br/>"
};
echo $grade;
echo $result;
?>
