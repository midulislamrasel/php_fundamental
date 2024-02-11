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

              // echo "Hi" . '<br>';


              // echo "Hello World!";
              // Echo "Hello 1";
              // echo "Hello 2";
              // ECHO "Hello 3";

              /*
              $color  = "red";    
              echo "My House is " . $color."<br>";
              */

              // $name = "Midul Islalm";
              // $age = 25;
              // $home = "Mirpu -1";

              // echo "Full Detelsh "."name:" . $name . "age:" .$age." "."Home" .$home ."";
              // isset($name);
              // isset($address);


              // ==constants
              // define ('PI', 3.14);

              // echo PI . '<br>';

              // ====Using PHP bult-in constants
              // echo SORT_ASC. '<br>';
              // echo PHP_INT_MAX . '<br>';


              //====Declaring Numbers
              // $a = 5;
              // $b = 4;
              // $c = 1.2;

              // === Arithmetic Operations
              // echo $a + $b + $c . '<br>'; //output 10.2
              // echo $a + $b * $c . '<br>';  //output 9.8
              // echo ($a + $b) *$c .'<br>'; //output 10.8

              // echo $a - $b . '<br>';
              // echo  $a * $b . '<br>';
              // echo $a / $b . '<br>';
              // echo  $a % $b . '<br>';

              //Assignment With math Operators

              // echo $a = $a + $b .'<br>';  //output 9
              //  $a += $b; echo $a .'<br>';  //output 9



              //Increment Operation
              // echo $a++ .'<br>'; //courent valeu
              // echo ++$a .'<br>';  // Increment valeu


              //Decrement Operator
              // echo $a--. '<br>'; //output 4
              // echo --$a . '<br>';  // output 3


              //Number checking Functions
              // =================================
              // is_float(1.25); //true
              // is_double(1.25); //true
              // is_int(4);  //true
              // is_numeric("2.45"); //true
              // is_numeric("2g.22"); //false



              //Conversion
              // ==============================

              // $strNumber = '12.22';
              // $number = (int)$strNumber; //outPut 12
              // $number = (float)$strNumber; 
              // echo $number . '<br>';
              // var_dump($number). '<br>';

              // $number = floatvel($strNumber);

              // $number = intval($strNumber);
              // var_dump($number);
              // echo '<br>';


              //Number Function
              // =======================================
              // echo "abs(-15)" . abs(-15) . '<br>';
              // echo "pow(2,3)" .pow(2,3) . '<br>';
              // echo "sqrt(16)" .sqrt(16) . '<br>';
              // echo "max(2,9,3)" .max(2,9,3) . '<br>';
              // echo "min(2,3,5)" .min(2,3,5) . '<br>';
              // echo "round(2.4)" .round(2.4) . '<br>';
              // echo "round(2.6)" .round(2.6) . '<br>';
              // echo  "floor(2.4)".floor(2.6) . '<br>' ;
              // echo "ceil(2.6)" .ceil(2.6) . '<br>';




              // Formatting Numbers
              // =====================================
              // $number = 2135127.1254;
              // echo number_format($number , 3, " ." ," " )


              // stigng 
              // =====================================
              // $name = "Zura";
              // $string  =  'I am ' . $name . ' ' .'I am 28 yers old';
              // $string2 = "Hello $name ";  // " " 

              // echo $string .'<br>';
              // echo $string2 . '<br>';


              //String Concatenation
              // ======================================
              // echo 'My' .' '. 'Name'.' ' .'Sumayra Akther';


              // String function 
              // ===============================
              // $string  = "Hello World";
              // echo "1 - " . strlen ($string) . '<br>';
              // echo " 2 -" . trim ($string ) . '<br>';
              // echo "3 -" . ltrim($string) . '<br>';
              // echo "4 - " . str_word_count($string) . '<br>';
              // echo " 5 - " . strrev( $string) . '<br>';
              // echo " 6 - " . strtoupper ($string) . '<br>';
              // echo " 7 - " . strtolower ($string) . '<br>';
              // echo " 8 - " . ucfirst ($string) . '<br>';
              // echo " 9 - " . lcfirst ($string) . '<br>';
              // echo " 10 - " . ucwords ($string) . '<br>';
              // // ==More Than==



              // Multiline text and line breaks 
              // ===============================================
              // $longText = " 
              //         Hello , my Name is Zura 
              //         I am 27 
              //         I love my Daughter
              // ";
              // echo $longText . '<br>';
              // echo nl2br($longText) . '<br>'; 


              // Multiline text and reserve html tags
              // =================================================

              // $longText = " 
              //         Hello , my Name is Zura 
              //         I am 27 
              //         I love my Daughter
              // ";

              // echo $longText . '<br>';
              // echo nl2br($longText) . '<br>'; 
              // echo htmlentities($longText) . '<br>'; 
              // echo nl2br(htmlentities($longText)) . '<br>'; 




              // Creat array
              // ==================================================
              // $fruits = ['Banana', 'apple ', 'Orange'];

              // echo '<pre>';
              // var_dump($fruits);
              // echo '</pre>';

              // ===========Get Element by index==========
              // $fruits [1] = "Mainple";
              // echo $fruits [0];

              // ========= Chack if array has element ar index==========
              // isset($fruits[2]); //output true
              // isset($fruits[3]); // output false


              // =============Appent Element===========
              // $fruits [] = "Painaple";
              // var_dump($fruits);
              // echo  '<br>';

              //==========Print the length of the array====
              // echo "Cout : " . count ($fruits). '<br>';


              // =======Add Element at the end of the array=====
              // array_push($fruits ,"grapes" ,"strawberries","papayas ", " avocados", " lychees");

              // echo '<pre>';
              // var_dump($fruits);
              // echo '</pre>';

              //============Remove elemet form the end of the Arrry=======
              // array_pop($fruits);


              //===========Add element at the first of the array========
              // array_unshift($fruits, 'lemons');

              // echo '<pre>';
              // var_dump($fruits);
              // echo '</pre>';

              // ====== Remove elemets from the beginning First in the array========
              // array_shift($fruits);

              // echo '<pre>';
              // var_dump($fruits);
              // echo '</pre>';


              //=========Split the string into an array======
              // $fruitstwo = "mangoes, pineapples,pears";

              // echo '<pre>';
              // var_dump(explode(" ,", $fruitstwo));
              // echo '</pre>';

              //=====Combine array elemnts in string=====
              // echo implode ("&", $fruitstwo);


              //======Check if elemetnt exist in the array===
              // $fruits = ['Banana', 'Apple', 'Orange'];
              // echo '<pre>';
              // var_dump(in_array('Banana', $fruits));
              // echo '</pre>';        // bool(ture)
              // ===
              // echo '<pre>';
              // var_dump(in_array('Apple', $fruits));
              // echo '</pre>';           //bool (false)




              // ============Search element index in the array

              // $fruits = ['Banana', 'Apple', 'Orange'];
              // echo '<pre>';
              // var_dump(array_search('Orange', $fruits));
              // echo '</pre>';          //output int(2)


              //=========Marg two arrays=====
              // $vegetables = ['Broccoli','Capsicum','Cauliflower','Cabbage','Garlic'];
              // $vegetablestwo = ['Brinjal', 'Celery','Zucchini','Drumstick'];

              // $allVegetables = array_merge($vegetables, $vegetablestwo);
              // var_dump(...$vegetables, ...$vegetablestwo)
              // print_r($allVegetables);


            //=================Sorting of array =========
            // $vegetables = ['Broccoli','Capsicum','Cauliflower','Cabbage','Garlic'];
            
            // echo '<pre>';
            // var_dump($vegetables);
            // echo '</pre> ';

            // echo '<pre>';
            // echo resort($vegetables);
            // echo '</pre> ';



              
          // ====================Associatiove arrays =================================

