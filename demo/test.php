<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 10:36
 */
if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";