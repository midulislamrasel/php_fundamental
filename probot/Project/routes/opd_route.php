<?php
if($page=="manage-consulant"){
	$found=include("views/pages/opd/manage_consultant.php");
}elseif($page=="manage-patient"){
	$found=include("views/pages/opd/manage_patient.php");
}elseif($page=="manage-medicine"){
	$found=include("views/pages/opd/manage_medicine.php");
}elseif($page=="create-prescription"){
	$found=include("views/pages/opd/create_prescription.php");
}elseif($page=="manage-prescription"){
	$found=include("views/pages/opd/manage_prescription.php");
}
?>
