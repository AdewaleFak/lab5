<?php
require_once "page.php";



$p = new Page(
    '<h1>This is my Product Page</h1>',
    '<p>A product description is the copy that describes the features and benefits of a product to a customer. </p>',
    '<br><a href="#">adewale@humber.com</a>'
);

$display = $p->displayPage();
echo $display;




