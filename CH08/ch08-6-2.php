<?php
include "about_me.php";
echo"EX01   <br/>";
session_start();
if(!isset($_SESSION["page_count"])) {
    $_SESSION["page_count"] = 1;
}else{
    $_SESSION["page_count"]++;

}
$value = $_SESSION["page_count"];
echo "使用者session ID: " . session_id() . "<br/>";
echo "頁面瀏覽次數: " . $value . "<br/>";

if($value >= 5){
    unset($_SESSION["page_count"]);
    if (!isset($_SESSION["page_count"])) {
        echo "Session變數page_count已經被刪除<br/>";
        session_destroy();
        echo "關閉交談期<br/>";
    }
}