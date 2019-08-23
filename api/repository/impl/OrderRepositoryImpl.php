<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/19/2019
 * Time: 5:55 AM
 */
require_once __DIR__ ."/../../dto/Order.php";
require_once __DIR__ ."/../../db/DBConnection.php";
require_once __DIR__ ."/../../repository/OrderRepository.php";

class OrderRepositoryImpl implements OrderRepository
{
    private $connection;

    public function addOrder(Order $order): bool
    {
        return($this->connection->query(
            "insert into orders values ('{$order->getOid()}',
                                        '{$order->getCid()}'
                                        '{$order->getDate()}')"
        )>0);
    }

    public function updateOrder(Order $order): bool
    {
        return($this->connection->query(
            "update orders set cid='{$order->getCid()}',
                               date='{$order->getDate()}' where oid='{$order->getOid()}'"
        )>0);
    }

    public function deleteOrder(Order $oid): bool
    {
        return ($this->connection->query(
            "delete from orders where oid='{$oid->getOid()}'"
        )>0);

    }

    public function getAllOrder(): array
    {
        $result=$this->connection->query(
            "select * from orders"
        );
        return $result->fetch_all();
    }

    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }
}