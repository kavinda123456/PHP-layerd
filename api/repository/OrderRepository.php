<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/19/2019
 * Time: 5:53 AM
 */

require_once __DIR__ ."/../dto/Order.php";

interface OrderRepository
{
    public function addOrder(Order $order):bool ;
    public function updateOrder(Order $order):bool ;
    public function deleteOrder(Order $oid):bool ;
    public function getAllOrder():array ;
    public function setConnection(mysqli $connection);

}