<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:32 PM
 */
require_once __DIR__ ."/../../dto/Item.php";
require_once __DIR__ ."/../../db/DBConnection.php";
require_once __DIR__ ."/../../repository/ItemRepository.php";

class ItemRepositoryImpl implements ItemRepository
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }

    public function addItem(Item $item): bool
    {

        $query = "insert into item values ('{$item->getIid()}','{$item->getName()}','{$item->getQty()}','{$item->getUprice()}')";
        return($this->connection->query($query)>0);
    }

    public function updateItem(Item $item): bool
    {
        $query="update item set name='{$item->getName()}',uprice='{$item->getUprice()}',qty='{$item->getQty()}' where iid='{$item->getIid()}'";
        return($this->connection->query($query)>0);
    }

    public function deleteItem(Item $iid): bool
    {
        $query="delete from item where iid='{$iid->getIid()}'";
        return($this->connection->query($query)>0);
    }

    public function getAllItem(): array
    {
        $query="select * from item";
        $result=$this->connection->query($query);
        return $result->fetch_all();
    }


}