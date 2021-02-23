<?php

require_once __DIR__ . "/../model/contacts.php";

function showContact()
{
    global $CONTACT_LIST;
    foreach ($CONTACT_LIST as $i => $contact){
        echo <<<CONTENT
        =============== $i ===============
        NAME \t : \t {$contact["name"]}
        NUMBER \t : \t {$contact["number"]}
        =================================\n\n
        CONTENT;
    };
};