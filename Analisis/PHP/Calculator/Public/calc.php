<?php

require '../src/Calculator.php';

use CalculatorPHP\Calculator;

try {

$n1 = (float) $_GET['n1'];
$n2 = (float) $_GET['n2'];
$operation = (integer) $_GET['operation'];

$calc = new Calculator();

$calc->setNumber1($n1);
$calc->setNumber2($n2);

if ($operation === 1){
    $message = 'The sum between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->sum();
} else if ($operation === 2){
    $message = 'The rest between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->rest();
} else if ($operation === 3){
    $message = 'The mult between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->mult();
} else if ($operation === 4){
    $message = 'The div between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->div();
} else if ($operation === 5){
    $message = 'The log between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->log();
} else if ($operation === 6){
    $message = 'The squared between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->squared();
} else if ($operation === 7){
    $message = 'The pow between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->pow();
} else if ($operation === 8){
    $message = 'The sqrt between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->sqrt();
} else {
    $message = 'Error: the operation is invalid';
}

} catch (Exception $exc){
    if ($exc->getcode() === 680){
        $message = $exc->getMessage();
    } else {
        echo "I'm sorry, you have an error<br>";
        echo $exc->getMessage();
        echo "<br>";
        echo $exc->getTraceAsString();
    }
} finally {
  if ($message !== null){
      require 'result.php';
  }  
}





