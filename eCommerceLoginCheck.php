<?php

session_start();
unset($_SESSION['badPass']);
// username and password set from form
$myusername = $_POST['username'];
$mypassword = $_POST['password'];
//Connect to server and select database.
require_once 'DataBaseConnection.php';
//To protect MySQL injection
$myusername = mysql_fix_string($con, $myusername);
$mypassword = mysql_fix_string($con, $mypassword);
//hashing
$Hashed = hash("ripemd128", $mypassword);

$sql = "SELECT * FROM Assignment2.FriendDB WHERE Username='" . $myusername . "' and Password='" . $Hashed . "'";
$result = $con->query($sql);

if (!$result)
{
    $message = "Whole query " . $sql;
    echo $message;
    die('Invalid query: ' . mysqli_error());
}
// Mysql_num_row is counting table row
$count = $result->num_rows;

// If result matched $myusername and $mypassword, table row must be 1 row
if ($count == 1)
{
    $_SESSION['user'] = $myusername;
    $_SESSION['password'] = $mypassword;
    // Register $myusername, $mypassword and redirect to file "login_success.php"
    header("Location:eCommerceLoginSuccess.php");
}
else
{
    $_SESSION['badPass'] ++;
//    header("Location:eCommerce.php");
    echo ("<p>Incorrect password entered.</p>");
    echo ("<p><a href='eCommerce.php'>Try again</a><p>");
}