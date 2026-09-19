<?php
/**
 * Intervention，图片，接口，分辨接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\DriverException;

interface SpecializableInterface
{
    /**
     * Return an array of constructor parameters, which is usually passed from
     * the generic object to the specialized object
	 * 返回一个构造函数参数数组,通常从泛函对象传入专门化对象。
     *
     * @return array<string, mixed>
     */
    public function specializable(): array;

    /**
     * Set the driver for which the object is specialized
	 * 设置对象是专门化的驱动程序
     *
     * @throws DriverException
     */
    public function setDriver(DriverInterface $driver): self;

    /**
     * Return the driver for which the object was specialized
	 * 返回对象是专门化的驱动程序
     */
    public function driver(): DriverInterface;
}
