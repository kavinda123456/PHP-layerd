<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/9/2019
 * Time: 3:33 PM
 */
?>
<?php
$iid = $_POST['txtItemID'];
$name = $_POST['txtItemName'];
$price = $_POST['txtUprice'];
$qty = $_POST['txtQty'];

$oid = $_POST['txtOrderID'];
$date = $_POST['txtDate'];
$cid = $_POST['txtCustomerID'];
$price=$_POST['txtprice'];

include 'DB-Connection.php';

if (!$connection) {
    echo mysqli_connect_error();

} else {
    mysqli_autocommit($connection, false);
    $sql1 = "insert into orders values ('$oid','$cid','$date')";
    $sql2 = "insert into orderDetail values ('$oid','$iid','$qty','$price')";
    $customerRESt = mysqli_query($connection, $sql1);
    if ($customerRESt) {
        echo "Order Added";
        $itemREST = mysqli_query($connection, $sql2);
        if ($itemREST) {
            mysqli_commit($connection);
//            echo "kkkkkk";
        } else {
            mysqli_rollback($connection);
            echo "OrderDetail not add", mysqli_errno($connection);
            mysqli_error($connection);
        }
    } else {
        echo "Order Not Added", mysqli_error($connection);
    }
    mysqli_autocommit($connection, true);

    mysqli_close($connection);

}

?>
