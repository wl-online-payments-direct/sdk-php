<?php

// Code style for the hand-written code (lib/) and the tests.
// The generated code (src/) is excluded: its style follows the generator templates.

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/lib',
        __DIR__ . '/tests',
    ]);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PER-CS2x0' => true,
    ])
    ->setFinder($finder);
