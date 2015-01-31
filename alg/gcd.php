function gcd($a1, $a2){
  while($a2){
    $t = $a1%$a2;
    $a1 = $a2;
    $a2 = $t;
  }
  return $a1;
}

function gcd_r($a1, $a2){
  if($a2){
    return gcd_r($a2, $a1%$a2);
  }
  return $a1;
}
var_dump(gcd_r(91384793756, 28));
