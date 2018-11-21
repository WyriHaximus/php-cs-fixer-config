<?php declare(strict_types=1);

namespace ApiClients\Tools\CsFixerConfig;

use PhpCsFixer\Config;

final class PhpCsFixerConfig
{
    public static function create(array $extraRules = []): Config
    {
        return Config::create()
            ->setRules(
            [
                '@PSR2' => true,
                'array_syntax' => [
                    'syntax' => 'short',
                ],
                'indentation_type' => true,
                'blank_line_before_return' => true,
                'declare_strict_types' => true,
                'method_separation' => true,
                'new_with_braces' => true,
                'no_extra_consecutive_blank_lines' => true,
                'no_leading_import_slash' => true,
                'no_short_bool_cast' => true,
                'no_unused_imports' => true,
                'no_whitespace_before_comma_in_array' => true,
                'no_whitespace_in_blank_line' => true,
                'ordered_class_elements' => true,
                'ordered_imports' => true,
                'phpdoc_add_missing_param_annotation' => true,
                'phpdoc_align' => true,
                'phpdoc_no_empty_return' => true,
                'phpdoc_order' => true,
                'phpdoc_scalar' => true,
                'phpdoc_summary' => true,
                'return_type_declaration' => true,
                'single_blank_line_before_namespace' => true,
                'single_class_element_per_statement' => true,
                'single_quote' => true,
                'strict_param' => true,
                'trailing_comma_in_multiline_array' => true,
                'native_function_invocation' => true,
                'no_php4_constructor' => true,
                'no_short_echo_tag' => true,
                'no_useless_return' => true,
                'php_unit_internal_class' => true,
                'php_unit_method_casing' => true,
                'php_unit_set_up_tear_down_visibility' => true,
                'protected_to_private' => true,
                'simplified_null_return' => true,
                'void_return' => true,
                'combine_nested_dirname' => true,
                'pow_to_exponentiation' => true,
                'random_api_migration' => true,
                'ternary_to_null_coalescing' => true,
                'visibility_required' => true,
            ] + $extraRules
        );
    }
}
