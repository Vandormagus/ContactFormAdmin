<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/user/contact_form_list' => [[['_route' => 'app_contact_form_index', '_controller' => 'App\\Controller\\ContactFormController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_contact_form_new', '_controller' => 'App\\Controller\\ContactFormController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user/list' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/list/([^/]++)(?'
                    .'|(*:59)'
                    .'|/edit(*:71)'
                    .'|(*:78)'
                .')'
                .'|/admin/user/([^/]++)(?'
                    .'|(*:109)'
                    .'|/edit(*:122)'
                    .'|(*:130)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'app_contact_form_show', '_controller' => 'App\\Controller\\ContactFormController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        71 => [[['_route' => 'app_contact_form_edit', '_controller' => 'App\\Controller\\ContactFormController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        78 => [[['_route' => 'app_contact_form_delete', '_controller' => 'App\\Controller\\ContactFormController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        109 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        130 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
