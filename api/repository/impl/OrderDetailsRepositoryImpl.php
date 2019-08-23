<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/19/2019
 * Time: 5:55 AM
 */

require_once __DIR__ ."/../../dto/OrderDetails.php";
require_once __DIR__ ."/../../db/DBConnection.php";
require_once __DIR__ ."/../../repository/OrderDetailsRepository.php";

class OrderDetailsRepositoryImpl implements OrderDetailsRepository
{
    private $connection;

    public function addOrderDetail(OrderDetails $orderDetails): bool
    {
        return($this->connection->query(
            "insert into orderdetail values ('{$orderDetails->getOid()}'
                                              {$orderDetails->getIid()}
                                              {$orderDetails->getQty()}
                                              {$orderDetails->getPrice()})"
        )>0);
    }

    public function updateOrderDetail(OrderDetails $orderDetails): bool
    {
        return($this->connection->query(
            "update orderdetail set iid='{$orderDetails->getIid()}'
                                    qty='{$orderDetails->getQty()}'
                                    uprice='{$orderDetails->getPrice()}' where oid='{$orderDetails->getOid()}'"
        )>0);
    }

    public function deleteOrderDetail(OrderDetails $oid): bool
    {
        return($this->connection->query(
            "delete from orderdetail where oid='{$oid->getOid()}'"
        )>0);
    }

    public function getAllOrderDetail(): array
    {
        $result=$this->connection->query(
            "select * from orderdetail"
        );
        return $result->fetch_all();
    }

    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }
}