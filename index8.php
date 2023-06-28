<?php
$input = preg_split('/\s+/', $str2);
$file2 = file_get_contents("english little word inkurdish.txt");
$file2 = ucwords($file2);
$dictionary = preg_split('/\s+/', $file2);
//$dictionary  = array(like,word, earth,help);
foreach ($input as $output) {
    $shortest = -1;
    foreach ($dictionary as $word) {
        $lev = levenshtein($output, $word);
        if ($lev == 0) {
            $closest = $word;
            $shortest = 0;
        }
        if ($lev <= $shortest || $shortest < 0) {
            $closest  = $word;
            $shortest = $lev;
			
        }
    }
	
    //echo "Input word:  <hex3>$output\n</hex3>";
	
    if ($shortest == 0) {
        //echo "Exact match found: <hex>$closest\n</hex><br>";
	"<br>";	
    } else {
	echo "Input word:  <hex3>$output\n</hex3>";
        echo "Did you mean: <hex2> $closest\n</hex2>?<br>";
		
		

		
    }
}

?>
