function myFunc() {
  $a = 10;
  $b = 0;
  if ($b == 0) {
    return 'Division by zero error'; // Handle division by zero gracefully
  }
  $result = $a / $b;
  return $result;
}

$result = myFunc();
print_r($result); // Outputs 'Division by zero error' 