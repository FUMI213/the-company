<?php

include_once "../classes/User.php";

$obj = new User;
$obj->login($_POST); //pass all data from the form