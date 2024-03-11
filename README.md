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
list (var1 ,var2 , var3 ....)
```

```php
    $my_array = array("Dog","Cat","Horse");

    list($a, $b, $c) = $my_array;
    echo "I have several animals, a $a, a $b and a $c.";

```

### output

I have several animals, a $\color{green}{Dog}$ , a $\color{green}{Cat}$ and a $\color{green}{Horse}$
