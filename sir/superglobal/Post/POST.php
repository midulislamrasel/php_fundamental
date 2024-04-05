<?php
  if(isset($_POST["btn"])){    
    print_r($_POST);
  }
  
?>

<form action="#" method="post">
  <div>
  Name<br> 
  <input type="text" name="name" />
 </div>
 <div>
  City<br> 
  <select name="city">
    <option value="1">Dhaka</option>
    <option value="2">Chottrogram</option>
  </select>
</div>
<div>
  Subjects<br>
  <input type="checkbox" name="subjects[]" value="english" /> English<br>
  <input type="checkbox" name="subjects[]" value="bengali" /> Bengali<br>
  <input type="checkbox" name="subjects[]" value="math" /> Math
</div>

<div>
  Gender<br>
  <input type="radio" name="gender" value="male" /> Male <br>
  <input type="radio" name="gender" value="female" /> Female <br>

</div>


  <input type="submit" value="Submit" name="btn" />
</form>