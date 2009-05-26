<?php

    include('htmlDom.php');

    $html = file_get_html('http://www.random.org/integers/?num=10000&min=0&max=1&col=1&base=10&format=html&rnd=new');

    // Grabs contents of pre tag
    foreach($html->find('pre') as $element)
        $numString = $element->plaintext;

    $replaceOnes = str_replace("0", "",$numString, $i);
    $heads = $i;
    $tails = 10000 - $heads;

    if($heads > $tails){
        $result = "Heads.";
    }
    else if($heads < $tails){
        $result = "Tails.";
    }
    else if($heads == $tails){
        $result = "Undetermined, please try again.";
    }



?>