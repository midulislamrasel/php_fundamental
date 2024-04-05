<style>
    table{
        border-collapse:collapse;
    }
    td,th{
        border:1px solid lightgray;
        padding:4px;
    }
</style>
<?php
require_once("db_config.php");

$result=$db->query("select * from test");
$html="<table>";
$html.="<tr><th>ID</th><th>Name</th><th>Password</th><th>Email</th><th>Mobile</th><th>IP</th><th>Action</th></tr>";
while($row=$result->fetch_object()){ 
  $html.="<tr>";
  $html.="<td>$row->id</td>";
  $html.="<td>$row->name</td>";
  $html.="<td>$row->age</td>";
  $html.="<td>$row->phone</td>";
  $html.="<td>$row->city</td>";
  $html.="<td><a href='update.php?id=$row->id'>Edit</a> | <a href='delete.php?id=$row->id'>Delete</a> </td>";
  $html.="</tr>";
}
$html.="</table>";

echo $html;

function passwordHints($password){
    
    $hints="";
    if($password!=""){
        for($i=0;$i<strlen($password);$i++){
        
            if($i==0 || $i>=strlen($password)-2){
            $hints.=$password[$i];
            }else{
                $hints.="*";
            }
            
        }
    }else{
        $hints="******";
    }
  
    return $hints;
}

?>
