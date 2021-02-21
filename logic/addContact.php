<?php

require_once __DIR__ . "/../model/contacts.php";

function addContact(string $name, string $number)
{
    global $CONTACT_LIST;
    $index = sizeof($CONTACT_LIST) + 1;
    $CONTACT_LIST[$index] = [
        "name" => $name,
        "number" => $number
    ];
};