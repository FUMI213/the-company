<?php

include "../classes/User.php";

$obj = new User;

$obj->updateUser($_POST, $_GET['id']);