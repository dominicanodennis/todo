<?php

namespace todo;

$res = '';


/**
 * Created by PhpStorm.
 * User: preacher
 * Date: 09.09.15
 * Time: 16:19
 */

require_once "model/todo.php";
require_once "controller/todoController.php";


if(isset ($_POST["todo"]) && $_POST["todo"] > '' || isset ($_POST["date"]) && $_POST["date"] > '') {
    $res = todoController::saveDaten($_POST["todo"], $_POST["date"]);
}

if(isset ($_POST["id"]))
{
    $res = todoController::deleteDaten($_POST["id"]);
}

$daten = todoController::getDaten();

//var_dump($daten);

include_once "view/view.php";




