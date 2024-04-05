<?php
  if(isset($_POST["btn"])){

     $file=$_FILES["photo"];   
      
     $tmp_name=$file["tmp_name"];
     $name=$file["name"];
     $size=$file["size"];
     $type=$file["type"];

     $kb=$size/1024;

     //echo $kb;
   
     if($kb<=300){
     
      if($type=="image/png" || $type=="image/jpeg"){

        if(move_uploaded_file($tmp_name,"img/$name")){
          echo "Success";
        }

      }else{
        echo "invalid file format";
      }

     }else{
      echo "only within 300kb allowed";
     }
     
  }
  
?>

<form action="#" method="post" enctype="multipart/form-data" >
  Photo: <input type="file" name="photo" />
  <input type="submit" value="Submit" name="btn" />
</form>