// ==================Create an associative array=====================          
    // $person = [ 
    //   'name' => 'Brad',
    //   'surname' => 'Traversy',
    //   'age' => 30,
    //   'hobbies' => ['Tennis', ' Video', ' Video Gam'],
    // ];

    // echo '<pre>';
    // // var_dump($person);
    // print_r($person);
    // echo '</pre>';

    // echo '<pre>';
    // var_dump($person);
    // echo '</pre>'



  //========Get element by key=====
  // echo $person ['name'] . '<br>';



  
// ==========Set Elemet by Key===========
    // $person ['channel'] = 'TraversyMedia';

    // print_r ($person);
    // echo '<pre>';
    // var_dump($person);
    // echo '</pre>';



//========Null Coalescing assignment Operation .sin

  // $person = [ 
  //   'name' => 'Brad',
  //   'surname' => 'Traversy',
  //   'age' => 30,
  //   'hobbies' => ['Tennis', ' Video', ' Video Gam'],
  // ];

// $person ['channel'] = 'TraversyMedia';

  // if(!isset($person['address'])){
  //     $person ['address'] = 'unknows';
  //   }

// ============== OR===========

// $person = [ 
//   'name' => 'Brad',
//   'surname' => 'Traversy',
//   'age' => 30,
//   'hobbies' => ['Tennis', ' Video', ' Video Gam'],
// ];
    // $person['address'] ??= 'Nuknows' ;
    // echo '<pre>';
    // var_dump($person);
    // echo '</pre>';



