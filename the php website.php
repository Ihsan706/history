<link rel="stylesheet" type="text/css" href="web.css" media="screen" />

<?php
$numbar = 0;
$filename = "pic.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$allprodact3 = "";
foreach ($lines as $lineNumber => $lineContent) {
$numbar+=1;

    $allprodact3 .= $lineContent . "\n"; 
}

$lines = explode("\n", $allprodact3);
$secondLine = $lines[0];

?>
<a><img src="<?php echo $secondLine; ?>" class="pic1"></a>
<?php


$loop1 = 0;
$numbar -=1;
$loop2 = 1;

while ($loop1 <= $numbar){

$loop1 += 1;


$lines = explode("\n", $allprodact3);
$secondLine = $lines[$loop2];

if ($secondLine != ""): ?>
    <h1><?php echo $secondLine; ?></h1><br>
<?php endif;

$loop2 += 1;
} 
?><a class="a" href="balnk">تغير الشكل</a>