<?php 
include"init.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="shop-container">
		<?php 
			$user = $_SESSION['user'];
			echo "Add a shop for $user";
		?>
		<form method="POST" action="addshop.php">
		<label><br>Enter a shop name to continue:  </label>
		<input type="text" name="shpname" placeholder="  Enter a name ...">
		<input type="submit" class="login-btn" name="btnSubmit" value="Add shop">
	</form>
	</div>
	
<?php 
if (isset($_POST['btnSubmit'])) {
	$shpname = $_POST['shpname'];
	$trdid = $_SESSION['usrid'];
	$sql = "insert into shop values (shpid_seq.NEXTVAL, '$shpname','',$trdid)";
	$query =oci_parse($conn, $sql);


	if($result = oci_execute($query)) {
		
		$shpsql = "select shp_id,shp_name from shop inner join trader on shop.trd_id = trader.trd_id where trader.trd_id = $trdid";

        $query_shop = oci_parse($conn, $shpsql);
        $result = oci_execute($query_shop);
        if ($row = oci_fetch_assoc($query_shop)){
            
            $_SESSION['shpid']=$row['SHP_ID'];
            $_SESSION['shpname'] = $row['SHP_NAME'];
            echo"true";
            header('location:index.php');
        }
		
	}
	else{
		echo"false";
	}
}
include "footer.php";
?>
</body>
</html>


