<?php
$sql = "SELECT * FROM newsarticles";
$result = $mysqli->query($sql);

$result = convertResultToArray($result);
