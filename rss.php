<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://rathalos.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $Brand = $data->getElementsByTagName("Brand")->item(0)->nodeValue;
    $Product = $data->getElementsByTagName("Product")->item(0)->nodeValue;
    $Price = $data->getElementsByTagName("Price")->item(0)->nodeValue;

    echo "
    <ul>
    <li>Brand: <strong>$Brand</strong></li>
    <li>Product: <strong>$Product</strong></li>
    <li>Price: <strong>$Price</strong></li>
    </ul>";
}