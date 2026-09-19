<?php
/**
 * Intervention，图片，接口，Profile 接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

interface ProfileInterface
{
    /**
     * Cast color profile object to string
	 * 将颜色配置对象设置为字符串
     */
    public function __toString(): string;
}
