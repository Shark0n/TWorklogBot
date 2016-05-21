<?php
function __autoload($class) {
    require_once CLASS_PATH . DIRECTORY_SEPARATOR . $class . ".php";
}
?>