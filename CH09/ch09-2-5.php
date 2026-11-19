<?php
require("about_me.php");
echo "EX02 <hr/>";
$file = basename($_SERVER['PHP_SELF'], ".php");
$fp = fopen($file . ".php", "r")//開啟檔案
      or exit("file: $file.php open error.");

echo "file: $file.php open successful.<br/>";
echo "file size:" . filesize($file . ".php") . " bytes<br/>";
fclose($fp);//關閉檔案
echo "file: $file.php has been closed.<br/>";