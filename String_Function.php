<?php

$first = "The five boxing wizard";
$second = "jusmp quickly";

$sentence = $first;
$sentence .= $second;

echo $sentence;
?>
<br>
All Simple : <?php echo strtolower($sentence);?>
<br>
All Capital : <?php echo strtoupper($sentence);?>
<br>
First Letter capital : <?php echo ucfirst($sentence); ?>
<br>
First letter capital in all words : <?php echo ucwords($sentence); ?>
<br>
Number of Characters : <?php echo strlen($sentence);?>
<br>
Search for a string or Characters : <?php echo strstr($sentence, "box");?>
<br>
Replace :<?php echo str_replace("five","seven",$sentence);?>
<br>