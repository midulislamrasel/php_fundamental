<?php
if ($page == "create-member") {
	$found = include("views/pages/member/create_member.php");
} elseif ($page == "edit-member") {
	$found = include("views/pages/member/edit_member.php");
} elseif ($page == "members") {
	$found = include("views/pages/member/manage_member.php");
} elseif ($page == "details-member") {
	$found = include("views/pages/member/details_member.php");
} elseif ($page == "view-member") {
	$found = include("views/pages/member/view_member.php");
}
