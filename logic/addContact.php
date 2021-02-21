<?php

require_once __DIR__ . "/../model/contacts.php";

function addContact(string $name, string $number)
{
    if (strlen($name) == 0 or strlen($number) == 0){
        echo "name and number is required \n";
    } else {
        global $CONTACT_LIST;
        $index = sizeof($CONTACT_LIST) + 1;
        $CONTACT_LIST[$index] = [
            "name" => $name,
            "number" => $number
        ];
    };
};