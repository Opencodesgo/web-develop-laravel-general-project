<?php
/**
 * Intervention，图片，编辑器，Blur 修改器
 */

declare(strict_types=1);

namespace Intervention\Image\Modifiers;

use Intervention\Image\Drivers\SpecializableModifier;

class BlurModifier extends SpecializableModifier
{
    public function __construct(public int $amount)
    {
        //
    }
}
