<?php

namespace App\Services;

use App\Contracts\ProductSourceInterface;

/**
 * Class ProductService
 * @package App\Services
 */

class ProductService
{
    private array $sources = [];

    public function addSource(ProductSourceInterface $source)
    {
        $this->sources[] = $source;
    }

    public function getProducts(): array
    {
        $products = [];

        foreach ($this->sources as $source) {
            // Fetch products from the current source
            $fetchedProducts = $source->fetchProducts();

            // Normalize the fetched products
            $normalizedProducts = $source->normalizeProducts($fetchedProducts);

            // Merge normalized products into the final products array
            $products = array_merge($products, $normalizedProducts);
        }

        return $products;
    }
}
