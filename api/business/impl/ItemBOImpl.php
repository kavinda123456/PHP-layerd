<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:30 PM
 */

require_once __DIR__ ."/../../dto/Item.php";
require_once __DIR__ ."/../../repository/impl/ItemRepositoryImpl.php";
require_once __DIR__ ."/../../business/ItemBO.php";
require_once __DIR__ ."/../../db/DBConnection.php";

class ItemBOImpl implements ItemBO
{
    private $itemRepository;

    /**
     * ItemBOImpl constructor.
     */
    public function __construct()
    {
        $this->itemRepository=new ItemRepositoryImpl();
    }


    public function addItem(Item $item): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->addItem($item);
    }

    public function updateItem(Item $item): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->updateItem($item);
    }

    public function deleteItem(Item $iid): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->deleteItem($iid);
    }

    public function getAllItem(): array
    {
        $connection=(new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->getAllItem();
    }

}