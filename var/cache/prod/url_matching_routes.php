<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/auth/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\LoginController::register'], null, null, null, false, false, null]],
        '/auth/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/auth/medication/user/add' => [[['_route' => 'add_medication', '_controller' => 'App\\Controller\\MedicationController::userMedicationAdd'], null, null, null, false, false, null]],
        '/auth/medication/user/all' => [[['_route' => 'app_medication_usermedicationall', '_controller' => 'App\\Controller\\MedicationController::userMedicationAll'], null, null, null, false, false, null]],
        '/auth/medication/request/all' => [[['_route' => 'app_medication_userrequestmedication', '_controller' => 'App\\Controller\\MedicationController::userRequestMedication'], null, null, null, false, false, null]],
        '/medication/detail' => [[['_route' => 'app_medication_medicationdetail', '_controller' => 'App\\Controller\\MedicationController::medicationDetail'], null, null, null, false, false, null]],
        '/auth/medication/add-on-demand' => [[['_route' => 'app_medication_medicationadddemand', '_controller' => 'App\\Controller\\MedicationController::medicationAddDemand'], null, null, null, false, false, null]],
        '/auth/user/detail' => [[['_route' => 'app_user_userdetail', '_controller' => 'App\\Controller\\UserController::userDetail'], null, null, null, false, false, null]],
        '/auth/user/update' => [[['_route' => 'app_user_userupdate', '_controller' => 'App\\Controller\\UserController::userUpdate'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_user_sendemail', '_controller' => 'App\\Controller\\UserController::sendEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:43)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [
            [['_route' => 'app_user_reset', 'token' => null, '_controller' => 'App\\Controller\\UserController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
