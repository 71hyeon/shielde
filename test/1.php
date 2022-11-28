<?php 
$row=0;
$total=0;
$calcul=0;
$error=0;
$errval=[];
$openfile = fopen("sample.csv", "r");
while ($data = fgetcsv($openfile, 100,",")) {
  if($row<=0){
    $row++;
  }
  else{
  $temp = [];
  $num = count($data);

   for ($i=0; $i < $num; $i++) {
        if(!is_numeric($data[$i])){
          array_push($errval,$data[$i]);
        }
        else{
         array_push($temp, $data[$i]);
      }
      }
    if(count($temp) != $num){
      $temp = [];
      $error++;
    }
    else{

    for($i=0;$i<$num;$i++){
      // echo "$temp[$i]&nbsp";
    }
    $max=max($temp);
    $min=min($temp);
    $sum= array_sum($temp);
    $avg=$sum/$num;
    for($i=0,$s=0;$i<$num;$i++){
      $s+=($temp[$i]-$avg)*($temp[$i]-$avg);
    }
    $dev=sprintf(sqrt($s/$num));

    if($num%2==0){
      $mid=$num/2;
     $midvalue= (($temp[$mid-1]+$temp[$mid])/2);
    }
    else{
      $mid=round($num/2);
      $midvalue=$temp[$mid-1];
    }

    echo $max,"&nbsp",$min,"&nbsp",$sum,"&nbsp",$avg,"&nbsp",$dev,"&nbsp",$midvalue;
    echo "<br>";
  }

   $total++;
}
}
echo "--------------------------------------------";
echo "<br> The total number of lines:[$total]<br>";
$calcul=$total-$error;
echo "The total number of lines:[$calcul]<br>";
echo "The total number of lines:";
$errcount=count($errval);
for($i=0; $i<$errcount; $i++){
echo "$errval[$i] ";
}
fclose($openfile);

?>