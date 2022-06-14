<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WECHAT DEMO</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
</head>

<body>
<h1>WECHAT DEMO</h1>
</body>
<!--<script src="https://daoshengtech-1256346555.cos.ap-shanghai.myqcloud.com/js/jquery-1.10.2.min.js"></script>-->
<!--<script src="//cdn.jsdelivr.net/npm/eruda"></script>-->
<!--<script>eruda.init();</script>-->
<script src="/assets/js/vConsole-3.3.4/vconsole.min.js"></script>
<script>
    // init vConsole
    const vConsole = new VConsole();
    console.log('Hello world');
</script>
<?php
function isWeixin()
{
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
        return true;
    }
    return false;
}

if (isWeixin()) {
    $appId = 'wx3b14811ab7519b27'; // 系统时间戳
    $timestamp = time(); // 系统时间戳
    $nonceStr = md5($timestamp); // 生成签名的随机串
    // 生成安全签名
    $array = array($appId, $timestamp, $nonceStr);
    sort($array, SORT_STRING);
    $str = implode($array);
    $signature = sha1($str); // 签名

    echo '<script>';
    echo 'const appId = ' . $appId . ';';
    echo 'const timestamp = ' . $timestamp . ';';
    echo 'const nonceStr = ' . $nonceStr . ';';
    echo 'const signature = ' . $signature . ';';
    echo '</script>';
    echo '<script src="/wechat/wechat.js?_t=' . $timestamp . '"></script>';
}
?>
</html>
