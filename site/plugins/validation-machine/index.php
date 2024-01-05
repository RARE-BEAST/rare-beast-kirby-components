<?php

Kirby::plugin('rare-beast/validation-machine', [
    'validators' => [
        'phone' => function ($value) {
            // This expression matches more phone number formats than the default Kirby validator
            // including 123-456-7890, (123) 456-7890, 123 456 7890, 123.456.7890, +1 123 456 7890
            return preg_match('/^\+?1?[-. ]?\(?(\d{3})\)?[-. ]?(\d{3})[-. ]?(\d{4})$/', $value);
        }
    ]
]);