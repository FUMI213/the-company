<?php

include "../classes/User.php";

$id = $_POST['user_id'];

$obj = new User;
$obj->deleteUser($id);