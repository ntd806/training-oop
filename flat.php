<?php
include 'point.php';
include 'triangle.php';

$point_A = new  Point(1,2);
$point_B = new Point(2,3);
$point_C = new Point(4,5);
$triangle = new Triangle($point_A, $point_B, $point_C);

echo "distance: </br>".$point_A->distance($point_B)."</br>";
echo "triangle: </br>".$triangle->area()."</br>";