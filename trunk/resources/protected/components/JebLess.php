<?php
/**
* How to compile less code to css

$less = new JebLess;
echo $less->compile(".block { padding: 3 + 4px }");

The `compileFile` method reads and compiles a file. It will either return the
result or write it to the path specified by an optional second argument.
echo $less->compileFile("input.less");

The `compileChecked` method is like `compileFile`, but it only compiles if the output
file doesn't exist or it's older than the input file:
$less->checkedCompile("input.less", "output.css");

If there any problem compiling your code, an exception is thrown with a helpful message:
try {
$less->compile("invalid LESS } {");
} catch (exception $e) {
echo "fatal error: " . $e->getMessage();
}
**/

require Yii::app()->basePath.'/vendor/lessphp/lessc.inc.php';

class JebLess extends lessc{
    /**
     * Extends lessc class, Add extend code here when need
     */
}
