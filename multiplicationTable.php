<?php
echo '<table border="0" align="center" width="800" >';
for ($i = 1; $i <= 9; $i++){
    echo '<tr>';
    for ($j = 1; $j <= $i; $j++){
        echo '<td>'.$j.'×'.$i.'='.($i*$j).'</td>';
    }
    echo '</tr>';
}
echo '</table>';