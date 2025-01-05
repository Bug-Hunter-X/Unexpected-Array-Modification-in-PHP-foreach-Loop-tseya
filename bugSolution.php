function foo(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b )

//Alternative solution using array_filter
function bar(array $arr) {
  return array_filter($arr, function ($value) { return $value !== 'a';});
}

$arr = ['a', 'b', 'a', 'c'];
$result = bar($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )