# php_fundamental

# What is PHP?

PHP files have extension ".php"
PHP is an acronym for "PHP: Hypertext Preprocessor
PHP is a widely-used, open source scripting language
PHP scripts are executed on the server
PHP is free to download and use

#### To check your php version you can use the phpversion() function:

     Exm :
     ```javascript
     echo phpversion();
     ``````

#### PHP Syntax

A PHP script starts with <span style = "color: red" > <?php  </span> and ends with <span style = "color: green" > ?> </span>

##### Exm :

<pre><code>
<?php
echo "Hello World!";
?>

</code></pre>

##### They are used to output data to the screen. <span style = "color: red" > echo </span>

##### There are two basic ways to get output: <span style = "color: red" > echo </span> and <span style = "color: red" > print </span>

##### <span style = "color: red" > echo and</span> <span style = "color: red" > print </span>are more or less the same. They are both used to output data to the screen.

The differences are small:<span style = "color: red" > echo </span> has no return value
while <span style = "color: red" > print </span> has a return value of 1 so it can be used in expressions.
<span style = "color: red" >echo </span> can take multiple parameters (although such usage is rare)
while <span style = "color: red" > print </span> can take one argument.
<span style = "color: red" >echo </span> is marginally faster than print.

Php Case Sensitvity
In php keywords (if , else , while, echo, etc)
Classes, Function and user-defiend function are not case
sensitive .

Comments In PHP
// This is single Line Comment # This is also a single line comment

/_This is a multi-line
Comment _/

PHP Variables
In PHP a variable starts with the $ sing
Example
$x= 5;
$y= “MIDUL”

Rules for php Variables
A variables starts with the $ singe, followed by the name of the variable
A variables name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric character and underscores(A-z, 0-9 and \_)
Variable names are case sensitive ( $age and $AGE are tow different variables)

OUTPUT VARIABLES
Exam :
$name = “HELLO SIAM”
echo “I Friend $name”

PHP has three different variable scopes:
Local
Global
static

Global and Local Scope
Exam: global
$x = 5; // global scope

function myTest() {
// using x inside this function will generate an error
echo "<p>Variable x inside function is: $x</p>";

myTest();

echo "<p>Variable x outside function is: $x</p>";

    Exam : local
    function myTest() {

$x = 5; // local scope
echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

Exam:
$x = 5;
$y = 10;

function myTest() {
$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15

PHP Data Types
String
Integer
Float(floating point numbers also called double)
Boolean
Array
Object
NULL
Resource

Return For the Other data type
var_dump() //Function

Exam:
var_dump(5);
var_dump(“MIDUL”);
var_dump(3.52);
var_dump(true);
var_dump([2,5,7]);
var_dump(NULL);

String
A string is a sequence of characters, like "Hello world!".

    $x = "Hello world!";

$y = 'Hello world!';

var_dump($x);
echo ($X);

Integer
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:
An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

Exam:
$x = 5985;
var_dump($x);

Float
A float (floating point number) is a number with a decimal point or a number in exponential form.

Exam:
$x = 10.365;
var_dump($x);

Boolean
A Boolean represents two possible states: TRUE or FALSE.
$x = true;
var_dump($x);
Array
An array stores multiple values in one single variable.
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

Object
??????????????????

NULL
Null is a special data type which can have only one value: NULL.
A variable of data type NULL is a variable that has no value assigned to it.

Exam
$x = "Hello world!";
$x = null;
var_dump($x);

Change Data type

<?php
$x = 5;
var_dump($x);

echo "<br>";

$x = "Helloo";
var_dump($x);
?>

Strings

Double quoted string literals perform operations for special characters

Exam:

<?php
$x = "John";
echo "Hello $x";
?>

The PHP strlen() function returns the length of a string.

    echo strlen("Hello world!");

The PHP str_word_count() function counts the number of words in a string.
echo str_word_count("Hello world!");
The PHP strpos() function searches for a specific text within a string
echo strpos("Hello world!", "world");
Modify Strings

The Strtoupper() Function returns the string in upper case
Exan:
$x = "Hello World!";
echo strtoupper($x);

The strtolower() Function returns the string in lower case
Exam:
$x = "Hello World!";
echo strtolower($x);

The str_replace() function replaces some characters with some other characters in a string.
Exan:
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

The PHP strrev() function reverses a string.
Exam:
$x = "Hello World!";
echo strrev($x);

Concatenate String
To concatenate, or combine, two strings you can use the . operator
Exam :
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

Exan:
$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;
Exam : 
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;

Slicing Strings

Start the slice at index 6 and goo all the way to the end
Exam:
$x = "Hello World!";
echo substr($x, 6);

Start the slice at index 6 and end the slice 5 Positions later
Exam:
$x = "Hello World!";
echo substr ($x, 6, 5);

Use negative indexes to start the slice from the end of the string:
Exam:
$x = "Hello World!";
echo substr ($x, -5, 3);

Numbers

There are three main numeric types in php
Integer
Float
Number Strings

In Addition Php has two more data types used for numbers
Infinity
NaN

Integers
2,232 , -232 , 2323, -23 are all Integers Nunber
Here are some rules for integers:
An integer must have at least one digit
An integer must NOT have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)

Php has the following predefined constants for floart(from php 7.2)
PHP_FLOAT_MAX The Largest Representable floating point number
PHP_FLOAT_MIN The Smallest representable positive floating point number
PHP_FLOAT_DIG The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON The smallest repersentable positive number x, so that x+ 1.0! = 1.0

Php has the following functions to check if the type of variable is float
is_float()
is_double() alias of is_float()

INfinity
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite

PHP has the following functions to check if a numeric value is finite of infinite:

is_finite()
is_infinite()

NAN
NaN stands for Not a Number

Numeric Stringe
The variable is numeric chack function name: is_numeric()

Exam:
$ x =2.002;
var_dump (is_numeric($x))

Casting
Casting In PHP is done with these statements;
(string) -converts to data type string
(int) -converts to data type Integer
(float) - converts to data type Float
(bool) -converst to data type Boolean
(array) -converst to data type Array
(object) -converst to data type Object
(unset) -converst to data type Null

Exam 👍
$ a= 5 // Integer
$ b = 5.22 //Float
$ c = “Hello” // String
$ d= true // Boolean
$ e = Null // NULL

//convart all Integer, Float , String , Boolean , Null is String
$a=(string) $a;
$b=(string) $b;
$c=(string) $c;
$d=(string) $d;
…………….

Var_dump($a);
Var_dump($b);
Var_dump($c);
Var_dump($d);

Math:
The pi() =>function returns the value of PI;

main() =>function can be return lowest value in a list a arguments
max() => function can be return Highes value in a list a arguments

Exam: main and max
echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));

The abs() function returns the absolute (positive) value of a number:
Exam:
echo(abs(-6.7));

The sqrt() function returns the square root of a number:
Exam:
echo(sqrt(64));

The round() function rounds a floating-point number to its nearest integer:
Exam
echo(round(0.60));
echo(round(0.49));

The rand() function generates a random number:
Exam:
echo(rand());
echo(rand(10, 100)); // if you want a random integer between 10 and 100

Constant
To create a constant, use the define() function.
Syntax
define(name, value, case-insensitive);

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;//case-sensitive name

    define("GREETING", "Welcome to W3Schools.com!",true);

echo GREETING;//case-sensitive name

You can also create a constant by using the const keyword.

const MYCAR = "Volvo";
echo MYCAR;

const vs. define()
const are always case-sensitive
define() has has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.

## File system

include file is ducliyar in error is

## Array

## Compare the values of two arrays, and return the differences:

### array1 Required. The array to compare from

### array2 Required. An array to compare against

### array3,... Optional. More arrays to compare against

`
$a1=array("a"=>"red","b"=>"green", "l"=>"cat","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");
$a4=array("a"=>"red","b"=>"green","h"=>"blue");

    $result=array_diff($a1,$a2,$a3,$a4);
    print_r($result);

