<?php
/**
 * Intervention，图像，接口，驱动器接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Config;
use Intervention\Image\Exceptions\DriverException;
use Intervention\Image\Exceptions\NotSupportedException;
use Intervention\Image\Exceptions\RuntimeException;
use Intervention\Image\FileExtension;
use Intervention\Image\Format;
use Intervention\Image\MediaType;

interface DriverInterface
{
    /**
     * Return drivers unique id
	 * 返回驱动程序惟一id
     */
    public function id(): string;

    /**
     * Get driver configuration
	 * 获取驱动程序配置
     */
    public function config(): Config;

    /**
     * Resolve given (generic) object into a specialized version for the current driver
	 * 将对象(通用)对象转换为当前驱动程序的专门版本
     *
     * @throws NotSupportedException
     * @throws DriverException
     */
    public function specialize(
        ModifierInterface|AnalyzerInterface|EncoderInterface|DecoderInterface $object
    ): ModifierInterface|AnalyzerInterface|EncoderInterface|DecoderInterface;

    /**
     * Resolve array of classnames or objects into their specialized version for the current driver
	 * 将类名或对象的数组解析为当前驱动程序的专用版本
     *
     * @param array<string|object> $objects
     * @throws NotSupportedException
     * @throws DriverException
     * @return array<object>
     */
    public function specializeMultiple(array $objects): array;

    /**
     * Create new image instance with the current driver in given dimensions
	 * 在给定维度中创建当前驱动程序的新图像实例
     *
     * @throws RuntimeException
     */
    public function createImage(int $width, int $height): ImageInterface;

    /**
     * Create new animated image
	 * 创建新的动画图像
     *
     * @throws RuntimeException
     */
    public function createAnimation(callable $init): ImageInterface;

    /**
     * Handle given input by decoding it to ImageInterface or ColorInterface
	 * 通过将其解码为ImageInterface或ColorInterface来处理给定的输入
     *
     * @param array<string|DecoderInterface> $decoders
     * @throws RuntimeException
     */
    public function handleInput(mixed $input, array $decoders = []): ImageInterface|ColorInterface;

    /**
     * Return color processor for the given colorspace
	 * 为给定颜色空间返回彩色处理器
     */
    public function colorProcessor(ColorspaceInterface $colorspace): ColorProcessorInterface;

    /**
     * Return font processor of the current driver
	 * 当前驱动程序的返回字体处理器
     */
    public function fontProcessor(): FontProcessorInterface;

    /**
     * Check whether all requirements for operating the driver are met and
     * throw exception if the check fails.
	 * 检查是否在检查失败时,是否满足操作驱动程序的所有要求。
     *
     * @throws DriverException
     */
    public function checkHealth(): void;

    /**
     * Check if the current driver supports the given format and if the
     * underlying PHP extension was built with support for the format.
	 * 检查当前驱动程序是否支持给定的格式,如果底层的PHP扩展是建立在支持格式的基础上。
     */
    public function supports(string|Format|FileExtension|MediaType $identifier): bool;
}
