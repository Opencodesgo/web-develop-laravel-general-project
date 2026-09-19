<?php
/**
 * Intervention，图像，编辑器，DrawLine 编辑器
 */

declare(strict_types=1);

namespace Intervention\Image\Modifiers;

use Intervention\Image\Geometry\Line;
use Intervention\Image\Interfaces\DrawableInterface;

class DrawLineModifier extends AbstractDrawModifier
{
    /**
     * Create new modifier object
	 * 创建新的修饰符对象
     *
     * @return void
     */
    public function __construct(public Line $drawable)
    {
        //
    }

    /**
     * Return object to be drawn
	 * 返回要绘制的对象
     */
    public function drawable(): DrawableInterface
    {
        return $this->drawable;
    }
}
