<?php

header('Content-type: text/csv');
header('Content-disposition: attachment;filename=listtool.csv');

// get the comparison data
$leftString  = $_POST['left'];
$bothString  = $_POST['both'];
$rightString = $_POST['right'];

$leftArray   = explode("<br>", $leftString);
$bothArray   = explode("<br>", $bothString);
$rightArray  = explode("<br>", $rightString);

// determine number of lines
$countLeft = count($leftArray);
$lineNumber = $countLeft;

$countBoth = count($bothArray);
if ($countBoth > $lineNumber) {
  $lineNumber = $countBoth;
}

$countRight = count($rightArray);
if ($countRight > $lineNumber) {
  $lineNumber = $countRight;
}

echo "LEFT,BOTH,RIGHT\n";

for ($i = 0; $i < $lineNumber; $i++) {
  if ($countLeft > $i) {
    echo $leftArray[$i];
  }
  echo ",";
  if ($countBoth > $i) {
    echo $bothArray[$i];
  }
  echo ",";
  if ($countRight > $i) {
    echo $rightArray[$i];
  }
  echo "\n";
}

?>
