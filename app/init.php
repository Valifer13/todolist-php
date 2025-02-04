<?php 

require_once '../app/config/constant.php';
require_once '../app/config/db.php';

spl_autoload_register(function ($class_name) {
    include '../app/core/' . $class_name . '.php';
});