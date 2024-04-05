<?php
    
    if(isset($_GET["page"])){

        $page=$_GET["page"];

        if($page=="contact"){
            include("pages/contact_page.php");
        }elseif($page=="about"){
            include("pages/about.php");
        }elseif($page=="product"){
            include("pages/product.php");
        }else{
            include("pages/404.php");
        }       

    }else{

        include("pages/landing.php");
    
    }

    ?>