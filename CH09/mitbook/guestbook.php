<?php
$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = "guestbook.txt";

    // Create the file if it doesn't exist
    if (!file_exists($file)) {
        $fp = fopen($file, "w") or exit("無法建立檔案 $file<br/>");
        fclose($fp);
    }

    // Get and sanitize input
    $email   = htmlspecialchars(trim($_POST["Email"] ?? ""), ENT_QUOTES, "UTF-8");
    $name    = htmlspecialchars(trim($_POST["Name"] ?? ""), ENT_QUOTES, "UTF-8");
    $message = nl2br(htmlspecialchars(trim($_POST["message"] ?? ""), ENT_QUOTES, "UTF-8"));

    // Only process if name and message are not empty
    if ($name !== "" && $message !== "") {
        // Make name a clickable mailto link
        $nameLink = "<a href='mailto:{$email}'>{$name}</a>";

        $today = date("Y年m月d日 H:i:s");

        $entry  = "<b>留言時間：</b>{$today}<br/>";
        $entry .= "<b>姓名：</b>{$nameLink}<br/>";
        $entry .= "<b>留言：</b>{$message}<br/><hr/>";

        $fp = fopen($file, "a");
        fputs($fp, $entry);
        fclose($fp);

        $msg = "留言已經成功送出，謝謝您的留言。<br/>";
    } else {
        $msg = "請填寫姓名和留言內容。<br/>";
    }
}
?>

<form action="guestbook.php" method="post">
    <table border="1">
        <tr>
            <td>姓名:</td>
            <td><input type="text" size="30" name="Name" required></td>
        </tr>
        <tr>
            <td>電子郵件:</td>
            <td><input type="email" size="30" name="Email"></td>
        </tr>
        <tr>
            <td>留言:</td>
            <td><textarea name="message" rows="4" cols="30" required></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="send" value="送出">
                <input type="reset" name="reset" value="重設">
            </td>
        </tr>
    </table>
</form>

<?php echo $msg; ?>
<br/>
| <a href="guestbook.php">新增留言</a>
| <a href="showmessage.php">檢視留言</a> |