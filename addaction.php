<?php
if(isset($_POST['btnSubmit'])){
    $name = $_POST['name'];
    $cat = $_POST['category'];
    $quant = $_POST['quantity'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];
    $discount = $_POST['discount'];
    $details = $_POST['details'];


    $sql = "insert into product values(prdid_seq.NEXTVAL, '$name','$details',$price,$quantity,$stock, )";
    
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
