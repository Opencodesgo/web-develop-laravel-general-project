<?php
/**
 * Intervention，图像，编辑器，Profile 编辑器
 */

declare(strict_types=1);

namespace Intervention\Image\Modifiers;

use Intervention\Image\Drivers\SpecializableModifier;
use Intervention\Image\Interfaces\ProfileInterface;

class ProfileModifier extends SpecializableModifier
{
    public function __construct(public ProfileInterface $profile)
    {
        //
    }
}
