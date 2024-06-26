<?php
$str1= "Hello World";
echo ($str1);


// <!-- calculate strig length -->


$str1= "                   Hello World";
echo "<br>".strlen($str1);


// <!-- word count -->


$str1= "Hello World";
echo "<br>".str_word_count($str1);


// <!-- string reverse -->


$str1= "Hello World";
echo "<br>".strrev($str1);


// <!-- find te position of any word-->


$str1= "Hello student of ITER";
echo"<br>The position of the word 'student' is ".strpos($str1,"student");


// <!-- replacing word -->
$str1= "Hello World";
echo "<br>Our new string is ".str_replace("World", "student",$str1, );

// <!-- repeat -->


$str1= str_replace("World", "student",$str1, );
echo "<br>The paragraph is ".str_repeat($str1,2);


// <!-- using <pre> tag -->

echo"<br>
<pre>
    $str1<br>".ltrim($str1)."
</pre>
";


echo"<br>
<pre>
    $str1<br>".rtrim($str1)."
</pre>
";


echo"<br>
<pre>
    $str1<br>".trim($str1)."
</pre>
";
?>