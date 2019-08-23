<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/19/2019
 * Time: 5:54 AM
 */

require_once __DIR__ ."/../dto/OrderDetails.php";

interface OrderDetailsRepository
{
    public function addOrderDetail(OrderDetails $orderDetails):bool ;
    public function updateOrderDetail(OrderDetails $orderDetails):bool ;
    public function deleteOrderDetail(OrderDetails $oid):bool ;
    public function getAllOrderDetail():array ;
    public function setConnection(mysqli $connection);

}