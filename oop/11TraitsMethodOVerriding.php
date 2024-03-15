<?php

trait Hello {
    public function sayHello() {
        echo "Hello from Hello Trait". "<br>";
    }
}

trait Hi {
    public function sayHi() {
        echo "Hello from Hi Trait. \n";
    }
}

class B {
    // Method specific to class B
    public function saySomething() {
        echo "Hello from B class. \n";
    }
}

class D extends B {
    use Hello, Hi {
        Hello::sayHello insteadof Hi;
        Hi::sayHi as sayHello;
    }

    // You can still have your own method in the class D
    public function sayHello() {
        echo "Hello from D class. \n";
    }
}

$test = new D();
$test->sayHello(); // Output: Hello from D class.
$test->sayHi();    // Output: Hello from Hi Trait.
$test->saySomething(); // Output: Hello from B class.

?>
