<?php

/**
 * Extension Manager/Repository config file for ext "theme".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Theme',
    'description' => 'Sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Supseven\\Theme\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Helmut Strasser',
    'author_email' => 'h.strasser@supseven.at',
    'author_company' => 'supseven',
    'version' => '1.0.0',
];
