<?php

require("config.php");
require("app.php");
require("controller.php");
require("database.php");
require("model.php");

spl_autoload_register(function ($class_name) {
    if (file_exists("../private/core/$class_name.php")) {
        require("../private/core/$class_name.php");
    } elseif (file_exists("../private/controllers/$class_name.php")) {
        require("../private/controllers/$class_name.php");
    } elseif (file_exists("../private/models/" . ucfirst($class_name) . ".php")) {
        require("../private/models/" . ucfirst($class_name) . ".php");
    }
});
