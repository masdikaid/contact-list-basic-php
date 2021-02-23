<?php
require_once __DIR__ . "/../logic/showContact.php";
require_once __DIR__ . "/../logic/addContact.php";
require_once __DIR__ . "/../logic/updateContact.php";


addContact("yeyen", "082279992455");
addContact("dika", "082279992455");
addContact("adi", "082279992455");
addContact("setiawan", "082279992455");
addContact("ambarwati", "082279992455");

updateContact(5, "rudianto", "087766271386271");
updateContact(6, "bambang", "087766271386271");

showContact();