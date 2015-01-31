#Newton's guess and check method
function sqrtNewtonGuessCheck($value)
{
  $minError = 0.00001;
  $start = 0.0;
  $end = $value;
  $middle = ($start + $end) / 2;
  $error = $middle * $middle - $value;

  while (abs($error) > $minError) {
    if ($error < 0) {
      $start = $middle;
    } else if ($error > 0) {
      $end = $middle;
    }
    $middle = ($start + $end) / 2;
    $error = $middle * $middle - $value;
  }

  return $middle;
}

function sqrtNewtonRaptor($value){
  $guess = $value/2;
  $minError = 0.001;
  while(abs($guess*$guess - $value) > $minError){
    $prevGuess = $guess;
    $guess = $prevGuess - ($prevGuess*$prevGuess-$value)/(2*$prevGuess);
  }
  return $guess;
}
