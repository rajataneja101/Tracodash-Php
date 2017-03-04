<?php
$host="localhost"; 
$username="root"; 
$password="root"; 
$db_name="rajat"; 
$tbl_name="members"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['uname'];
$mypassword=$_POST['pass'];

$sql="SELECT * FROM $tbl_name WHERE uname='$myusername' and pass='$mypassword'";
$type="SELECT account FROM $tbl_name WHERE uname='$myusername' and pass='$mypassword'";
$result=mysql_query($sql);
$result1=mysql_query($type);
echo "$result1";
$count=mysql_num_rows($result);

if($count==1){
	$row=mysql_fetch_row($result);
	$row1=mysql_fetch_row($result1);
 	$sname=$row[0];
 	$acc=$row1[0];
	session_start();
	$_SESSION['SName']=$sname;
	$_SESSION['Status']="Session Status: Login Success!!!";

	if($acc=='User')
	{
		header("location:user.php");
		
}
else if($acc=='Cab')
	{
	header("location:cab.php");
		
}
else if($acc=='Linguistic')
	{
	header("location:linguistic.php");
		
}
}
else {
	session_start();
	if (isset($_SESSION['SName'])){
		unset($_SESSION['SName']);
	}
	$_SESSION['Status']="Session Expired!!!";
	header("location:index1.php");
}
?>

