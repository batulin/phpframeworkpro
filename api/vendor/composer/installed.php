<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'garyclarketech/php-framework-pro' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '2d6f6b9225eb0346c1100a45cec23d9a8fdcfc97',
            'type' => 'library',
            'install_path' => __DIR__ . '/../garyclarketech/php-framework-pro',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'league/container' => array(
            'pretty_version' => '4.x-dev',
            'version' => '4.9999999.9999999.9999999-dev',
            'reference' => '388e992884ab75632d93dbaf4d29ec024d64b964',
            'type' => 'library',
            'install_path' => __DIR__ . '/../league/container',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
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
        'orno/di' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '~2.0',
            ),
        ),
        'psr/container' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '90db7b9ac2a2c5b849fcb69dde58f3ae182c68f5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(
                0 => '2.0.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'psr/container-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '^1.0',
            ),
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
