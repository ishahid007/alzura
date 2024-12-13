<?php
namespace App\Contracts;

/**
 * Interface ProductSourceInterface
 * @package App\Contracts
 */

interface ProductSourceInterface {
    /**
     * Fetch products from the source
     * @return array
     */
    public function fetchProducts() : array;

    /**
     * Normalize products
     * @param array $products
     * @return array
     */
    public function normalizeProducts(array $products);

}