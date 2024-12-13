<?php

namespace App\Sources\XML;

use App\Contracts\ProductSourceInterface;

/**
 * Class XMLProductSource
 * @package App\Sources\XML
 */

class XMLProductSource implements ProductSourceInterface
{
    public function fetchProducts()
    {
        return [
            [
                'id'    => 4,
                'manufacturer' => 'Manufacturer XML 4',
                'name' => 'Product 4',
                'additional' => 'Additional information about product 1',
                'price' => 100,
                'availability' => 10,
                'product_image' => 'https://via.placeholder.com/150',
            ],
            [
                'id'    => 5,
                'manufacturer' => 'Manufacturer XML 5',
                'name' => 'Product 5',
                'additional' => 'Additional information about product 2',
                'price' => 200,
                'availability' => 20,
                'product_image' => 'https://via.placeholder.com/150',
            ],
            [
                'id'    => 6,
                'manufacturer' => 'Manufacturer XML 6',
                'name' => 'Product 6',
                'additional' => 'Additional information about product 3',
                'price' => 300,
                'availability' => 30,
                'product_image' => 'https://via.placeholder.com/150',
            ],

        ];
    }

    /*
    ** title, description, image_link and price
    */
    public function normalizeProducts(array $products)
    {
        return array_map(function ($product) {
            return [
                'title'    => $product['name'],
                'description' => $product['additional'],
                'image_link' => $product['product_image'],
                'price' => number_format($product['price'], 2),

            ];
        }, $products);
    }
}
