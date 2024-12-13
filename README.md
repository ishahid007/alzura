# Product Fetcher Module

## Overview

This module is designed to fetch product data from multiple sources, including a database (simulated via a CSV file) and an XML file. The data is then normalized into a standardized format and displayed as a unified result. The module follows an object-oriented approach using the **Service Pattern**, ensuring flexibility and easy extensibility for future sources.

## Features

- Fetches product data from multiple sources (CSV, XML).
- Normalizes data to a standard structure (Title, Description, Image Link, Price).
- Easily extensible to support additional data sources in the future.
- Implements a **ProductSourceInterface** to ensure consistency across different sources.

## Installation

1. Clone or download this repository.
2. Run `composer install` to install dependencies.
3. Pending (CSV and DB reader for now)

## Directory Structure


## Class Diagram

The **Class Diagram** illustrates the relationships between the classes used in this module. The diagram includes:
- **ProductService**: Manages the product fetching and normalization process.
- **ProductSourceInterface**: Defines the common contract for all product sources.
- **DatabaseProductSource**: Fetches products from a database (CSV file).
- **XMLProductSource**: Fetches products from an XML file.

(Include a link or attach the actual diagram file in your ZIP submission.)

## Usage

In the `index.php` file, we create instances of `DatabaseProductSource` and `XMLProductSource`, add them to the `ProductService`, and then fetch and display the products.

Example:

```php
// Include the Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Set up namespaces
use App\Sources\Database\DatabaseProductSource;
use App\Sources\XML\XMLProductSource;
use App\Services\ProductService;

// Create instances of your fetchers
$databaseFetcher = new DatabaseProductSource();
$xmlFetcher      = new XMLProductSource();

// Instantiate the ProductService and add sources
$productService = new ProductService();
$productService->addSource($databaseFetcher);
$productService->addSource($xmlFetcher);

// Fetch and display products
$products = $productService->getProducts();

// Output products in JSON format
header('Content-Type: application/json');
echo json_encode($products);
```

## Product Structure
The product data from each source is normalized into the following structure:

title: Product name.

description: Product description.

image_link: URL to the product image.

price: Price of the product.