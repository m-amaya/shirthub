<?php

// Outputs the HTML necessary to display a single $product
function get_list_view_html($product_id, $product) {
    $output = "";
    $output = $output . "<li>";
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '"alt="'. $product["name"] . '"';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";
    return $output;
}

$products = array();
$products[101] = array(
    "name" => "Mr. Moustache, Beige",
    "price" => 22,
    "img" => "img/shirts/shirt-101.jpg",
    "paypal" => "H8FM57JFL2JRL",
    "sizes" => array("Small", "Medium", "Large")
);
$products[102] = array(
    "name" => "Mr. Moustache, Indigo",
    "price" => 18,
    "img" => "img/shirts/shirt-102.jpg",
    "paypal" => "3ZRHKEY8A2GNQ",
    "sizes" => array("Medium", "Large", "X-Large")
);
$products[103] = array(
    "name" => "Schrodinger's Cat, White",
    "price" => 20,
    "img" => "img/shirts/shirt-103.jpg",
    "paypal" => "VGNKMYHAAUPQY",
    "sizes" => array("Small", "Medium")
);
$products[104] = array(
    "name" => "Computer Geek, White",
    "price" => 15,
    "img" => "img/shirts/shirt-104.jpg",
    "paypal" => "9NBXCJ7FVJ8EQ",
    "sizes" => array("Medium", "Large", "X-Large")
);
$products[105] = array(
    "name" => "SpongeBob Nerdy, Yellow",
    "price" => 20,
    "img" => "img/shirts/shirt-105.jpg",
    "paypal" => "UW986QQKSW3DW",
    "sizes" => array("Small", "Large")
);
$products[106] = array(
    "name" => "Mr. Moustache, Pink",
    "price" => 20,
    "img" => "img/shirts/shirt-106.jpg",
    "paypal" => "5QBQ3BT8JF87Q",
    "sizes" => array("Medium", "Large")
);
$products[107] = array(
    "name" => "NErDy, Grey",
    "price" => 18,
    "img" => "img/shirts/shirt-107.jpg",
    "paypal" => "NPUJUYLCG29VU",
    "sizes" => array("Large", "X-Large")
);
$products[108] = array(
    "name" => "My Selfie Shirt, White",
    "price" => 19,
    "img" => "img/shirts/shirt-108.jpg",
    "paypal" => "24MJBKB3P2F74",
    "sizes" => array("Small", "Medium")
);

?>