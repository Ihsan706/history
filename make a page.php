<?php
$q = '<link rel="stylesheet" type="text/css" href="web.css" media="screen" />

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
<img src="<?php echo $secondLine; ?>" class="pic1">
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
} ';


$file=fopen('the php website.php', "w");
fwrite($file,$q);
fclose($file);

$w = "body {
  background: linear-gradient(to bottom left, hsl(240, 100%, 50%), hsl(140, 100%, 30%));
  background-size: cover;
  background-attachment: fixed; /* This ensures the background stays in place while scrolling */
}

*{transition: 500ms ease-in-out;}

.pic1{
transition: 1000ms ease-in-out;
width:100%;
border-radius:50%;
}


h1:hover{
float:left;
padding:1em;

text-align:center;
color:black;
font-size:7em;
}
.pic1:hover{
border-radius:0%; 

}
h1{
padding:5px;
float:left;
text-align:center;
color:blue;
font-size:5em;
}";

$file=fopen('web.css', "w");
fwrite($file,$w);
fclose($file);

$file=fopen('pic.txt', "w");
fwrite($file,"1.jpg"."\nwrite what you want in here");
fclose($file);

echo "done"
?>