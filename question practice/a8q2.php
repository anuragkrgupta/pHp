<?php
$filename = "yo.txt";
$length = 100; 
// Open the file
$file = fopen($filename, "r");
//Read the file
if ($file) {
  $content = fread($file, $length);
  echo $content;
  fclose($file);
} else {
  echo "Could not open the file: ". $filename;
}
?>