`

> [!TIP]
> Array list

#### Assign variables as if they were an array:

#### Syntax
```php
list (var1 ,var2 , var3 ....) = $myArray
```

### Example
```php
    $my_array = array("Dog","Cat","Horse");

    list($a, $b, $c) = $my_array;
    echo "I have several animals, a $a, a $b and a $c.";

```

### output
I have several animals, a $\color{green}{Dog}$ , a $\color{green}{Cat}$ and a $\color{green}{Horse}$


###  Other Example
```php
    $my_array = array("Dog","Cat","Horse");

    list($a, , , $b) = $my_array;
    echo "I have several animals, a $a, a $b and a $c.";

```

### output
I have several animals, a $\color{green}{Horse}$ , a $\color{green}{Cat}$ and a 


<!-- =============== -->
> [!TIP]
> Range 

#### The range() function creates an array containing a range of elements.
#### This function returns an array of elements from low to high.


#### Syntax

```php
    range(low, high, step)
```

### Example
```php
    $letter = range("a","d");
    print_r ($letter);
```

### output
Array ( [0] => a [1] => b [2] => c [3] => d )



### Other Example
```php
    $number = range(0,50,10);
    print_r ($number);
```

### output
Array ( [0] => 0 [1] => 10 [2] => 20 [3] => 30 [4] => 40 [5] => 50 )



<!-- ========== is_array ============ -->

> [!TIP]
> is_array

#### Check whether a variable is an array or not:


#### Syntax
```php
    is_array(variable);
