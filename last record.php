<?php
$dbc = mysqli_connect("localhost","root","","robot") or die('Error connecting to MySql Server.');
$queryShowTable = "SHOW TABLES;";
$querySelect_Template = "SELECT motor1,motor2,motor3,motor4,motor5,motor6,onoff FROM `control`";
$listOftables = mysqli_query($dbc,$queryShowTable) or die('Error querying database.');
echo '<control>';
echo 'Motor1:';
while($table=mysqli_fetch_array($listOftables)){
    $querySelectData = $querySelect_Template.$table[0].' LIMIT 1;';          
    $tableData = mysqli_query($dbc,$querySelectData) or die('Error querying database.');

    while($row = mysqli_fetch_array($tableData)){
        echo '<tr><td>'.$row[0].'</tr>';
        echo "\r\n Motor2:";
        echo '<tr><td>'.$row[1].'</tr>';
        echo "\r\n Motor3:";
        echo '<tr><td>'.$row[2].'</tr>';
        echo "\r\n Motor4:";
        echo '<tr><td>'.$row[3].'</tr>';
        echo "\r\n Motor5:";
        echo '<tr><td>'.$row[4].'</tr>';
        echo "\r\n Motor6:";
        echo '<tr><td>'.$row[5].'</tr>';
        echo "\r\n on/off:";
        echo '<tr><td>'.$row[6].'</tr>';
    }                
}
echo '</table>';
mysqli_close($dbc);  
?>
