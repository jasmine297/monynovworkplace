<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/threads' => [[['_route' => 'threads_limited', '_controller' => 'App\\Controller\\GetThreadCollectionController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => 'threads_limited'], null, ['GET' => 0], null, false, false, null]],
        '/api/search' => [[['_route' => 'threads_search', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => 'threads_search'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/auth' => [[['_route' => 'auth'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|group(?'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:185)'
                                .')'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:226)'
                                    .')'
                                    .'|([^/]++)/(?'
                                        .'|requests(*:255)'
                                        .'|members(*:270)'
                                    .')'
                                .')'
                            .')'
                            .'|_requests(?'
                                .'|(?:\\.([^/]++))?(*:308)'
                                .'|/(?'
                                    .'|([^/]++)/accept(*:335)'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:368)'
                                .')'
                            .')'
                        .')'
                        .'|messages(?'
                            .'|(?:\\.([^/]++))?(*:405)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:442)'
                            .')'
                        .')'
                        .'|threads(?'
                            .'|/([^/]++)/messages(*:480)'
                            .'|(?:\\.([^/]++))?(*:503)'
                            .'|/(?'
                                .'|([^/]++)(*:523)'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:559)'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:596)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:634)'
                                .'|([^/]++)/info(*:655)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        185 => [
            [['_route' => '_api_/groups{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/groups{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        226 => [
            [['_route' => '_api_/groups/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/groups/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => '_api_/groups/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        255 => [[['_route' => '_api_/groups/{group_id}/requests_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\GroupRequest', '_api_operation_name' => '_api_/groups/{group_id}/requests_get_collection'], ['group_id'], ['GET' => 0], null, false, false, null]],
        270 => [[['_route' => '_api_/groups/{id}/members_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/groups/{id}/members_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        308 => [[['_route' => '_api_/group_requests{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\GroupRequest', '_api_operation_name' => '_api_/group_requests{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        335 => [[['_route' => 'accept_group_request', '_controller' => 'App\\Controller\\AcceptGroupRequestController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\GroupRequest', '_api_operation_name' => 'accept_group_request'], ['id'], ['POST' => 0], null, false, false, null]],
        368 => [[['_route' => '_api_/group_requests/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\GroupRequest', '_api_operation_name' => '_api_/group_requests/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        405 => [[['_route' => '_api_/messages{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        442 => [
            [['_route' => '_api_/messages/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => '_api_/messages/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/messages/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
        ],
        480 => [[['_route' => '_api_/threads/{thread_id}/messages_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/threads/{thread_id}/messages_get_collection'], ['thread_id'], ['GET' => 0], null, false, false, null]],
        503 => [[['_route' => '_api_/threads{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => '_api_/threads{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        523 => [[['_route' => 'thread_limited', '_controller' => 'App\\Controller\\GetThreadController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => 'thread_limited'], ['id'], ['GET' => 0], null, false, true, null]],
        559 => [
            [['_route' => '_api_/threads/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => '_api_/threads/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => '_api_/threads/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => '_api_/threads/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        596 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        634 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        655 => [
            [['_route' => 'self_info', '_controller' => 'App\\Controller\\SelfInfoController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'self_info'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