```

### Example
```php
    $b = array("red", "green", "blue");
    echo "b is " . is_array($b)
```

### output
[.]This function returns true (1) if the variable is an array, otherwise it returns false/nothing.

b is 1 




<!-- ============================================= -->
> [!TIP]
> array_unshift 

#### The array_unshift() function inserts new elements to an array. The new array values will be inserted in the  $\color{green}{beginning}$ of the array.
#### You can add one value, or as many as you like.
#### Numeric keys will start at 0 and increase by 1. String keys will remain the same.

#### Syntax
```php
    array_unshift(array, value1, value2, value3, ...)
```

### Example
```php
    $a = [2,4,6,8];
    $b = array_unshift($a,3);
    print_r($a)
```

### output
Array ( [0] => 3 [1] => 2 [2] => 4 [3] => 6 [4] => 8 )


### Other Example
```php
    $a = [2,4,6,8];
    $b = array_unshift($a,3,5,7,);
    print_r($a) 
```
### output
Array ( [0] => 3 [1] => 5 [2] => 7 [3] => 2 [4] => 4 [5] => 6 [6] => 8 )





<!-- =========================array_push==================== -->

> [!TIP]
> array_push 

#### The array_push() function inserts one or more elements to the  $\color{green}{end}$  of an array.  
#### You can add one value, or as many as you like.
#### Even if your array has string keys, your added elements will always have numeric keys.

#### Syntax
```php
    array_push(array, value1, value2, ...)
```

### Example
```php
    $a = ["a","b","c","d","e"];
    $b = array_push($a, "f","g","h" );
    print_r($a)
```

### output
Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f [6] => g [7] => h )

### Other Example
```php
    $a = ["a" => "apple", "b" => "bol", "c" => "cat"];
    array_push($a, "Dog", "egg");
    print_r($a);

```
### output
Array([a] => apple[b] => bol[c] => cat[0] => Dog[1] => egg)



<!-- =========================array_shift==================== --> 

> [!TIP]
> array_shift 

#### The array_shift() function removes the $\color{green}{first}$  element from an array, and returns the value of the removed element.   
#### array_shift() shifts the first value of the array off and returns it, shortening the array by one element and moving everything down.

#### Syntax
```php
    array_shift(array)
```

### Example
```php
    $a = ["a","b","c","d","e"];
    $b = array_shift($a);
    print_r($a)
```

### output
Array ( [0] => b [1] => c [2] => d [3] => e )







<!-- =========================array_pop==================== --> 

> [!TIP]
> array_pop 

#### The array_pop() function deletes the  $\color{green}{last}$  element of an array. 
#### array_pop() shifts the Last value of the array off and returns it, shortening the array by one element and moving everything down.

#### Syntax
```php
    array_pop(array)
```

### Example
```php
    $a = ["a","b","c","d","e"];
    $b = array_pop($a,);
    print_r($a)
```

### output
Array ( [0] => a [1] => b [2] => c [3] => d )






<!-- =========================array_key_exists==================== --> 

> [!TIP]
> array_key_exists 

#### The array_key_exists() function checks an  $\color{green}{array for a specified key,}$ array for a specified key, and returns true if the key exists and false if the key does not exist.

#### Syntax
```php
    array_key_exists(key, array)
    array_key_exists($index, array)
```

### Example

```php
    $a=array("A"=>"XC90","B"=>"X5","C"=>"Xe50", "D"=>"Xc80");
        if (array_key_exists("D",$a)){
          echo "Key exists!";
          }else{
          echo "Key does not exist!";
          }
