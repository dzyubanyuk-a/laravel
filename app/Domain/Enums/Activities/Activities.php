<?php

namespace App\Domain\Enums\Activities;

enum Activities:int
{
    case Min_1 = 60;
    case Min_10 = 600;
    case Hour_1 = 3600;
    case Hour_3 = 10800;
    case Day_1 = 86400;
    case Week_1 = 604800;
    case Month_1 = 18144000;
    case No_restrictions = 0;
}
