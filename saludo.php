<?php
    echo '<h1>Mi primer programa</h1><br /><p>esto funciona!!</p>';
    $edad = 24;

    echo $edad.'<br />';

    $edadAuxiliar = &$edad;

    $edadAuxiliar = 27;
    echo $edadAuxiliar.'<br />';
    echo $edad.'<br />';