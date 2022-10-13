<?php
echo '<table border="1" align="center" width="800" >';
for ($i = 1; $i <= 9; $i++){
    echo '<tr>';
    for ($j = 1; $j <= $i; $j++){
        echo '<td>'.$j.'×'.$i.'='.($i*$j).'</td>';
    }
    //输出空白格
    for ($nbsp = 9; $nbsp > $i; $nbsp--){
        echo '<td>&nbsp;</td>';
    }
    echo '</tr>';
}
echo '</table>';