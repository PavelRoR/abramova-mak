<?php
  $user_id = $_GET['user_id'];
  $answers = $_GET['answers'];
  $file = 'results1.txt';
  $current = file_get_contents($file);
  $file_answer = 0;
  if(strstr($current, $user_id) != false && $user_id != ''){
    $file_answer = 1;
    //$current .= $user_id." ".$answers."\n";
    //file_put_contents($file, $current);
  }
  echo $file_answer;
?>