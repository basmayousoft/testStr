<?php return array(
    'root' => array(
        'name' => 'yourvendorname/yourthemename',
        'pretty_version' => '1.0.0',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'wordpress-theme',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'phpunit/php-timer' => array(
            'pretty_version' => '6.0.0',
            'version' => '6.0.0.0',
            'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpunit/php-timer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'yourvendorname/yourthemename' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'wordpress-theme',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
