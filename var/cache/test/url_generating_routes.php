<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_/groups{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/groups']], [], [], []],
    '_api_/groups{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/groups']], [], [], []],
    '_api_/groups/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/groups']], [], [], []],
    '_api_/groups/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/groups']], [], [], []],
    '_api_/groups/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Group', '_api_operation_name' => '_api_/groups/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/groups']], [], [], []],
    '_api_/group_requests{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\GroupRequest', '_api_operation_name' => '_api_/group_requests{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/group_requests']], [], [], []],
    '_api_/groups/{group_id}/requests_get_collection' => [['group_id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\GroupRequest', '_api_operation_name' => '_api_/groups/{group_id}/requests_get_collection'], [], [['text', '/requests'], ['variable', '/', '[^/]++', 'group_id', true], ['text', '/api/groups']], [], [], []],
    'accept_group_request' => [['id'], ['_controller' => 'App\\Controller\\AcceptGroupRequestController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\GroupRequest', '_api_operation_name' => 'accept_group_request'], [], [['text', '/accept'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/group_requests']], [], [], []],
    '_api_/group_requests/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\GroupRequest', '_api_operation_name' => '_api_/group_requests/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/group_requests']], [], [], []],
    '_api_/messages{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/messages']], [], [], []],
    '_api_/messages/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], [], []],
    '_api_/messages/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], [], []],
    '_api_/threads/{thread_id}/messages_get_collection' => [['thread_id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/threads/{thread_id}/messages_get_collection'], [], [['text', '/messages'], ['variable', '/', '[^/]++', 'thread_id', true], ['text', '/api/threads']], [], [], []],
    '_api_/messages/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], [], []],
    'threads_limited' => [[], ['_controller' => 'App\\Controller\\GetThreadCollectionController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => 'threads_limited'], [], [['text', '/api/threads']], [], [], []],
    'threads_search' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => 'threads_search'], [], [['text', '/api/search']], [], [], []],
    '_api_/threads{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => '_api_/threads{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/threads']], [], [], []],
    'thread_limited' => [['id'], ['_controller' => 'App\\Controller\\GetThreadController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => 'thread_limited'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/threads']], [], [], []],
    '_api_/threads/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => '_api_/threads/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/threads']], [], [], []],
    '_api_/threads/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Thread', '_api_operation_name' => '_api_/threads/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/threads']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    'self_info' => [['id'], ['_controller' => 'App\\Controller\\SelfInfoController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'self_info'], [], [['text', '/info'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/groups/{id}/members_get_collection' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/groups/{id}/members_get_collection'], [], [['text', '/members'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/groups']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'auth' => [[], [], [], [['text', '/auth']], [], [], []],
];
