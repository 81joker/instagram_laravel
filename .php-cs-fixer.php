<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__)
    ->exclude([
        'vendor',
        'storage',
        'bootstrap/cache',
        'node_modules',
    ])
    ->notPath('.php-cs-fixer.cache');

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        'new_with_parentheses' =>
        [
            'anonymous_class' => false,
        ]
    ])
    ->setFinder($finder);
