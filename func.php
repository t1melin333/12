<?php
function getElenco($filme, $callBack) {
    $elenco = [];
    foreach ($filme as $key => $values) {
        $elenco[] = $key;
    }
    $callBack($elenco);
}

function getElencoPorFilme($elenco,$filme, $callBack){
    $callBack($filme[$elenco]);
}