<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="web.css" media="screen" />
<style>

body {
  background: linear-gradient(to bottom left, hsl(240, 100%, 50%), hsl(140, 100%, 30%));
  background-size: cover;
  background-attachment: fixed;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
}

header, footer {
  background: #282c34;
  color: white;
  text-align: center;
  padding: 1em;
  width: 100%;
}

header {
  position: fixed;
  top: 0;
}

footer {
  position: fixed;
  bottom: 0;
}

.main-content {
  margin-top: 100px;
  margin-bottom: 50px;
  width: 80%;
  max-width: 1200px;
}

.pic1 {
  transition: 1000ms ease-in-out;
  width: 100%;
  border-radius: 50%;
}

h1:hover {
  float: left;
  padding: 1em;
  text-align: center;
  color: black;
  font-size: 2.5em;
}

.pic1:hover {
  border-radius: 0%;
}

h1 {
  padding: 5px;
  text-align: center;
  color: blue;
  font-size: 2em;
  margin: 1em 0;
}
a{

}
</style>
</head>
<body>
<header>
   <a href=""><h1>الصور</h1></a><a href=""><h1>تغير الشكل</h1></a>
</header>
<div class="main-content">
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
$numbar -= 1;
$loop2 = 1;
while ($loop1 <= $numbar) {
$loop1 += 1;
$lines = explode("\n", $allprodact3);
$secondLine = $lines[$loop2];
if ($secondLine != ""): ?>
    <h1><?php echo $secondLine; ?></h1><br>
<?php endif;
$loop2 += 1;
} 
?>
</div>
<footer>
  <p>© 2024 جميع الحقوق غير محفوظة.  احسان سميح</p>
</footer>
</body>
</html>
