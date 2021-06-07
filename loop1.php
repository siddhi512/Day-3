<?php

echo "<table border = '1'>";
for ($i=0;$i<=20;$i++) {
    echo"<tr>";
    if($i%2==0){
        echo "<td bgcolor='Pink'>$i</td>";
    }else
    {
        echo "<td bgcolor='Yellow'>$i</td>";
    }
    echo "</tr>";
}

echo "</table>";