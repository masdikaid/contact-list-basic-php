<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../model/contacts.php";
require_once __DIR__ . "/../logic/updateContact.php";


function viewUpdateContact(){
    global $CONTACT_LIST;
    echo "=============UPDATE CONTACT=============\n";

    $id = input("input ID : (x to cancel)");
    if ($id === "x"){
        echo "update contact canceled";
        return false;
    };
    if ($id > sizeof($CONTACT_LIST) or $id == 0){
        echo "id not found";
        return false;
    } else {
        $name = input("input name : (x to cancel) (enter to skip name {$CONTACT_LIST[$id]['name']})");
        switch ($name){
            case "x":
                echo "update contact canceled";
                return false;
            
            case "":
                $name = $CONTACT_LIST[$id]['name'];
                break;
            
            default:
                break;
        };

        $number = input("input number : (x to cancel) (enter to skip number {$CONTACT_LIST[$id]['number']})");
        switch ($number){
            case "x":
                echo "update contact canceled";
                return false;
            
            case "":
                $number = $CONTACT_LIST[$id]['number'];
                break;
            
            default:
                break;
        };

        return updateContact($id, $name, $number);
    }
};

