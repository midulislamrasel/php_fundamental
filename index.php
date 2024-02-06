<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1 style="text-align: center">PHP</h1>
    <div style="width: 800px; margin: 0 auto">
      <?php

        // =======Print========
        // echo  "hello World"; echo "<br>";
        // print "Hello world";

        // =========variable
          // ====String===== 
            $name = 'midul';
          //======Integer====
            $age = 25;
          //=====Boolean=====
            $isMale = true;
          // ====Float/ Double===
           $height = 5.8;
          // == Null===
            $salary = null;
            
          // echo $name;
          // echo $name . ' '. $age.' '.$isMale;
          echo gettype($isMale). '<br/>';

          //print the whole variable
          var_dump("hello");
          var_dump($name , $age );
          echo '<br/>';
          $name = false;
          echo gettype($name);
          
          //variable checking functios
          // is_string($age);
          // is_int($name). "</br>";
          echo is_bool($salary); 
          echo "</br>";
          echo is_double($height);

        


      ?>
    </div>
    <p></p>
  </body>
</html>
