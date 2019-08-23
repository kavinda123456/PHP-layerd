<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/19/2019
 * Time: 5:52 AM
 */

class OrderDetails
{
    private $oid;
    private $iid;
    private $qty;
    private $price;

    /**
     * OrderDetails constructor.
     * @param $oid
     * @param $iid
     * @param $qty
     * @param $price
     */
    public function __construct($oid, $iid, $qty, $price)
    {
        $this->oid = $oid;
        $this->iid = $iid;
        $this->qty = $qty;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * @param mixed $oid
     */
    public function setOid($oid)
    {
        $this->oid = $oid;
    }

    /**
     * @return mixed
     */
    public function getIid()
    {
        return $this->iid;
    }

    /**
     * @param mixed $iid
     */
    public function setIid($iid)
    {
        $this->iid = $iid;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


}