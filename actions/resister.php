<?php

include "../classes/User.php";

$obj = new User;
$obj->store($_POST);