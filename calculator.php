<?php
if(!empty($_GET)){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sign = $_GET['sign'];
    if ($sign == 'add'){
        $sum = $num1+$num2;
    }elseif($sign == 'reduce'){
        $sum = $num1-$num2;
    }elseif($sign == 'multiply'){
        $sum = $num1*$num2;
    }elseif($sign == 'division'){
        if ($num2 !=0 ){
            $sum = $num1/$num2;
        }else{
            $sum = '除数不能为0';
        }
    }
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculator</title>
</head>
	<body>
		<form action="">
		    <input type="number" name="num1">
		    <br>
		    <input type="radio" name="sign" value="add">+
		    <input type="radio" name="sign" value="reduce">-
		    <input type="radio" name="sign" value="multiply">×
		    <input type="radio" name="sign" value="division">÷
		    <br>
		    <input type="number" name="num2">
		    <br>
		    <input type="submit" value="calc">
		</form>
	</body>
</html>
<?=$sum?>

