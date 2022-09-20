<!-- printing table of 1 to 10 with nested loop  -->
<?php
//   echo "<table border =\"1\" style='border-collapse: collapse'>";
//   for ($row=1; $row <= 10; $row++) { 
//     echo "<tr> \n";
//     for ($col=1; $col <= 10; $col++) { 
//        $p = $col * $row;
//        echo "<td>$p</td> \n";
//            }
//           echo "</tr>";
//     }
//     echo "</table>";
$num = 1;
echo "<table style="
for($row = 1;$row<=10;++$row){
    echo"<tr>";
    for($col = 1;$col <=10;++$col){
        echo"<td style='border: 2px solid black'>$num</td>";
        $num++;
    }
    echo "</tr>";
}
echo"</table>";
?>