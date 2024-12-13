<?php

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the Composer autoloader to automatically load classes
require_once __DIR__ . '/vendor/autoload.php';

// Set the default timezone (optional but recommended)
date_default_timezone_set('UTC');

// Set up namespaces to access classes from `src/`
use App\Sources\Database\DatabaseProductSource;
use App\Sources\XML\XMLProductSource;
use App\Services\ProductService;

// Create instances of sources
$databaseFetcher = new DatabaseProductSource();
$xmlFetcher      = new XMLProductSource();

// Instantiate the ProductService class and use the `addSource` method to add sources
$productService = new ProductService();
$productService->addSource($databaseFetcher);
$productService->addSource($xmlFetcher);


// Fetch and display products
$products = $productService->getProducts();

// Output products (as a simple example)
header('Content-Type: application/json');
echo json_encode($products);

// Optionally, we can log, render views, or add more routing functionality
