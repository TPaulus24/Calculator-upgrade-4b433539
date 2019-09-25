<?php
// a: 
echo "Welke operatie wil je uitvoeren ( + - %)" . PHP_EOL;
$operator = readLine("> ");
if ($operator == "+" || $operator == "-" || $operator == "%") {
    goto b;
} else {
    // echo "Kies 1 van de 4 operaties" . PHP_EOL;
    // goto a;
    exit();
}
b: echo "Eerste getal?" . PHP_EOL;
$num1 = readLine("> ");
echo "Tweede getal?" . PHP_EOL;
$num2 = readLine("> ");
if (is_numeric($num1) && is_numeric($num2)) {
    if ($operator == "+") {
        echo "Uw resultaat is " . ($num1 + $num2);
    } else if ($operator == "-") {
        echo "Uw resultaat is " . ($num1 - $num2);
    } else if ($operator == "%") {
        echo "Uw resultaat is " . ($num1 % $num2);
    } else {
        exit("Kan niet berekend worden");
    };
} else {
    exit("Aleen nummers toegestaan");
}