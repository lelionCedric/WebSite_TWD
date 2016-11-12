<?php

require_once('validUtils.php');

$dataErrors = array();

$login = filter_var($login, getSanitizeFilter('string'));

if(!preg_match('/^(([a-zA-Z0-9]){1,8})$/',$login))
{
$dataErrors['login'] = "Erreur login invalide";
}

$password = filter_var($password, getSanitizeFilter('string'));

if(!preg_match('/^(([a-zA-Z0-9&#-_+=]){1,10})$/',$password))
{
$dataErrors['password'] = "Erreur password invalide";
}


?>