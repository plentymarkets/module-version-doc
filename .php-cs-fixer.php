<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__ . '/src');

$config = new PhpCsFixer\Config();

return $config
->setRiskyAllowed(false)
->setRules([
    '@PSR12' => true,
        
    'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
            'keep_multiple_spaces_after_comma' => false,
        ],

        'method_chaining_indentation' => true,
        'array_indentation' => true,
        'class_definition' => [ 
            'multi_line_extends_each_single_line' => true,
            'single_item_single_line' => true,
            'space_before_parenthesis' => true,
        ],
        
        'binary_operator_spaces' => ['default' => 'single_space'],

        'concat_space' => ['spacing' => 'one'], 
        'ternary_operator_spaces' => true, 
        'object_operator_without_whitespace' => true,
        'unary_operator_spaces' => true,

        'statement_indentation' => true,
        'no_trailing_whitespace' => true,
        'no_whitespace_in_blank_line' => true,
        'no_spaces_after_function_name' => true,

        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'line_ending' => true,
        'single_blank_line_at_eof' => true,
        'trailing_comma_in_multiline' => false,
    ])
    ->setFinder($finder);
