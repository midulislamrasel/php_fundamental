<?php
if($page=="create-warehouse"){
	$found=include("views/pages/ui/warehouse/create_warehouse.php");
}elseif($page=="edit-warehouse"){
	$found=include("views/pages/ui/warehouse/edit_warehouse.php");
}elseif($page=="warehouses"){
	$found=include("views/pages/ui/warehouse/manage_warehouse.php");
}elseif($page=="details-warehouse"){
	$found=include("views/pages/ui/warehouse/details_warehouse.php");
}elseif($page=="view-warehouse"){
	$found=include("views/pages/ui/warehouse/view_warehouse.php");
}
?>
