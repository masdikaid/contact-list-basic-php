<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../logic/addContact.php";


function viewAddContact(){
    echo "=============ADD CONTACT=============\n";
    $name = input("input name : (x to cancel)");
    if ($name === "x"){
        echo "add contact canceled";
        return false;
    };

    $number = input("input number : (x to cancel)");
    if ($name === "x"){
        echo "add contact canceled";
        return false;
    };

    return addContact($name, $number);
};

