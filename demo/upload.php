<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 9:28
 */
$file = current($_FILES["file"]);
if (file_exists("upload/" . $file["name"]))
{
    echo $file["name"] . " 文件已经存在。 ";
}
else
{
    // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
    move_uploaded_file($file["tmp_name"], "upload/" . $_FILES["file"]["name"]);
    echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
}