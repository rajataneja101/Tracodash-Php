
    <?php
    $acc=$_POST['account'];
     $source=$_POST['from'];
      $des=$_POST['to'];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'rajat';
mysql_select_db($dbname);

$query = "SELECT * FROM $acc where source= '$source' and destination='$des'";
$result = mysql_query($query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr> 
<td width=100>Company</td> 
<td width=100>Source</td> 
<td width=100>Destination</td> 
<td width=100>Price</td> 
<td width=100>Contact</td> 
<td width=100>Mail</td> 
</tr>"; 

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['company'] . "</td>"; 
print "<td>" . $row['source'] . "</td>"; 
print "<td>" . $row['destination'] ."</td>"; 
print "<td>" . $row['price'] ."</td>"; 
print "<td>" . $row['contact'] ."</td>"; 
print "<td>" . $row['mail'] ."</td>"; 
print "</tr>"; 
} 
print "</table>"; 
?>