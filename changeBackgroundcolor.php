<?php
$bgcolor = $_GET['bgcolor'];
$color = $bgcolor ?? 'transparent';
$red = $orange = $yellow = $green = $cyan = $blue = $purple = '';
switch ($color) {
    case 'red':
        $red = 'selected';
        break;
    case 'orange':
        $orange = 'selected';
        break;
    case 'yellow':
        $yellow = 'selected';
        break;
    case 'green':
        $green = 'selected';
        break;
    case 'cyan':
        $cyan = 'selected';
        break;
    case 'blue':
        $blue = 'selected';
        break;
    case 'purple':
        $purple = 'selected';
        break;
    case 'transparent':
        break;
    default:
        $bgcolor = 'transparent';
        echo "<script>alert('该颜色不在选取范围内');</script>";
}

?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demo</title>
    <style>
        html {
            background-color: <?=$bgcolor?>;
        }
    </style>
</head>
<body>
<form action="">
    <select name="bgcolor" id="">
        <option value="default">默认</option>
        <option value="red" <?=$red?> >红</option>
        <option value="orange" <?=$orange?> >橙</option>
        <option value="yellow" <?=$yellow?> >黄</option>
        <option value="green" <?=$green?> >绿</option>
        <option value="cyan" <?=$cyan?> >青</option>
        <option value="blue" <?=$blue?> >蓝</option>
        <option value="purple" <?=$purple?> >紫</option>
    </select>
    <input type="submit" value="确认更改">
</form>
</body>
</html>
