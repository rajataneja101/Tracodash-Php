

    <?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'rajat');
define('DB_USER','root');
define('DB_PASSWORD','root');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password =  $_POST['pass'];
    $account =  $_POST['account'];
    $query = "INSERT INTO members (first_name, last_name, email, uname, pass,account) VALUES ('$firstname','$lastname','$email','$uname','$password','$account')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data)
    {
    header("location:welcome.php");
    }

?>
