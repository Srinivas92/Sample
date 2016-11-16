<?php
echo <table>
<tr>
<td>Forename</td>
<td>Surname</td>
</tr>';
$sql="SELECT * from dba_tables";
$rs=oracle_query($sql,$conn) or die(oracle_error());
while($result=oracle_fetch_array($rs))
{
echo '<tr>
<td>'.$result["forename"].'</td>
<td>'.$result["surname"].'</td>
</tr>';
}
echo '</table>';
?>
