<?php
/**
 * Intervention，图片，编辑器，Colorize 修改器
 */

declare(strict_types=1);

namespace Intervention\Image\Modifiers;

use Intervention\Image\Drivers\SpecializableModifier;

class ColorizeModifier extends SpecializableModifier
{
    /**
     * Create new modifier object
	 * 创建新的修饰符对象
     *
     * @return void
     */
    public function __construct(
        public int $red = 0,
        public int $green = 0,
        public int $blue = 0
    ) {
        //
    }
}
