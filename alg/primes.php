function primes_eratosthenes($to){
  $numbers = array_fill(0, $to, true);
  $numbers[0] = $numbers[1] = false;
  $primes = [];
  for($i = 2; $i < $to; $i++){
    if($numbers[$i]){
      $primes[] = $i;
      for($j = 2; $i*$j < $to; $j++){
        $numbers[$i*$j] = false;
      }
    }
  }
  return $primes;
}

function trial_division($a){
  $primes = primes_eratosthenes($a**0.5 + 1);
  $factors = [];
  foreach ($primes as $p) {
    if($p*$p > $a) break;
    while($a%$p === 0){
      $factors[] = $p;
      $a = $a/$p;
    }
  }
  if($a>1){
    $factors[] = $a;
  }
  return $factors;
}
