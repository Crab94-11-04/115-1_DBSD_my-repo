<?php
$file = "guestbook.txt";

if(!file_exists($file) or filesize($file) == 0){
    exit("檔案 $file 不存在或無內容<br/>");
}else{
    readfile($file);
}
?>
<br/><a href="guestbook.php">回留言板</a>
