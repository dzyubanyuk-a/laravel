<?php

namespace App\Domain\Enums\Accesses;



enum Accesses: int
{
    case Public = 1;
    case Link = 2;
    case Private = 3;


}
