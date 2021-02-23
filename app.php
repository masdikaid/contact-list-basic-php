<?php

require_once __DIR__ . "/helper/input.php";
//import model
require_once __DIR__ . "/model/contacts.php";
// import view
require_once __DIR__ . "/view/showContacts.php";
require_once __DIR__ . "/view/addContact.php";
require_once __DIR__ . "/view/updateContact.php";
require_once __DIR__ . "/view/deleteContact.php";

while (true) {
    viewShowContact();
    echo <<<MENU
    menu :
    \t1. add contact
    \t2. update contact
    \t3. delete contact
    \t4. exit\n\n
    MENU;

    $choice = input("select : ");
    if ($choice == 4){
        break;
    };
    switch ($choice) {
        case 1:
            viewAddContact();
            break;

        case 2:
            viewUpdateContact();
            break;

        case 3:
            viewDeleteContact();
            break;
        
        default:
            echo "retype your coiche !!!";
            break;
    };
};
echo "SELESAI";

