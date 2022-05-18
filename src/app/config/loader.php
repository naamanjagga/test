<?php

$loader = new \Phalcon\Loader();


$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->handlerDir
    ]
    );

$loader->registerNamespaces(
    [
        'MyApp\Models' => APP_PATH . '/models/'
    ]
    );

$loader->register();