<?php
/**
 * Intervention，图像，编辑器，DrawPixel 编辑器
 */

declare(strict_types=1);

namespace Intervention\Image\Modifiers;

use Intervention\Image\Drivers\SpecializableModifier;
use Intervention\Image\Interfaces\PointInterface;

class DrawPixelModifier extends SpecializableModifier
{
    /**
     * Create new modifier object
	 * 创建新的修饰符对象
     *
     * @return void
     */
    public function __construct(
        public PointInterface $position,
        public mixed $color
    ) {
        //
    }
}
