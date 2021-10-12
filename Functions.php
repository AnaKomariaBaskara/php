What output results from the following code?
function func($arg)  {
  $result = 0;
  for($i=0; $i<$arg; $i++) {
    $result = $result + $i;
  }
  return $result;
}
echo func(5);
10



Fill in the blanks to output "Welcome Robert".
function greet($name)   {
  return "Welcome ".$name;}
echo greet('Robert');



Fill in the blanks to declare a function myFunction, taking two parameters and printing the product of their multiplication to the screen.
function myFunction($a, $b) {
  echo $a * $b;
 }