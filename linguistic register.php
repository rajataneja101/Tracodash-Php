
 <?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'rajat');
define('DB_USER','root');
define('DB_PASSWORD','root');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


    $company = $_POST['cname'];
    $source = $_POST['from'];
    $destination = $_POST['to'];
    $price = $_POST['price'];
    $contact =  $_POST['contact'];
    $mail =  $_POST['mail'];
    $query = "INSERT INTO linguistic (company, source, destination, price, contact,mail) VALUES ('$company','$source','$destination',$price, $contact,'$mail')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data)
    {
    header("location:storemore.php");
    }

?>