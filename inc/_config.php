<?php
global $detect;

//Bower path
$bower_path = "bower_components/";

//Bootstrap path
$bootstrap_path = $bower_path . 'bootstrap/dist/';

require_once('lib/Mobile_Detect.php');
$detect = new Mobile_Detect;