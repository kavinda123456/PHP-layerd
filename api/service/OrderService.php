<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/21/2019
 * Time: 1:10 PM
 */

require_once __DIR__ .'/../dto/OrderDetails.php';
require_once __DIR__ .'/../dto/Order.php';
require_once __DIR__ .'/../dto/OrderCustom.php';
require_once __DIR__ .'/../business/impl/OrderBOImpl.php';

$iid = $_POST['txtItemID'];
$name = $_POST['txtItemName'];
$price = $_POST['txtUprice'];
$qty = $_POST['txtQty'];

$oid = $_POST['txtOrderID'];
$date = $_POST['txtDate'];
$cid = $_POST['txtCustomerID'];
$price=$_POST['txtprice'];

$orderBo = new OrderBOImpl();

$orderObject = new Order(
    $oid,
    $cid,
    $date
    );

$orderDetialObject=new OrderDetails(
    $oid,
    $iid,
    $qty,
    $price
);

$orderBo->addOrder($orderObject,$orderDetialObject);

