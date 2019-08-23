<?php

/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:34 PM
 */

require_once __DIR__ ."/../dto/Item.php";
require_once __DIR__ ."/../business/impl/ItemBOImpl.php";

$method=$_SERVER['REQUEST_METHOD'];

$itemBO=new ItemBOImpl();

switch ($method){
    case "POST":

        $itemID = $_POST['iid'];
        $itemName = $_POST['name'];
        $uPrice = $_POST['uprice'];
        $qty = $_POST['qty'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case "saveItm":
                $itemdto = new Item($itemID, $itemName, $uPrice, $qty);

                $result = $itemBO->addItem($itemdto);
                if ($result) {
                    echo "Item Added ok";
                } else {
                    echo "Item Not Added";
                }
                break;

            case "updateItm":
                $object = new Item($itemID, $itemName, $uPrice, $qty);
                $result = $itemBO->updateItem($object);
                if ($result) {
                    echo "Item Updated";
                } else {
                    echo "Item Not Update";
                }
                break;

            case "deleteItm":
                $object = new Item($itemID, $itemName, $uPrice, $qty);
                $result = $itemBO->deleteItem($object);
                if ($result) {
                    echo "Item Deleted";
                } else {
                    echo "Item Not Delete";
                }
                break;
        }
        break;

    case "GET":
        $operation=$_GET['operation'];
        switch ($operation){
            case "getAllItem":
                $result=$itemBO->getAllItem();
                echo json_encode($result);
        }break;
}
