<!-- 3章 練習問題１ -->


<?php

$fruits = ["りんご" => "100", "みかん" => "150", "もも" => "500"];
$quantity = [3,1,6];

function getTriangleArea($fruits,$quantity) {
    return $fruits * $quantity ;
}

$area1 = getTriangleArea(100,3);
$area2 = getTriangleArea(150,1);
$area3 = getTriangleArea(500,6);

$fruits = ["りんご" => $area1, "みかん" => $area2, "もも" => $area3];

foreach ($fruits as $key => $value) {
    echo $key;
    echo 'は';
    echo $value;
    echo '円です。';
    echo '<br>';
}

?>