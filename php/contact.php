<?php

require_once('config.php');
require_once('DBConnection.php');
require_once('DBFunctions.php');
require_once('functions.php');

addContactMessage($_GET['email'], $_GET['message']);