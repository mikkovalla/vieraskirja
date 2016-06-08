<?php
//Tuo config
require_once('config/config.php');

//Lataa tietokanta yhteys
function __autoload($class_name){
	require_once('yhteys/'.$class_name.'.php');
}