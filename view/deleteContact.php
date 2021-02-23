<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../model/contacts.php";
require_once __DIR__ . "/../logic/deleteContact.php";


function viewDeleteContact(){
    global $CONTACT_LIST;

    echo "=============DELETE CONTACT=============\n";
    $id = input("input ID : (x to cancel)");
    if ($id === "x"){
        echo "update contact canceled";
        return false;
    };
    if ($id > sizeof($CONTACT_LIST) or $id == 0){
        echo "id not found";
        return false;
    } else {
        return deleteContact($id);
    }
};

