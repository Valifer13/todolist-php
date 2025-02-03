<?php 

spl_autoload_register(function ($class_name) {
    include '../app/core/' . $class_name . '.php';
});