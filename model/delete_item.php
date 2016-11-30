<?php
// $sql = "DELETE * FROM newsarticles WHERE id = " . $id;
$sql = "DELETE FROM `myband`.`newsarticles` WHERE `newsarticles`.`id` = $id";
$mysqli->query($sql);
