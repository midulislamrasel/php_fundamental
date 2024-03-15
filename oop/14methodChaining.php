<?php
class abc {
    public function first(){
        echo "This is first function" . "<br>";
        return $this; // Return $this to enable method chaining
    }

    public function second(){
        echo "This is second function" . "<br>";
        return $this; // Return $this to enable method chaining
    }

    public function third(){
        echo "This is third function" . "<br>";
        return $this; // Return $this to enable method chaining
    }
}

$test = new abc();

$test->first()->second()->third();

?>