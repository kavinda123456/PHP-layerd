<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/19/2019
 * Time: 5:56 AM
 */

require_once __DIR__ . "/../../dto/Order.php";
require_once __DIR__ . "/../../dto/OrderDetails.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repository/impl/OrderRepositoryImpl.php";
require_once __DIR__ . "/../../repository/impl/OrderDetailsRepositoryImpl.php";
require_once __DIR__ . "/../../business/OrderBO.php";

class OrderBOImpl implements OrderBO
{
    private $orderRepository;
    private $orderDetailRepository;

    /**
     * OrderBOImpl constructor.
     */
    public function __construct()
    {
        $this->orderRepository = new OrderRepositoryImpl();
        $this->orderDetailRepository = new OrderDetailsRepositoryImpl();
    }


    public function addOrder(Order $order, OrderDetails $orderDetails): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->orderRepository->setConnection($connection);
        $this->orderDetailRepository->setConnection($connection);
        mysqli_autocommit($connection,false);
        if ($this->orderRepository->addOrder($order)){
            if ($this->orderDetailRepository->addOrderDetail($orderDetails)){
                mysqli_commit($connection);
                mysqli_autocommit($connection,true);
                return true;
            }else{
                mysqli_rollback($connection);
                mysqli_autocommit($connection,true);
                return false;

            }
        }else{
            mysqli_rollback($connection);
            mysqli_autocommit($connection,true);
            return false;
        }
    }
}