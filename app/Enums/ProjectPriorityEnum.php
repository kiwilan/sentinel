<?php

namespace App\Enums;

use Kiwilan\Steward\Traits\LazyEnum;

enum ProjectPriorityEnum: string
{
    use LazyEnum;

    case high = 'high';

    case medium = 'medium';

    case low = 'low';
}
