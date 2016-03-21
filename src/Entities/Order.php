<?php

namespace Beslist\OrderAPI\Entities;

class Order extends AbstractEntity
{
    /**
     * Properties.
     */

    /** @var  int $id */
    protected $id;
    /** @var  float $priceProducts */
    protected $priceProducts;
    /** @var  float $priceShipping */
    protected $priceShipping;
    /** @var  float $priceVat */
    protected $priceVat;
    /** @var  float $priceTotal */
    protected $priceTotal;
    /** @var  \DateTime $created */
    protected $created;
    /** @var  \DateTime $paid */
    protected $paid;
    /** @var  string $conditions */
    protected $conditions;

    /**
     * Relationships.
     */

    /** @var  Product[] $products */
    protected $products;
    /** @var  Payment $payment */
    protected $payment;
    /** @var  Address $addressShipping */
    protected $addressShipping;
    /** @var  Address $addressInvoice */
    protected $addressInvoice;

    /**
     * Order constructor.
     *
     * @param array $source
     */
    public function __construct(array $source = [])
    {
        $this->fromArray($source);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceProducts()
    {
        return $this->priceProducts;
    }

    /**
     * @param float $priceProducts
     */
    public function setPriceProducts($priceProducts)
    {
        $this->priceProducts = $priceProducts;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceShipping()
    {
        return $this->priceShipping;
    }

    /**
     * @param float $priceShipping
     */
    public function setPriceShipping($priceShipping)
    {
        $this->priceShipping = $priceShipping;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceVat()
    {
        return $this->priceVat;
    }

    /**
     * @param float $priceVat
     */
    public function setPriceVat($priceVat)
    {
        $this->priceVat = $priceVat;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceTotal()
    {
        return $this->priceTotal;
    }

    /**
     * @param float $priceTotal
     */
    public function setPriceTotal($priceTotal)
    {
        $this->priceTotal = $priceTotal;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param \DateTime $paid
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * @return string
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @param string $conditions
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }
}
