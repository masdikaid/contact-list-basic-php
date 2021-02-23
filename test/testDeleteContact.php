<?php

require_once __DIR__ . "/../logic/showContact.php";
require_once __DIR__ . "/../logic/addContact.php";
require_once __DIR__ . "/../logic/deleteContact.php";


addContact("yeyen", "082279992455");
addContact("dika", "082279992455");
addContact("adi", "082279992455");
addContact("setiawan", "082279992455");
addContact("ambarwati", "082279992455");

deleteContact(5);
deleteContact(1);
deleteContact(3);

showContact();