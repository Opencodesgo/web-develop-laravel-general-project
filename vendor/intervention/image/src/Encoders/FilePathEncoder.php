<?php
/**
 * Intervention，图片，编码器，文件路径编码器
 */

declare(strict_types=1);

namespace Intervention\Image\Encoders;

use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\EncodedImageInterface;

class FilePathEncoder extends FileExtensionEncoder
{
    /**
     * Create new encoder instance to encode to format of file extension in given path
	 * 创建新的编码器实例来编码到给定路径上的文件扩展格式
     *
     * @return void
     */
    public function __construct(protected ?string $path = null, mixed ...$options)
    {
        parent::__construct(
            is_null($path) ? $path : pathinfo($path, PATHINFO_EXTENSION),
            ...$options
        );
    }

    /**
     * {@inheritdoc}
     *
     * @see EncoderInterface::encode()
     */
    public function encode(ImageInterface $image): EncodedImageInterface
    {
        return $image->encode(
            $this->encoderByFileExtension(
                is_null($this->path) ? $image->origin()->fileExtension() : pathinfo($this->path, PATHINFO_EXTENSION)
            )
        );
    }
}
