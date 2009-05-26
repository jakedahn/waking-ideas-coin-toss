Test page:

<?

include('htmlDom.php');

$html = file_get_html('http://www.random.org/integers/?num=10&min=0&max=1&col=1&base=10&format=html&rnd=new');

// Grabs contents of pre tag
foreach($html->find('pre') as $element)
    $numString = $element->plaintext;

$str = $numString;

$stre = str_replace("0", "one",$str, $i);
echo $stre;

?>