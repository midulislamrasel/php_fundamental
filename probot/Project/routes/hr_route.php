<?php
if($page=="create-person"){
	$found=include("views/pages/hr/person/create_person.php");
}elseif($page=="edit-person"){
	$found=include("views/pages/hr/person/edit_person.php");
}elseif($page=="persons"){
	$found=include("views/pages/hr/person/manage_person.php");
}elseif($page=="details-person"){
	$found=include("views/pages/hr/person/details_person.php");
}elseif($page=="view-person"){
	$found=include("views/pages/hr/person/view_person.php");
}
?>

<?php
if($page=="create-position"){
	$found=include("views/pages/hr/position/create_position.php");
}elseif($page=="edit-position"){
	$found=include("views/pages/hr/position/edit_position.php");
}elseif($page=="positions"){
	$found=include("views/pages/hr/position/manage_position.php");
}elseif($page=="details-position"){
	$found=include("views/pages/hr/position/details_position.php");
}elseif($page=="view-position"){
	$found=include("views/pages/hr/position/view_position.php");
}
?>

<?php
if($page=="create-department"){
	$found=include("views/pages/hr/department/create_department.php");
}elseif($page=="edit-department"){
	$found=include("views/pages/hr/department/edit_department.php");
}elseif($page=="departments"){
	$found=include("views/pages/hr/department/manage_department.php");
}elseif($page=="details-department"){
	$found=include("views/pages/hr/department/details_department.php");
}elseif($page=="view-department"){
	$found=include("views/pages/hr/department/view_department.php");
}
?>

