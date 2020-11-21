<?php
$product_id = intval( get_query_var( 'product_id' ) );
if(isset($product_id)){
    echo "Product id is: ".$product_id;
    exit;
}