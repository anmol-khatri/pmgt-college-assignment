<?php
//Gather details submitted from the $_POST array and store in local vars
if(isset($_POST['btnSubmit'])){
    $user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$access = $_POST['txtAccess'];
//build query to SELECT records from the users table WHERE
//the username AND password in the table are equal to those entered.
if ($access == "customer") {

$sql = "select username, password from customer where username = '$user' and password = '$pass'";
}
if ($access == "trader") {

$sql = "select username, password from trader where username = '$user' and password = '$pass'";
}
//run query and store result
$query_login = oci_parse($conn, $sql);
$result = oci_execute($query_login);
if ($row = oci_fetch_assoc($query_login)){
    $_SESSION['user'] = $user;
    header ('location:./index.php');

}
else{
    echo "false";   
} 
}

?>