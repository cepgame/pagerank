<?php
include "pagerank.php";
$links = array(
    1 => array(5),
    2 => array(4, 7, 8),
    3 => array(1, 3, 4, 7, 8),
    4 => array(1, 2, 4, 8),
    5 => array(1, 6, 7, 8),
    6 => array(1, 5, 8),
    7 => array(3, 4),
    8 => array(1, 4, 6, 8)
);
print_r(calculatePageRank($links));
?>