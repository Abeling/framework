<?php
function convertResultToArray($DBResult){
  //convert DBResult to array
  while($result = $DBResult->fetch_assoc()){
    $array[] = $result;
  }

  return $array;
}
