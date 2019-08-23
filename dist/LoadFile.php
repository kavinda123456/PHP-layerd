<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/22/2019
 * Time: 10:06 AM
 */
?>
<?php
$cid=$_POST['cid'];
$iid=$_POST['iid'];
$operation=$_POST['operation'];

switch ($operation){
    case "getCustomer":
        $sql="select * from customer";
        break;
    case "getItem":
        $sql="select * from item";
        break;
    case "searchCustomer":
        $sql="select * from where id='$cid'";
        break;
    case "searchItem":
        $sql="select * from item where id='$iid'";
        break;

    default:
        null;
}
