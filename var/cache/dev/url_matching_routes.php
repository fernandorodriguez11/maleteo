<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'inicio', '_controller' => 'App\\Controller\\MaleteoController::maleteo'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null],
        ],
        '/submited' => [[['_route' => 'insertar', '_controller' => 'App\\Controller\\MaleteoController::insertar_guardianes'], null, ['POST' => 0], null, false, false, null]],
        '/recuperacion' => [[['_route' => 'listado', '_controller' => 'App\\Controller\\MaleteoController::recuperacion_guardianes'], null, null, null, true, false, null]],
        '/saludos' => [[['_route' => 'saludo', '_controller' => 'App\\Controller\\DefaultController::saludos'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/recuperacion/e(?'
                    .'|ditar/([^/]++)(*:74)'
                    .'|liminar/([^/]++)(*:97)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'listado_editar', '_controller' => 'App\\Controller\\MaleteoController::usuario_editar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        97 => [
            [['_route' => 'eliminar', '_controller' => 'App\\Controller\\MaleteoController::remove'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
