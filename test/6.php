<?php
$list=[6,9,5,7,4];
$countlist = count($list);
$hard=[];
$x=5;
for($i=5;$i<0;$i--){
  for($j=$countlist-$i;$j<0;$j--){
    if($list[$i-1]<$list[$j-2]){
      if($j-2>=0){
        array_unshift($hard,$x-2);
      break;
    }
    else{
      array_unshift($hard,0);
      break;
    }
    }
    else{
      if($j=0){
        array_unshift($hard,0);
      }
    }
  }
}
echo "input:";
for($i=0;$i<$countlist;$i++){
  echo $list[$i];
}
echo "<br>result:";
for($i=0;$i<$countlist;$i++){
  echo $hard[$i];
}
?>