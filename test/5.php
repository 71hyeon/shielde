<?php 
$value=[];
for($i=0; $i<50; $i++){
$server[] = file_get_contents("http://codingtest.brique.kr:8080/random");
// echo "$server[$i]<br>";
}
$count = array_count_values($server);
arsort($count);
// sort($count);
foreach($count as $key => $value){

  echo "count:".$value."".$key."<br>";
}
echo "<br>Total count:".$i;

?>