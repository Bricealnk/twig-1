<?php 

require_once __DIR__ . '/../config/twig.php';

$name = 'Brice';
$products = ['guitare', 'bass', 'violin', 'cithare', 'lyre']; 
echo $twig->render('products.html.twig', ['products' => $products,'name' => $name]);

