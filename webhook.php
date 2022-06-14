<?php
/**
 *  Hook
 *
 *  hook 放置于网站根目录
 *
 * @author daoshengtech@qq.com
 *
 *  2019-3-8
 *
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//print_r(dirname(__DIR__)); // 获取上级目录
//print_r(dirname(__FILE__)); // 获取脚本目录
$filePath = dirname(__FILE__);

// 执行拉取代码
//echo '<pre>';
//var_dump(shell_exec("pwd"));
//echo '</pre>';

//echo '<hr>';

//echo '<pre>';
//var_dump(shell_exec("ls -al"));
//echo '</pre>';

//echo '<hr>';

echo '<pre>';
var_dump(shell_exec("cd {$filePath} && git pull"));
echo '</pre>';
