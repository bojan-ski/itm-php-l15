<?php

declare(strict_types=1);

// check user/product provided data
function checkProductData(string $productData): string
{
    if (isset($productData) && !empty(trim($productData))) {
        return $productData;
    } else {
        die("Please provide product name or desc!");
    }
};

(string) $searchTerm = checkProductData($_GET['searchTerm']);
(array) $searchProductResult = [];

try {
    // connect to DB
    require_once 'connectToDB.php';

    // search product - query
    $searchProductQuery = "SELECT * FROM products WHERE product_name LIKE '%$searchTerm%' OR product_desc LIKE '%$searchTerm%'";

    // search product - response 
    $searchProductResponse = $connectionToDB->query($searchProductQuery);

    // search product - result
    if($searchProductResponse->num_rows > 0) {
        $searchProductResult = $searchProductResponse->fetch_all(MYSQLI_ASSOC);
        var_dump($searchProductResult);
    }else{
        var_dump('No product exist with provided input data!');
    };
} catch (Exception $e) {
    //redirect user
    header("Location: ../error.php");
} finally {
    // close connection
    $connectionToDB->close();
}
