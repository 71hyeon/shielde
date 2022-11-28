<?php
  $host = 'localhost';
  $user = 'shielde';
  $pw = 'ujhkgh1!';
  $dbName = 'shielde';

  $conn = mysqli_connect($host, $user, $pw, $dbName);
  
  if(mysqli_connect_errno()){
    echo "데이터베이스 접속 실패";
    echo mysqli_connect_errno();
  }
?>