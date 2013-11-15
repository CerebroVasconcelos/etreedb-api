<?php
return array(
    'modules' => array(
        'Application',
        'ZF\Apigility',
        'AssetManager',
        'ZF\ApiProblem',
        'ZF\Hal',
        'ZF\ContentNegotiation',
        'ZF\Rest',
        'ZF\Rpc',
        'ZF\Configuration',
        'ZF\Versioning',
        'DoctrineModule',
        'DoctrineORMModule',
        'DoctrineDataFixtureModule',
        'EtreeDb\Db',
    ),

    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),

        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
