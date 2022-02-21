<?php

spl_autoload_extensions(".php");

spl_autoload_register(function ($class_name) {
    include 'application/core/view.php';
    include 'application/core/controller.php';
    include 'application/core/model.php';
    include 'application/core/route.php';
});