```

### output
Key exists!


### Other Example
#### array key case sensitive 

```php
    $a=array("A"=>"XC90","B"=>"X5","C"=>"Xe50", "D"=>"Xc80");
        if (array_key_exists("a",$a)){
          echo "Key exists!";
          }else{
          echo "Key does not exist!";
```
### output
Key does not exist!

#### Check if the integer key "0" exists in an array:
```php
  $b = ["A","B","C","D","E","F"];
        if(array_key_exists(0,$b)){
            echo "Key Exists";
        }else{
            echo "key does not exist";
        }
```
### output
Key Exists



<!-- =========================array_search==================== --> 

> [!TIP]
> array_search 

#### The array_search() function search an array for a value and returns the key.. $\color{green}{array for a value and returns the key.. }$  

#### Syntax
```php
   array_search(value, array)
 // <!-- ==(Optional)== -->
   array_search(value, array, strict)
```

#### Optional. If this parameter is set to TRUE, then this function will search for identical elements in the array. Possible values:
[-] true
[-] false-Default

### Example
```php

    $array = array(45, 5, 1, 22, 22, 10, 10);
    $value = "10";
    echo array_search($value , $array )
// <!-- ============ -->
    $a = ['3'=>"B",'4'=>"E",'5'=>"D",'7'=>"K",'6'=>"L"];
    echo array_search("B" ,$a );
    
```

### output
5
3

### Other Example 
```php
    $arr = array("MAC", "WINDOWS","LINUX", "SOLARIS");
    $search = "LINUX";
    echo array_search($search,$arr,true);
```
### output 
2






<!-- =========================array_key==================== --> 

> [!TIP]
> array_key 

#### The array_keys() function returns an array containing the keys. 
$\color{green}{array for a specified key,}$ 


#### Syntax
```php
    array_keys(input_array, search_key_value, strict)
  
```
[-] valu =>  Optional. You can specify a value, then only the keys with this value are returned
[-] stroct =>  Optional. Used with the value parameter. Possible values:

### Example

```php
    $a =  ["A"=>"Apple","B"=>"Bol","C"=>"Cat"];
    print_r( array_keys($a));
    ```

### output
Array ( [0] => A [1] => B [2] => C )


```php
    $$b =  ["A"=>"Apple","B"=>"Bol","C"=>"Cat"];
    print_r( array_keys($b, "Bol"));
    ```

### output
Array ( [0] => B )


```php
    $user = [
        'username' => 'admin',
        'email' => 'admin@phptutorial.net',
        'is_active' => '1'
    ];
    $properties = array_keys($user, "admin", true);
    print_r($properties);
```

### output
Array ( [0] => username )




<!-- =========================array_values==================== --> 

> [!TIP]
> array_values 

#### The array_values() function returns an array containing all the 
$\color{green}{values of an array.}$ 


#### Syntax
```php
    array_values($array)
  
```
[-] The returned array will have numeric keys, starting at 0 and increase by 1.


### Example
```php
  $fruits = [
    'apple' => 'Apple',
    'orange' => 'Orange',
    'banana' => 'Banana'
    ];
    print_r(array_values($fruits,))
```

### output
Array ( [0] => Apple [1] => Orange [2] => Banana )






<!-- =========================array_column==================== --> 

> [!TIP]
> array_column 

#### The array_values() function returns an array containing all the 
$\color{green}{values of an array.}$ 


#### Syntax
```php
    array_values($array)
  
```
[-]array=> Required. Specifies the multi-dimensional array (record-set) to use. As of PHP 7.0, this can also be an array of objects.

[-]column_key=>Required. An integer key or a string key name of the column of values to return. This parameter can also be NULL to return complete arrays (useful together with index_key to re-index the array)

[-] index_key=> Optional. The column to use as the index/keys for the returned array

### Example
```php
        $a = [
        $b =[
            "id" => "2323",
            "First Name"=>"Midul",
            "Last Name"=>"Islam"
        ],
        $c =[
            "id" => "323",
            "First Name"=>"Midul",
            "Last Name"=>"Choudhori"
        ],
        $d =[
            "id" => "7323",
            "First Name"=>"Midul",
            "Last Name"=>"Raddy"
        ],
        $e =[
            "id" => "9323",
            "First Name"=>"Midul",
            "Last Name"=>"Khan"
        ],
    ];

    $lastName = array_column($a,"Last Name");
    print_r($lastName)
```

### output
Array ( [0] => Islam [1] => Choudhori [2] => Raddy [3] => Khan )



<!-- =========================Array_key==================== --> 


> [!TIP]
> array_key

#### The key() function returns the element key from the current internal pointer position.



#### Syntax
```php
    key(array)
```

### Example
```php
    $people=array("Peter","Joe","Glenn","Cleveland");
    echo "The key from the current position is: " . key($people);)
```

### output
  The key from the current position is: 0


### Other Example
```php 
<?php 

// input array 
$arr=array("Ram", "Geeta", "Shita", "Ramu"); 

// next function increase the internal pointer 
// to point next to the current element. 
next($arr); 

