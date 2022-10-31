<?php

//定义一个函数 求出某年某月有多少天以及此月1号星期几
function myDay(){
//    生成 年 和 月 变量
    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');
    $month = isset($_GET['month']) ? $_GET['month'] : date('n');
//    得到某年的某个月份中有多少天
    $days = date('t', mktime(0,0,0,$month,1, $year));
//    得到某年的某个月份中1号是星期几
    $w = date('w', mktime(0,0,0,$month,1,$year));
//    返回四组变量
    return $year.','.$month.','.$days.','.$w;
}
//显示万年历函数
function showCalendar(){
//    调用 myDay() 功能 获取 年 月 此月天数 此月1号星期几
    $result = myDay();
    list($year,$month,$days,$w) = explode(',',$result);

//    表格遍历
    echo '<table border="1" align="center" width="600">';
    echo '<caption><h1>'.$year.'年'.$month.'月</h1></caption>';
    echo '<tr bgcolor="#add8e6">';
    echo '<td>星期日</td>';
    echo '<td>星期一</td>';
    echo '<td>星期二</td>';
    echo '<td>星期三</td>';
    echo '<td>星期四</td>';
    echo '<td>星期五</td>';
    echo '<td>星期六</td>';
    echo '</tr>';
    $num = 1;
    while ($num <= $days){
        echo '<tr align="center">';
        for ($i = 0; $i < 7; $i++){
            if ($num > $days || ($w > $i && $num == 1)){
                echo '<td>&nbsp;</td>';
            }else{
                echo '<td>'.$num.'</td>';
                $num++;
            }
        }
        echo '</tr>';
    }
//    显示 上一年 上一月 下一月 下一年
    echo '<tr>';
    echo '<td colspan="7" align="right">'.changeDate($year, $month).'</td>';
    echo '</tr>';
    echo '</table>';
}
//定义一个函数 显示 上一年 上一月 下一月 下一年
function changeDate($year, $month){
    //    处理 上一年
    //    处理 上一月
    //    处理 下一月
    //    处理 下一年
    $out = '<a href="?'.preYear($year, $month).'">上一年</a>&nbsp;&nbsp;';
    $out .= '<a href="?'.preMonth($year, $month).'">上一月</a>&nbsp;&nbsp;';
    $out .= '<a href="?'.nextMonth($year, $month).'">下一月</a>&nbsp;&nbsp;';
    $out .= '<a href="?'.nextYear($year, $month).'">下一年</a>&nbsp;&nbsp;';
    return $out;
}
//处理 上一年的功能
function preYear($year, $month){
    $year -- ;
    return "year={$year}&month={$month}";
}
//处理 上一月的功能
function preMonth($year, $month){
    if($month == 1){
        $year--;
        $month = 12;
    }else{
        $month--;
    }
    return "year={$year}&month={$month}";
}
//处理 下一月的功能
function nextMonth($year, $month){
    if ($month == 12){
        $year++;
        $month = 1;
    }else{
        $month++;
    }
    return "year={$year}&month={$month}";
}
//处理 下一年的功能
function nextYear($year, $month){
    $year++;
    return "year={$year}&month={$month}";
}
showCalendar();