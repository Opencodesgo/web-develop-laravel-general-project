<?php
/**
 * Intervention，图片，驱动程序，可专门化的
 */

declare(strict_types=1);

namespace Intervention\Image\Drivers;

use Intervention\Image\Interfaces\SpecializableInterface;
use Intervention\Image\Traits\CanBeDriverSpecialized;

abstract class Specializable implements SpecializableInterface
{
    use CanBeDriverSpecialized;
}