// Here key function prints the index of 
// the current element of the array. 
echo "The index of the current element of"." the array is: " . key($arr); 
                
?> 
```

### output
The index of the current element of the array is: 1







<!-- =========================Array_next==================== --> 


> [!TIP]
> next

#### The next() function $\color{green}{firstly moves the current pointer to the next element and returns the element.}$


#### Syntax
```php
   next(array)
```

### Example
```php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>";
    echo next($people);
    ```

### output
    Peter
    Joe


### Other Example
```php 
    $arr2 = array("name" => "Amit", "age" => 21, "Gender" => "Male");

    echo current($arr2) . "\n"; //print first element
    echo next($arr2) ."\n"; //move to next element and print
    echo next($arr2) ."\n";
```

### output
Amit
21
Male


<!-- =========================current==================== --> 


> [!TIP]
> current

#### The current() function  $\color{green}{returns the value of the current element in an array.}$


#### Syntax
```php
   current(array)
```

### Example
```php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>";

    ```

### output
    Peter


### Other Example
```php 
<?php 

    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>";   
    echo current($people) . "<br>";         
?> 
```

### output
Peter
Joe


### current , Next , Prev , end, reset, 
#### Syntax
```php
   .......(array)
```



```php

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo next($people) . "<br>"; 
echo current($people) . "<br>"; 
echo prev($people) . "<br>"; 
echo end($people) . "<br>"; 
echo prev($people) . "<br>"; 
echo current($people) . "<br>"; 
echo reset($people) . "<br>"; 
echo next($people) . "<br>" ;
```
#### Current $\color{green}{The current element is Peter}$
#### next $\color{green}{The next element of Peter is Joe}$
#### current $\color{green}{Now the current element is Joe}$
#### prev $\color{green}{The previous element of Joe is Peter}$
#### end $\color{green}{The last element is Cleveland}$
#### prev $\color{green}{The previous element of Cleveland is Glenn}$
#### current $\color{green}{Now the current element is Glenn}$
#### reset $\color{green}{Moves the internal pointer to the first element of the array, which is Peter}$
#### next $\color{green}{The next element of Peter is Joe}$

### Output
Peter
Joe
Joe
Peter
Cleveland
Glenn
Glenn
Peter
Joe








<!-- =========================array_walk==================== --> 


> [!TIP]
> next

#### The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.



#### Syntax
```php
   array_walk(array, myfunction, parameter...)
```

### Example
```php
    function myfunction($value,$key,$p)
    {
    echo "$key $p $value<br>";
    }
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    array_walk($a,"myfunction","has the value");
```

### output
a has the value red
b has the value green
c has the value blue


### Other Example
```php 
    function myfunction(&$value,$key)
    {
    $value="yellow";
    }
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    array_walk($a,"myfunction");
    print_r($a);
```

### output
Array ( [a] => yellow [b] => yellow [c] => yellow )



### Other Example
```php 
    function myfunction($value,$key)
    {
    echo "The key $key has the value $value<br>";
    }
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    array_walk($a,"myfunction");
```

### output
The key a has the value red
The key b has the value green
The key c has the value blue





<!-- =========================Array_count==================== --> 


> [!TIP]
> count

#### The count() function  $\color{green}{returns the number of elements in an array}$


#### Syntax
```php
   count(array, mode)
```

### Example
```php
   $cars=array("Volvo","BMW","Toyota");
    echo count($cars);
```

### output
3




<!--====================Array_count_values================ --> 


> [!TIP]
>array_count_values

#### The array_count_values() function counts all the values of an array. $\color{green}{counts all the values of an array.}$


#### Syntax
```php
   array_count_values(array)
```

### Example
```php
   $a=array("A","B" ,"Cat","Dog","A","Cat", "Dog","Dog","Dog");
    print_r(array_count_values($a));
```

### output
Array ( [A] => 2 [B] => 1 [Cat] => 2 [Dog] => 4 )




<!--====================array_unique==========---->


> [!TIP]
>array_unique

#### The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.



#### Syntax
##### sorttyp -Optional 
```php
   array_unique(array, sorttype)
```

### Example
```php
   $a=array("a"=>"red","b"=>"green","c"=>"red");
    print_r(array_unique($a));
```

### output
Array ( [a] => red [b] => green )







<!--==========array_revers=======---->


> [!TIP]
>array_revers

#### The array_reverse() function returns an array in the reverse order.



#### Syntax 
```php
   array_reverse(array, preserve)
```

### Example
```php
   $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
        print_r(array_reverse($a));
```

### output
Array ( [c] => Toyota [b] => BMW [a] => Volvo )