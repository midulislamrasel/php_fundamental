<?php
if($page=="create-stock"){
	$found=include("views/pages/stock/create_stock.php");
}elseif($page=="edit-stock"){
	$found=include("views/pages/stock/edit_stock.php");
}elseif($page=="stocks"){
	$found=include("views/pages/stock/manage_stock.php");
}elseif($page=="details-stock"){
	$found=include("views/pages/stock/details_stock.php");
}elseif($page=="view-stock"){
	$found=include("views/pages/stock/view_stock.php");
}
?>
