function myFunc() {
  $a = 10;
  $b = 0;
  $result = $a / $b; // Division by zero
  return $result;
}

$result = myFunc();
print_r($result); // Throws a Warning: Division by zero