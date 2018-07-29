<?php
$productId=$_GET['pid'];
//echo $productId;

	require_once('./functions/function.php');
	get_header();
	get_navbar();
	get_addvertise();
	get_product_description_by_id($productId);
	get_footer();
?>




