<?php

/**
 * Extension Manager/Repository config file for ext "my_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'My Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Tim\\MySitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tim',
    'author_email' => 'tim26618@gmail.com',
    'author_company' => 'Tim',
    'version' => '1.0.0',
];
