<?php return array(
    'root' => array(
        'name' => 'root/app',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'nikic/fast-route' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '34128a32009e1b41c4615bcd7d4c39968931e9ea',
            'type' => 'library',
            'install_path' => __DIR__ . '/../nikic/fast-route',
            'aliases' => array(
                0 => '2.0.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'root/app' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'f9c7affe77a00ae32ca127ca6833d034e6d33f25',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(
                0 => '1.28.x-dev',
            ),
            'dev_requirement' => true,
        ),
        'symfony/var-dumper' => array(
            'pretty_version' => '6.3.x-dev',
            'version' => '6.3.9999999.9999999-dev',
            'reference' => '90caf9f1e6f6c31cd5387daaf1c01a740e568a89',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/var-dumper',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
