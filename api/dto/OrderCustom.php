<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/22/2019
 * Time: 10:59 PM
 */

class OrderCustom
{
    private $oid;
    private $cid;
    private $date;
    private $iid;
    private $qty;
    private $price;

    /**
     * OrderCustom constructor.
     * @param $oid
     * @param $cid
     * @param $date
     * @param $iid
     * @param $qty
     * @param $price
     */
    public function __construct($oid, $cid, $date, $iid, $qty, $price)
    {
        $this->oid = $oid;
        $this->cid = $cid;
        $this->date = $date;
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
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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