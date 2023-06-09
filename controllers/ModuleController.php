<?php

include_once('../models/Module.php');

$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$description = isset($_POST['description']) ? $_POST['description'] : NULL;
$id = isset($_POST['id']) ? $_POST['id'] : NULL;
$action = isset($_POST['action']) ? $_POST['action'] : NULL;



if ($action == "ajouter") {
    $data = array(
        'nom' => $_POST['nom'],
        'description' => $_POST['description']
    );
    $res = Module::addModule($data);
    if ($res == "ok")
        echo "ok";
    else
        echo "error";
} else if ($action == "modifier") {
    $data = array(
        'id' => $_POST['id'],
        'nom' => $_POST['nom'],
        'description' => $_POST['description']
    );
    $res = Module::updateModule($data);
    if ($res == "ok")
        echo "ok";
    else
        echo "error";
} else if ($action == "supprimer") {
    $res = Module::deleteModule($id);
    if ($res == "ok")
        echo "ok";
    else
        echo "error";
} else if ($action == "afficher") {
    $res =  Module::getModule($id);
    echo $res;
} else if ($action == "afficherTous") {
    $res =  Module::getAllModules();
    echo $res;
} else if ($action == "getByName") {
    $res =  Module::getModuleByName($nom);
    echo $res;
} else if ($action == "chercher") {
    $data = array('search' => $_POST['search']);
    $res = Module::findModule($data);
    echo $res;
}else {
    echo "action non reconnue";
}