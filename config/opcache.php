<?php

return [

    /*
    |--------------------------------------------------------------------------
    | OPcache Configuration
    |--------------------------------------------------------------------------
    */
    'opcache' => [
        'enable'                  => 1,
        'enable_cli'              => 0,
        'memory_consumption'      => 256,
        'interned_strings_buffer' => 16,
        'max_accelerated_files'   => 20000,
        'revalidate_freq'         => 0,     // 0 = never re-check in production
        'fast_shutdown'           => 1,
        'validate_timestamps'     => 0,     // disable file timestamp checks
        'jit_buffer_size'         => 128,
        'jit'                     => 1255,
    ],

];
