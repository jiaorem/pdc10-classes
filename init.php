<?php

include "vendor/autoload.php";
include "config/database.php";

use Models\Class;
use Models\ClassRoster;
use Models\Student;
use Models\Teacher;
use config\database;

$connObj = new Connection ($host, $database, $user, $password);
$connection = $connObj->connect();