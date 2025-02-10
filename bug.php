function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'some_value') {
      unset($arr[$key]); //This will cause an error if the array is passed by reference
    }
  }
  return $arr;
}

$myArray = ['a', 'b', 'some_value', 'd'];
$myArray = foo($myArray);
print_r($myArray); //Notice that 'some_value' is not removed because we're operating on a copy