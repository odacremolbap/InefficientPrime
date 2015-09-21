<html>
  <body>
<?php

$n = rand ( 100000000 , 300000000 );

function Prime($num) {
  $prime = true;
  for ($i = 2; $i < $num; $i++) {
    if($num%$i==0){
      $prime = false;
      // we should return here ... but let's do some dummy processing
    }
  }
  return $prime;
}

$prime = Prime($n);

echo "Number " + $n;
if ($prime) {
  echo " is prime";
} else {
    echo "is not prime";
}
?>
</body>
</html>
