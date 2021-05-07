<?php

require_once 'vendor/autoload.php';

if(!session_id()) {
    session_start();
}

$facebook = new \Facebook\Facebook([
    'app_id' => '270307401364621',
    'app_secret' => 'a346e6874f62adf37d91416d381f7810',
    'default_graph_version' => 'v10.0' 
]);

?>