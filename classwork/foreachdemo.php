<?php
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
 echo "$value <br>";
}
for($i=0;$i<count($colors);$i++){
    echo $colors[$i]."<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x ) {
    echo  $x ."<br>";
   
}

?>