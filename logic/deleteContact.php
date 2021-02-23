<?php

require_once __DIR__ . "/../model/contacts.php";

function deleteContact(int $id)
{
    global $CONTACT_LIST;
    if ($id == 0 or $id > sizeof($CONTACT_LIST)){
        echo "id $id not found ...\n";
        return false;
    } else {
        for ($i = $id; $i < sizeof($CONTACT_LIST); $i++)
        {
            $CONTACT_LIST[$i] = [
                "name" => $CONTACT_LIST[$i+1]["name"],
                "number" => $CONTACT_LIST[$i+1]["number"]
            ];
        };
        unset($CONTACT_LIST[sizeof($CONTACT_LIST)]);
        return true;
    };
};
