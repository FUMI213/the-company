<?php

include "../classes/User.php";

$obj = new User;
$obj->updatePhoto($_FILES);