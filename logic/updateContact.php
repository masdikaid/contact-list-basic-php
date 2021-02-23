<?php

function updateContact(int $id, string $name, string $number)
{
    global $CONTACT_LIST;
    if (strlen($name) == 0 or strlen($number) == 0){
        echo "id or name and number is required \n";
        return false;
    } else if ($id > sizeof($CONTACT_LIST) or $id == 0) {
        echo "data not found \n";
        return false;
    } else {
        $CONTACT_LIST[$id] = [
            "name" => $name,
            "number" => $number
        ];
        return true;
    };
};