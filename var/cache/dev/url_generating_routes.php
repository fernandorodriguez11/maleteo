<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'inicio' => [[], ['_controller' => 'App\\Controller\\MaleteoController::maleteo'], [], [['text', '/']], [], []],
    'insertar' => [[], ['_controller' => 'App\\Controller\\MaleteoController::insertar_guardianes'], [], [['text', '/submited']], [], []],
    'listado' => [[], ['_controller' => 'App\\Controller\\MaleteoController::recuperacion_guardianes'], [], [['text', '/recuperacion/']], [], []],
    'listado_editar' => [['id'], ['_controller' => 'App\\Controller\\MaleteoController::usuario_editar'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/recuperacion/editar']], [], []],
    'eliminar' => [['id'], ['_controller' => 'App\\Controller\\MaleteoController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/recuperacion/eliminar']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'saludo' => [[], ['_controller' => 'App\\Controller\\DefaultController::saludos'], [], [['text', '/saludos']], [], []],
];
