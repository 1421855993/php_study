<?php
namespace A;
	/* if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
 	header('Location: '.$uri.'/dashboard/');
	exit; */
/* $name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a; */
/*class Car
{
    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

function print_vars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

// 实例一个对象
$herbie = new Car("white");

// 显示 herbie 属性
echo "\therbie: Properties\n";
print_vars($herbie);*/

//true为Test不区分大小写
/*define("Test","123",true);
echo test;*/
/*echo "PHP_SELF:".$_SERVER['PHP_SELF'];
echo "<br>";
echo "SERVER_NAME:".$_SERVER['SERVER_NAME'];
echo "<br>";
echo "HTTP_HOST:".$_SERVER['HTTP_HOST'];
echo "<br>";
echo "HTTP_REFERER:".$_SERVER['HTTP_REFERER'];
echo "<br>";
echo "HTTP_USER_AGENT:".$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "SCRIPT_NAME:".$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo __FILE__ ; // 取得当前文件的绝对地址，结果：D:\www\test.php
echo "<br>";
echo dirname(__FILE__); // 取得当前文件所在的绝对目录，结果：D:\www\
echo "<br>";
//dirname等同于__DIR__
echo dirname(dirname(__FILE__)); //取得当前文件的上一层目录名，结果：D:\*/

/*class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();*/


/*class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
    public function sayHello() {
        parent::sayHello();
        echo 'World2!';
    }
}
//优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。
$o = new MyHelloWorld();
$o->sayHello();*/

/*class classname
{
    function __construct()
    {
        echo __METHOD__,"\n";
    }
}
function funcname()
{
    echo __FUNCTION__,"\n";
}
const constname = "global";

$a = 'classname';
$obj = new $a; // prints classname::__construct
$b = 'funcname';
$b(); // prints funcname
echo constant('constname'), "\n"; // prints global*/

/*namespace A\B\C;

const E_ERROR = 45;
function strlen($str)
{
    return \strlen($str) - 1;
}

echo E_ERROR, "\n"; // 输出 "45"
echo INI_ALL, "\n"; // 输出 "7" - 使用全局常量 INI_ALL

echo strlen('hi'), "\n"; // 输出 "2"
if (is_array('hi')) { // 输出 "is not array"
    echo "is array\n";
} else {
    echo "is not array\n";
}*/

/*class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // 这行能被正常执行
echo $obj->protected; // 这行会产生一个致命错误
echo $obj->private; // 这行也会产生一个致命错误
$obj->printHello(); // 输出 Public、Protected 和 Private*/

/*interface iTemplate{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// 实现接口
class Template implements iTemplate {
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}*/

?>
<form action="/demo/upload.php" method="post">
    <input type="file" name="file"/>
    <input type="submit" value="上传">
</form>
