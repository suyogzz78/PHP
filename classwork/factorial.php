<?php declare(strict_types=1); // strict requirement
function factorial(int $n) {
    if($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
function Fibonacci($number){ 
      
    // if and else if to generate first two numbers 
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
      
    // Recursive Call to get the upcoming numbers 
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
}
echo "factorial of 6=<br>";
echo factorial(6);
echo"<br>";

echo "fibonacci of 10 terms=<br>";
for ($i = 0; $i < 10; $i++) {
    echo Fibonacci($i), " ";
}

?>