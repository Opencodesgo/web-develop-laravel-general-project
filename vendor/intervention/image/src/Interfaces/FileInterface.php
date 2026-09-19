<?php
/**
 * Intervention，图片，接口，文件接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\RuntimeException;

interface FileInterface
{
    /**
     * Save data in given path in file system
	 * 在文件系统中保存给定路径的数据
     *
     * @throws RuntimeException
     */
    public function save(string $filepath): void;

    /**
     * Create file pointer from encoded data
	 * 从编码数据创建文件指针
     *
     * @return resource
     */
    public function toFilePointer();

    /**
     * Return size in bytes
	 * 返回大小为字节
     */
    public function size(): int;

    /**
     * Turn encoded data into string
	 * 将编码数据转换为字符串
     */
    public function toString(): string;

    /**
     * Cast encoded data into string
	 * 将编码数据输入字符串
     */
    public function __toString(): string;
}
