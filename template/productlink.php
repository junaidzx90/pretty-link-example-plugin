<?php
$product_link_id = intval( get_query_var( 'product_link_id' ) );
if(isset($product_link_id)){
    echo "Product link id is: ".$product_link_id;
    exit;
}