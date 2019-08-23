<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/19/2019
 * Time: 5:52 AM
 */

class Order
{
    private $oid;
    private $cid;
    private $date;

    /**
     * Order constructor.
     * @param $oid
     * @param $cid
     * @param $date
     */
    public function __construct($oid, $cid, $date)
    {
        $this->oid = $oid;
        $this->cid = $cid;
        $this->date = $date;
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



}