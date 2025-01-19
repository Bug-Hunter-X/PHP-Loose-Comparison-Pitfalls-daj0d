<?php
function compareValues($val1, $val2) {
  echo "Loose comparison (==): ";
  if ($val1 == $val2) {
    echo "Values are equal\n";
  } else {
    echo "Values are not equal\n";
  }
  echo "Strict comparison (===): ";
  if ($val1 === $val2) {
    echo "Values are equal\n";
  } else {
    echo "Values are not equal\n";
  }
}

compareValues('0', 0); // Loose: equal, Strict: not equal
compareValues('', false); //Loose: equal, Strict: not equal
compareValues(true, '1'); //Loose: equal, Strict: not equal
?> 