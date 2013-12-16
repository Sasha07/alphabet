<?php

function __autoload($class) {
    $class = str_replace('\\','/',$class);
    include_once 'classes/'.$class.'.php';
}