<?php
    
    if(isset($_GET["views"])){

        $page=$_GET["views"];

        if($page=="contact"){
            include("views/contact_page.php");
        }elseif($page=="about"){
            include("views/about.php");
        }elseif($page=="product"){
            include("views/product.php");
        }else{
            include("views/404.php");
        }       

    }else{

        include("views/landing.php");
    
    }

    ?>