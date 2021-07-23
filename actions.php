<?php

switch ($_GET['route']) {
    
    case 'inspect':
        require_once 'WindTurbine.php';
        $wt = new WindTurbine();
        echo $wt->inspectDamage();
}


