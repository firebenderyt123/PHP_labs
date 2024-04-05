<?php

echo "2+3=" . Calculator::sum(2, 3) . "<br>";
echo "3-2=" . Calculator::sub(3, 2) . "<br>";
echo "3*2=" . Calculator::multiply(3, 2) . "<br>";
echo "3/2=" . Calculator::divide(3, 2) . "<br>";
try {
    echo "3/0=" . Calculator::divide(3, 0) . "<br>";
} catch (Error $error) {
    echo "3/0=" . $error->getMessage() . "<br>";
}
echo "3%2=" . Calculator::mod(3, 2) . "<br>";
try {
    echo "3%0=" . Calculator::mod(3, 0) . "<br>";
} catch (Error $error) {
    echo "3%0=" . $error->getMessage() . "<br>";
}
echo "sqrt(4)=" . Calculator::sqrt(4) . "<br>";
echo "2^4=" . Calculator::pow(2, 4);