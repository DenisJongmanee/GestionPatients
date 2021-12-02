<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'chambre' => [[], ['_controller' => 'App\\Controller\\ChambreController::index'], [], [['text', '/chambre']], [], []],
    'infirmier' => [[], ['_controller' => 'App\\Controller\\InfirmierController::index'], [], [['text', '/infirmier']], [], []],
    'lit' => [[], ['_controller' => 'App\\Controller\\LitController::index'], [], [['text', '/lit']], [], []],
    'patient' => [[], ['_controller' => 'App\\Controller\\PatientController::index'], [], [['text', '/patient']], [], []],
    'personne' => [[], ['_controller' => 'App\\Controller\\PersonneController::index'], [], [['text', '/personne']], [], []],
    'sejour' => [[], ['_controller' => 'App\\Controller\\SejourController::index'], [], [['text', '/sejour']], [], []],
    'service' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
