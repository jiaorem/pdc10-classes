<?php

include "init.php";

$class = new Classes('');
$class->setConnection($connection);
$classes = $class->getAll();

foreach ($classes as $item) {
	echo $item['class'] . ' is_completed=' . $item['is_completed'] . "\n";
}