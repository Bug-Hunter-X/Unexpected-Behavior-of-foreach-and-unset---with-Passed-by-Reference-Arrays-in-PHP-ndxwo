function foo(array $arr) {
  $arrCopy = $arr; // Create a copy of the array
  foreach ($arrCopy as $key => $value) {
    if ($value === 'some_value') {
      unset($arrCopy[$key]);
    }
  }
  return $arrCopy;
}

$myArray = ['a', 'b', 'some_value', 'd'];
$myArray = foo($myArray);
print_r($myArray); // 'some_value' is correctly removed