<?php

$Array = array();
for ($i=0; $i < 10000; $i++) { 
    $Array[$i] = mt_rand(0,1);
}
$results = array(0,1);
for($c = 0; $c < count($Array); $c++)
{
  
  if($Array[$c] == "0")
  {
    $results[0] = $results[0] + 1;
  }
  else
  {
    $results[1] = $results[1] + 1;
  }
}
if($results[0] > $results[1])
{
	$tie = FALSE;
  $result = "Heads.";
}
else if($results[0] < $results[1])
{
	$tie = FALSE;
  $result = "Tails.";
}
else
{
	$tie = TRUE;
  $result = "Undetermined, please try again.";
}
?>