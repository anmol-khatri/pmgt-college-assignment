<?php
include "init.php";
$prdid = $_GET['prdid'];
$productdetailssql = "select ";
$usrid = $_SESSION['usrid'];
echo "$usrid";
$insertsql = "insert into cart values (crtid_seq.NEXTVAL, $prdid,$usrid)";
$query_login = oci_parse($conn, $insertsql);
if($result = oci_execute($query_login)){
	header('Location:cart.php');
}
?>