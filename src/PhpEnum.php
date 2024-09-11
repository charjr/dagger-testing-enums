<?php

declare(strict_types=1);

namespace DaggerModule;

use Dagger\Attribute\DaggerObject;

#[DaggerObject]
enum PhpEnum: string
{
   case Version_8_0 = '8.0';
   case Version_8_3 = '8.3';
}
