<?php

use KdG\User;

include('user.class.php');
include('toolbox.class.php');

$user = new User('Sam', 'sam.serrien@kdg.be');
$user = new User('Joske', 'Josker@kdg.be');

$user->printUserDetails();

$user->setEmail('Joske@kdg.be');

Kdg\Toolbox::newLine();

$user->printUserDetails();
