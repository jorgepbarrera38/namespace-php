<?php

    function autoload ($class) {
        include $class . '.php';
        //include 'modelo/' . $class . '.php';
    }

    spl_autoload_register('autoload');