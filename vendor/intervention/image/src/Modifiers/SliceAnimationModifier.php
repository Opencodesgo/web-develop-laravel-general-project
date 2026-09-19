<?php
/**
 * Intervention，图像，编辑器，SliceAnimation 编辑器
 */

declare(strict_types=1);

namespace Intervention\Image\Modifiers;

use Intervention\Image\Drivers\SpecializableModifier;

class SliceAnimationModifier extends SpecializableModifier
{
    public function __construct(public int $offset = 0, public ?int $length = null)
    {
        //
    }
}
