<?php
    echo "<h1> Function</h1>";
    echo "<h3> A function is a piece of code which takes one more input in the form of parameter and does some processing and returns a value.</h3>";

    // There are mainly two part of function. They are:-
    // 1. Creating function
    // 2. Calling function 

    // In php there more than thousand built in function 

    function demo(){ // creating function 
        echo "This a demo of a function.";
    }
    demo(); 


    echo "<h2>PHP Functions with Parameters </h2>";
    echo "<h3>
    PHP gives you option to pass your arameters inside a function. You can pass as many as parameters your like. These parameters work like variables inside your function.</h3>";

    //example of  function with parameters
    function detail($name,$email,$phone){
        echo "Name :- $name <br>Email :- $email<br>Phone :- $phone <br>";
    }
    function add($a,$b){
        $addition = $a+$b;
        echo "Addition is $addition";
    }
    detail("Ram","ram@gmail.com",985755321);
    add(30,300);

    echo "<h2>Passing argument by references</h2>";
    // example of Passing argument by references
    $a=333;
    $b=33;
    function sub($a,$b){
        
        $sub=$a-$b;
        echo "Difference is $sub<br>";
    }
    function sum($a,$b){
        $sum = $a+$b;
        echo "Sum is $sum<br>";
    }
    sub($a,$b);
    sum($a,$b);
    echo "<h2>Function with returning value</h2>";
    //Here is an example of returning values
    function addFunction($num1, $num2) {
        $sum = $num1 + $num2;
        return $sum;
     }
     $return_value = addFunction(10, 20);
     
     echo "Returned value from the function : $return_value<br>";
    //  next example
     function product($x,$y){
        $z = $x+$y;
        return $z;

     }

     echo "The products of Two number is ".product(9,8)."<br>";



    function info($name,$address){
        echo "Name :- $name <br>Address :-$address";
    }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>write a program to print 2 table for 10 times using recursive function </h1>

<?php
   
    function mult($n){
        if($n<=20){
            echo "<br> <b>$n</b>";
           return mult($n+1) + 2; 
        }     
    }
    mult(2);    
?>

</body>
</html>