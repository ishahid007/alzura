<?php

namespace App\Entities;

/**
 * Class Product
 * @package App\Entities
 */
class Product
{
    public int $id;
    public string $manufacturer;
    public string $name;
    public string $additional;
    public float $price;
    public int $availability;
    public string $product_image;

    /**
     * Product constructor.
     * @param int $id
     * @param string $manufacturer
     * @param string $name
     * @param string $additional
     * @param float $price
     * @param int $availability
     * @param string $product_image
     */
    public function __construct($id, $manufacturer, $name, $additional, $price, $availability, $product_image)
    {
        $this->id = $id;
        $this->manufacturer = $manufacturer;
        $this->name = $name;
        $this->additional = $additional;
        $this->price = $price;
        $this->availability = $availability;
        $this->product_image = $product_image;
    }
}
