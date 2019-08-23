<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/19/2019
 * Time: 5:56 AM
 */

require_once __DIR__ ."/../dto/Order.php";
require_once __DIR__ ."/../dto/OrderDetails.php";

interface OrderBO
{
    public function addOrder(Order $order,OrderDetails $orderDetails):bool ;
}