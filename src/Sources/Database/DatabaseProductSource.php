<?php

namespace App\Sources\Database;

use App\Contracts\ProductSourceInterface;

/**
 * Class DatabaseProductSource
 * @package App\Sources\Database
 */
class DatabaseProductSource implements ProductSourceInterface {

    public function fetchProducts(): array
    {
        return [
            [
                'id'    => 1,
                'manufacturer' => 'Manufacturer DB 1',
                'name' => 'Product 1',
                'additional' => 'Additional information about product 1',
                'price' => 100,
                'availability' => 10,
                'product_image' => 'https://via.placeholder.com/150',
            ],
            [
                'id'    => 2,
                'manufacturer' => 'Manufacturer DB 2',
                'name' => 'Product 2',
                'additional' => 'Additional information about product 2',
                'price' => 200,
                'availability' => 20,
                'product_image' => 'https://via.placeholder.com/150',
            ],
            [
                'id'    => 3,
                'manufacturer' => 'Manufacturer DB 3',
                'name' => 'Product 3',
                'additional' => 'Additional information about product 3',
                'price' => 300,
                'availability' => 30,
                'product_image' => 'https://via.placeholder.com/150',
            ],

        ];
    }
    /*
    title, description, image_link and price
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