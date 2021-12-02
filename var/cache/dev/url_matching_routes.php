<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chambre' => [[['_route' => 'chambre', '_controller' => 'App\\Controller\\ChambreController::index'], null, null, null, false, false, null]],
        '/infirmier' => [[['_route' => 'infirmier', '_controller' => 'App\\Controller\\InfirmierController::index'], null, null, null, false, false, null]],
        '/lit' => [[['_route' => 'lit', '_controller' => 'App\\Controller\\LitController::index'], null, null, null, false, false, null]],
        '/patient' => [[['_route' => 'patient', '_controller' => 'App\\Controller\\PatientController::index'], null, null, null, false, false, null]],
        '/personne' => [[['_route' => 'personne', '_controller' => 'App\\Controller\\PersonneController::index'], null, null, null, false, false, null]],
        '/sejour' => [[['_route' => 'sejour', '_controller' => 'App\\Controller\\SejourController::index'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
