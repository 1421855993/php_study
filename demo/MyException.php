<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 13:54
 */

class MyException extends Exception {
    public function errorMessage() {
        // 错误信息
        $errorMsg = '错误行号 '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';
        return $errorMsg;
    }

}

$email = "someone@example...com";

try
{
    // 检测邮箱
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
    {
        // 如果是个不合法的邮箱地址，抛出异常
        throw new MyException($email);
    }
}

catch (MyException $e)
{
//display custom message
    echo $e->errorMessage();
}