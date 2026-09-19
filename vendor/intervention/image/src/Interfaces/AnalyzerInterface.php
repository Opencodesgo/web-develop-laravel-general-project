<?php
/**
 * Intervention，图片，接口，分析器接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\RuntimeException;

interface AnalyzerInterface
{
    /**
     * Analyze given image and return the retrieved data
	 * 分析给定的图像并返回检索的数据
     *
     * @throws RuntimeException
     */
    public function analyze(ImageInterface $image): mixed;
}
