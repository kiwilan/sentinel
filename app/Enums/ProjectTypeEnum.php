<?php

namespace App\Enums;

use Kiwilan\Steward\Traits\LazyEnum;

enum ProjectTypeEnum: string
{
    use LazyEnum;

    case laravel = 'laravel';

    case php = 'php';

    case nodejs = 'nodejs';
}
