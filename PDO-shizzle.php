<?php

task_1;
$db = new PDO('mysql:host=127.0.0.1;dbname=FirstDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `children`.`name` FROM `children` 
INNER JOIN `colors` ON `children`.`f_color` = `colors`.`id` 
WHERE `colors`.`color` = 'red';");
$query->execute();

$result = $query->fetchAll();

echo 'task_1';
var_dump($result);

task_2;
$db = new PDO('mysql:host=127.0.0.1;dbname=FirstDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `children`.`name` FROM `children`
INNER JOIN `adults` ON `adults`.`child1` = `children`.`id`
WHERE `adults`.`pet_name` = 'syd'
GROUP BY `children`.`id`;");
$query->execute();

$result = $query->fetchAll();

echo 'task_2';
var_dump($result);

task_3;
$db = new PDO('mysql:host=127.0.0.1;dbname=FirstDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `children`.`name`,`adults`.`pet_name` FROM `children` 
INNER JOIN `adults` ON `adults`.`child1` = `children`.`id` 
WHERE `adults`.`DOB` > '1985-01-01';");
$query->execute();

$result = $query->fetchAll();

echo 'task_3';
var_dump($result);


task_4;
$db = new PDO('mysql:host=127.0.0.1;dbname=FirstDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `colors`.`color` FROM `children`
INNER JOIN `colors` ON `children`.`f_color` = `colors`.`id`
INNER JOIN `adults` ON `adults`.`child1` = `children`.`id`
WHERE `adults`.`DOB` >= '1991-01-01'
GROUP BY f_color
ORDER BY COUNT(`children`.`f_color`) DESC
LIMIT 1;");
$query->execute();

$result = $query->fetchAll();

echo 'task_4';
var_dump($result);

?>