// ===== Check if array has specific key ==============


// ======== Print the keys of the array ==========

// $person = [ 
//   'name' => 'Brad',
//   'surname' => 'Traversy',
//   'age' => 30,
//   'hobbies' => ['Tennis', ' Video', ' Video Gam'],
// ];

//    echo '<pre>';
//     var_dump(array_keys($person));
//   echo '</pre>';




// ======= Sorting associative arrays by value



// $person = [ 
//   'name' => 'Brad',
//   'surname' => 'Traversy',
//   'age' => 30,
//   'address' => 'Mirpur 1 Blok A Road 3',
//   'hobbies' => ['Tennis', ' Video', ' Video Gam'],
// ];

// ksort($person);   // short the array
// asort($person);   //short the valus
 
// echo '<pre>';
// var_dump ($person);
// echo '</pre>';





// === Two dimensional arrays===
  
    // $todos = [
    //   ['title' => 'todo Title 1', 'Completed' => true],
    //   ['title' => 'todo Title 2', 'Completed' => false],
    
    // ];

    // echo '<pre>';
    // var_dump($todos);
    // echo '</pre>';


      // Conditional 
// ====================
//=======Sample if
// $age = 20;
// $salary = 30000;

// if($age == 20 ){
//   echo "true" . '<br>';
// }else {
//   echo "False" . '<br>';
// }


// ====Witout circle braces
// if( $age === 20 ) echo '1'



// =========Differnce between == and ==============
// $age = 20;
// $salary = 30000;
// // (==) chack the value and (===)chak the value and type 
// if ($age === '20'){ 
//   echo 'Ture' . '<br>';
// }else{
//   echo 'False' . '<br>';
// }


// ===if AND
// $age = 21;
// $salary = 30000;

// if($age <= 20 && $salary === 30000){
//   echo '1'.'<br>';
// }else{
//   echo '2' . '<br>';
// }


// ===== if OR
// $age = 21;
// $salary = 30000;

// if($age > 25 || $salary >2000){
//   echo '1' . '<br>';
// }


// ======== Ternary if
// $age = 21;
// $salary = 30000;

// echo $age >22 ? 'Ture' : 'Flase'


// =======Short Ternary
// $age = 21;
// $salary = 30000;

// echo '<pre>';
// var_dump($myAge);
// echo '<pre>';

// ======Null Coalescing Operation
// $age = 21;
// $salary = 30000;

// $myName = isset($name) ? $name : 'John';
// $myName = $name ?? 'John';



// ========Switch
// $userRola = 'editor'; //editor , user, admin

// switch ( $userRola){
//   case  'admin';
//     echo " This is admin";
//   break;

//   case 'user';
//     echo " This is User";
//   break;

//   case 'editor';
//     echo "This is editor";
//   break;
// }




// =======Loop=====
  // while 
  // $count = 0;
  // while( $count < 10){
  //   echo $count . '<br>';
    
  //   $count ++;
  // }

  // $count = 0;
  // while( $count < 10){
  //   echo $count . '<br>';
  //   if($count === 4 ){
  //     break;
  //   }
  //   $count ++;
  // }


//===Do while===
// $count = 0;   
//   do{
//       echo $count ;
//       $count ++;
//     }while($count < 10);


//============For============ 
// for($i=0; $i<10; $i++) {
//   echo $i;
// }



// ====Foreach =====
// $fruits = [ 'Bannana' , 'Apple', 'Orange'];

// foreach( $fruits as $i => $fruit){
//   echo $i . ' '. $fruit . '<br>';
// }

 

// ===== Iterate over associative array====

// $person = [
//   'name' =>'Brad',
//   'surname' => 'Traversy',
//   'age' => 50,
//   'hobbies' => ['Tennis' , 'Video' , 'Games']
// ];
// foreach($person as $key => $value){
//   echo $key  
// }; // Not Workd





 /*         Function 
=============================== */

  // function hello (){
  //   echo 'Hello I am Zura';
  // }
  // hello();


/*====Function with argument====*/

  function hello ($name){
    echo "Hello I am $name";
  }

  hello ('zura');



















  




?>    
    </div>
    <p></p>
  </body>
</html>
