<?php
/**
 * Intervention，图片，Geometry，工厂，Drawable
 */

declare(strict_types=1);

namespace Intervention\Image\Geometry\Factories;

class Drawable
{
    /**
     * Creeate BezierFactory statically
	 * 静态创建BezierFactory
     */
    public static function bezier(): BezierFactory
    {
        return new BezierFactory();
    }

    /**
     * Creeate CircleFactory statically
	 * 静态创建CircleFactory
     */
    public static function circle(): CircleFactory
    {
        return new CircleFactory();
    }

    /**
     * Create EllipseFactory statically
	 * 静态创建EllipseFactory
     */
    public static function ellipse(): EllipseFactory
    {
        return new EllipseFactory();
    }

    /**
     * Creeate LineFactory statically
     */
    public static function line(): LineFactory
    {
        return new LineFactory();
    }

    /**
     * Creeate PolygonFactory statically
     */
    public static function polygon(): PolygonFactory
    {
        return new PolygonFactory();
    }

    /**
     * Creeate RectangleFactory statically
     */
    public static function rectangle(): RectangleFactory
    {
        return new RectangleFactory();
    }
}
