<?php
/**
 * Intervention，图片，接口，可拉式工厂接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Closure;

interface DrawableFactoryInterface
{
    /**
     * Create a new factory instance statically
	 * 静态创建一个新的工厂实例
     */
    public static function init(null|Closure|DrawableInterface $init = null): self;

    /**
     * Create the end product of the factory
	 * 创建工厂的最终产品
     */
    public function create(): DrawableInterface;

    /**
     * Define the background color of the drawable object
	 * 定义可绘图对象的背景颜色
     */
    public function background(mixed $color): self;

    /**
     * Set the border size & color of the drawable object to be produced
	 * 设置可绘图对象的边框大小和颜色
     */
    public function border(mixed $color, int $size = 1): self;

    /**
     * Create the end product by invoking the factory
     */
    public function __invoke(): DrawableInterface;
}
