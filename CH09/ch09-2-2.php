<?php
require("about_me.php");
echo "EX02 <hr/>";
// 檔案名稱
$file = "mybook.txt";
$content = "PHP與MySQL網頁設計範例教本\r\n";
// 開啟檔案
$fp = fopen($file, "w")  
      or exit("檔案 $file 開啟錯誤<br/>");
//寫入檔案
if (fwrite($fp, $content)) {
    echo "檔案 $file 寫入成功<br/>";
} else {
    echo "檔案 $file 寫入失敗<br/>";
} 
// 關閉檔案
fclose($fp);  