<?php

/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:34 PM
 */

require_once __DIR__ . "/../dto/Customer.php";
require_once __DIR__ . "/../business/impl/CustomerBOImpl.php";

$method = $_SERVER['REQUEST_METHOD'];

$customerBO = new CustomerBOImpl();


switch ($method) {

    case "POST":

        $custID = $_POST['cid'];
        $custName = $_POST['name'];
        $address = $_POST['address'];
        $cLimit = $_POST['salary'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case "saveCust":
                $object = new Customer($custID, $custName, $address, $cLimit);
                $result = $customerBO->addCustomer($object);
                if ($result) {
                    echo "Customer Added ok";
                } else {
                    echo "Customer Not Added";
                }
                break;

            case "updateCust":
                $object = new Customer($custID, $custName, $address, $cLimit);
                $result = $customerBO->updateCustomer($object);
                if ($result) {
                    echo "Customer Updated";
                } else {
                    echo "Customer not Update";
                }
                break;

            case "deleteCust":
                $object = new Customer($custID, $custName, $address, $cLimit);
                $result = $customerBO->deleteCustomer($object);
                if ($result) {
                    echo "Customer Deleted";
                } else {
                    echo "Customer Not Deleted";
                }
                break;

            case "searchCust":
                $object=new Customer($custID, $custName, $address, $cLimit);
                $result=$customerBO->searchCustomer($object);
                break;
        }
        break;

    case "GET":
        $operation = $_GET['operation'];
        switch ($operation) {
            case "getAllCustomers":
                $result = $customerBO->getAllCustomer();
                echo json_encode($result);
        }
        break;

}



